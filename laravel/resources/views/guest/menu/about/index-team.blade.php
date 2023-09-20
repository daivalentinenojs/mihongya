@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.about.children.team')}}
@endsection

@section('banner')
    @include('guest.components.banner.team')
@endsection

@section('content')
    @include('guest.components.about.team') 
    @include('guest.components.about.vendor')
@endsection