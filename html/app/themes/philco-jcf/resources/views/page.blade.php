@extends('layouts.app')

@section('background-arrows')
    @include('partials.background-arrows')
@endsection

@section('post-header')
    @include('partials.header-page')
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
@endsection
