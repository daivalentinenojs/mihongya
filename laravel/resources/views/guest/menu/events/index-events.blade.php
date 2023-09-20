@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.events.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.events')
@endsection

@section('content') 
    @include('guest.components.events.info')  
@endsection
