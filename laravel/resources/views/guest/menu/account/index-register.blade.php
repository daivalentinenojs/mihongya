@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.account.children.register')}}
@endsection

@section('banner')
    @include('guest.components.banner.register')
@endsection

@section('content')
    @include('guest.components.account.register') 
@endsection
