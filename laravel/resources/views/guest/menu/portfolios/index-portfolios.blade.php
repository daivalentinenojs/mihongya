@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.portfolios.header')}}
@endsection

@section('banner')
    @include('guest.components.banner.portfolios')
@endsection

@section('content') 
    @include('guest.components.portfolios.info')  
@endsection
