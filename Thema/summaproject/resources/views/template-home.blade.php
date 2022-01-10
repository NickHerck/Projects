{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.jumbotron')
    @include('partials.blocks')
    @include('partials.about')
    @include('partials.advertisers')
    @include('partials.publishers')
    @include('partials.testimonials')
    @include('partials.team')
    @include('partials.contact')
  @endwhile
@endsection
