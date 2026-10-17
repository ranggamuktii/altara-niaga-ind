@extends('layouts.app')

@section('content')

    <x-navbar :company="$company" :navigation="$navigation" />

    <x-hero :data="$hero" />

    <x-about :data="$about" />

    <x-services :data="$services" />

    <x-commodities :data="$commodities" />

    <x-fleet-dispatch />

    <x-trade-simulator />

    <x-incoterms :data="$incoterms" />

    <x-global-reach :data="$reach" />

    <x-why-us :data="$why_us" />

    <x-stats :data="$stats" />

    <x-rfq-form :company="$company" :data="$inquiry" />

    <x-cta :data="$cta" />

    <x-footer :company="$company" :data="$footer" />

@endsection
