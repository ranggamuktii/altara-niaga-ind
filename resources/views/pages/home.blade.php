@extends('layouts.app')

@section('content')

    <x-navbar :company="$company" :navigation="$navigation" />

    <x-hero :data="$hero" />

    <x-trade-simulator />

    <x-about :data="$about" />

    <x-services :data="$services" />

    <x-commodities :data="$commodities" />

    <x-incoterms :data="$incoterms" />

    <x-stats :data="$stats" />

    <x-global-reach :data="$reach" />

    <x-why-us :data="$why_us" />

    <x-rfq-form :company="$company" :data="$inquiry" />

    <x-cta :data="$cta" />

    <x-footer :company="$company" :data="$footer" />

@endsection
