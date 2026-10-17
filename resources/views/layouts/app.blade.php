<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth bg-black text-[#EDEDED]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
    $companyName = config('site.company.name', 'Vanguard Trade');
    $tagline = config('site.company.tagline', 'Global Trade Solutions');
    $metaDescription = config('site.company.slogan', 'Direct Sourcing, Certified Compliance, Seamless Global Transit across 40+ international maritime ports.');
    @endphp

    <title>{{ $companyName }} &mdash; {{ $tagline }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="theme-color" content="#000000">

    {{-- OpenGraph & Social Cards --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $companyName }} &mdash; {{ $tagline }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $companyName }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">

    {{-- Structured Data (Schema.org) for Institutional SEO --}}
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "name": "{{ $companyName }}",
            "legalName": "{{ $companyName }}",
            "url": "{{ url('/') }}",
            "email": "{{ config('site.company.email') }}",
            "telephone": "{{ config('site.company.phone') }}",
            "address": {
                "@@type": "PostalAddress",
                "streetAddress": "{{ config('site.company.address') }}",
                "addressCountry": "ID"
            },
            "description": "{{ $metaDescription }}"
        }
    </script>

    {{-- Typography: Inter --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    {{-- Asset Pipeline --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Inter'] antialiased bg-black text-[#EDEDED] selection:bg-white selection:text-black min-h-screen">

    @yield('content')

</body>

</html>