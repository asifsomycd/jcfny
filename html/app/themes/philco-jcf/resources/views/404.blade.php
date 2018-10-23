@extends('layouts.app')

@section('background-arrows')
    @include('partials.background-arrows')
@endsection

@section('post-header')
    @include('partials.header-page')
@endsection

@section('content')
    @if (!have_posts())
        <div class="row">
            <div class="the-content col-12 col-md-8 col-lg-6 offset-lg-1">
                {!! $error_text !!}
                {{-- get_search_form(false) --}}
            </div>
        </div>
    @endif
@endsection
