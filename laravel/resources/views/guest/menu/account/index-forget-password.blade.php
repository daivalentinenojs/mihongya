@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.account.children.forget-password')}}
@endsection

@section('banner')
    @include('guest.components.banner.forget-password')
@endsection

@section('content')
    @include('guest.components.account.forget-password') 
@endsection
