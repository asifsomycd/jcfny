{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('wrap-container')
    <div class="wrap wrapper--pale-gray" role="document">
        <div class="content container">
            <div class="row justify-content-between">
                <main class="main col-12">
                    @while(have_posts()) @php the_post() @endphp
                        @include('partials.content-page')
                    @endwhile
                </main>
            </div>
        </div>
    </div>

    <div class="contact-block__left-right" data-scroll>
        <div class="contact-block__left-background" data-enllax-ratio="-0.2" data-enllax-background-align="left"></div>
        <div class="contact-block__right-background" data-enllax-ratio="0.1" data-enllax-background-align="right"></div>
        <div class="container">
            <div class="row">
                <div class="contact-block__left col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            {!! $left_text !!}
                        </div>
                        <div class="col-12 col-md-11 col-lg-10">
                            <div class="action-form action-form--inline">
                                {!! $left_form !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-block__right col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-lg-1">
                            {!! $right_text !!}
                            <a href="{{ $right_button['url'] }}" class="acf-link btn btn-outline-light">{{ $right_button['title'] }} <span class="d-inline-block ml-3"><i class="far fa-lg fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-block__form" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-7">
                    {!! $form_text !!}
                    {!! $form !!}
                </div>
            </div>
        </div>
    </div>
@endsection
