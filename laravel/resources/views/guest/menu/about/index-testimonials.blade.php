@extends('guest.layout.default')

@section('title')
    {{__('company.info.brand.title')}} | {{__('navigation.about.children.testimonials')}}
@endsection

@section('banner')
    @include('guest.components.banner.testimonials')
@endsection

@section('content')
    @include('guest.components.testimonial.info')  
    @include('guest.components.testimonial.videos') 
    @include('guest.components.about.vendor') 
@endsection
