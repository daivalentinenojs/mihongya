@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.account.children.login')}}
@endsection

@section('banner')
    @include('guest.components.banner.login')
@endsection

@section('content')
    @include('guest.components.account.login') 
@endsection
