@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.blog.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.blog')
@endsection

@section('content')
    @include('guest.components.blog.page') 
    @include('guest.components.about.vendor') 
@endsection
