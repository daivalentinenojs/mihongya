@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.about.children.faqs')}}
@endsection

@section('banner')
    @include('guest.components.banner.faqs')
@endsection

@section('content')
    @include('guest.components.faqs.info')   
@endsection
