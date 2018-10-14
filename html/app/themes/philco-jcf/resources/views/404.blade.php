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
                <div class="alert alert-warning">
                    {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
                </div>
                <p>We are happy to assist you. You can contact us by phone during normal business hours (9 am-5 pm).</p>
                <h1>{{ $site_phone }}</h1>
                {{-- get_search_form(false) --}}
            </div>
        </div>
    @endif
@endsection
