@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.pricing.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.pricing')
@endsection

@section('content')
    @include('guest.components.pricing.info')
    @include('guest.components.quote.form')
@endsection
