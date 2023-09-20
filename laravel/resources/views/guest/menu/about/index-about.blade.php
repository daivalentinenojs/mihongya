@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.about.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.about')
@endsection

@section('content')
    @include('guest.components.about.info') 
    @include('guest.components.feature.info')
    @include('guest.components.service.info')
    @include('guest.components.about.team') 
    @include('guest.components.about.vendor')
@endsection
