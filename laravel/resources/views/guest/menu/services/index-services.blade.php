@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.services.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.services')
@endsection

@section('content')
    @include('guest.components.service.info')    
    @include('guest.components.quote.form')
    @include('guest.components.testimonial.info')
    @include('guest.components.about.vendor') 
@endsection
