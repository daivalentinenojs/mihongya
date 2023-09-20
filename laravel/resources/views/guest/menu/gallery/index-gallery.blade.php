@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.gallery.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.gallery')
@endsection

@section('content')
    @include('guest.components.gallery.photos')    
@endsection
