@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.contact.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.contact')
@endsection

@section('content')
    @include('guest.components.contact.form') 
    @include('guest.components.about.vendor') 
@endsection
