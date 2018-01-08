@extends('layout.main')

@section('page_id', 'home')
@section('content')

    {{-- Hero --}}
    @include('home.hero')

    {{-- Benefits --}}
    @include('home.benefits')

    {{-- Testimonials --}}
{{--    @include('home.testimonials')--}}

    {{-- CTA --}}
{{--    @include('home.cta')--}}

    {{-- Contact --}}
    @include('home.contact')

@endsection