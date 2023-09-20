@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.home.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.home')
@endsection

@section('content')
    @include('guest.components.home.facts') 
    @include('guest.components.about.info') 
    @include('guest.components.feature.info')
    @include('guest.components.service.info')
    @include('guest.components.pricing.info')
    @include('guest.components.quote.form')
    @include('guest.components.testimonial.info')
    @include('guest.components.about.team') 
    <!-- ('components.blog.info') -->
    @include('guest.components.about.vendor') 
@endsection
