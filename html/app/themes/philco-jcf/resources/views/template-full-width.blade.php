{{--
  Template Name: Full Width
--}}

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

@section('wrap-container')
    <div class="wrap container" role="document">
        <div class="content">
            <div class="row justify-content-center">
                <main class="main col-12 col-lg-10">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
@endsection
