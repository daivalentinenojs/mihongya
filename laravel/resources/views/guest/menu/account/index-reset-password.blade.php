@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.account.children.reset-password')}}
@endsection

@section('banner')
    @include('guest.components.banner.reset-password')
@endsection

@section('content')
    @include('guest.components.account.reset-password') 
@endsection
