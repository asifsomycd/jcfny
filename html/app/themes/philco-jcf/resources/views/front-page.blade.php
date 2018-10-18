@extends('layouts.app')

@section('wrap-container')
    <div class="wrap" role="document">
        <div class="home-block__headline" data-enllax-ratio="-0.1" data-enllax-background-align="right" data-scroll>
            <div class="content container">
                <div class="row justify-content-between">
                    <main class="main col-12">
                        <h1 class="entry-title">{{ get_the_title() }}</h1>
                        <div class="entry-content lead row justify-content-between align-items-center">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                @while(have_posts()) @php the_post() @endphp
                                    @php the_content() @endphp
                                @endwhile
                            </div>

                            <div class="home-block__headline_cta col-12 col-lg-4">
                                @include('partials.acf-link', $fields['headline_button'])
                                
                                <div class="d-sm-none"><br></div>
                                
                                <a href="#1" 
                                    class="acf-link link-tealish link-underline ml-sm-5" 
                                    data-toggle="modal" 
                                    data-target=".headline-modal">
                                    {!! $fields['headline_video']['text'] !!}
                                </a>

                                @section('modal-body')
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe data-src="https://www.youtube.com/embed/{{ $fields['headline_video']['video_id'] }}?rel=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                @overwrite

                                @section('modals')
                                    @parent

                                    @include('partials.modal', [
                                        'type'      => 'iframe-video',
                                        'class'     => 'headline-modal',
                                    ] )
                                @endsection
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        @if ( $fields['image_text'] )
            <div class="home-block__image position-relative" data-scroll>
                <div class="home-block__image_container">
                    <div class="container-fluid h-100">
                        <div class="row h-100">
                            <div class="home-block__image_block col-12 col-lg-7 h-100" style="background-image: url({{ $fields['image']['sizes']['col-6'] }});"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-12 col-lg-4 font-size-md pt-5 pb-5">
                            <div class="wrapper">
                                {!! $fields['image_text'] !!}

                                <div class="mt-4">
                                    @include('partials.acf-link', $fields['image_button'])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ( $fields['how_columns'] )
            <div class="home-block__how" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
                <div class="container text-center text-md-left">
                    <h2>How It Works</h2>
                    <div class="row mt-4 mb-3">
                        @foreach ( $fields['how_columns'] as $column )
                            <div class="col-6 col-md-4 offset-3 offset-md-0 mb-4 mb-lg-0 pl-lg-4 pr-lg-4 text-center">
                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-4">
                                        <img src="{{ $column['image']['sizes']['col-4'] }}">
                                    </div>
                                    <div class="col-12 col-lg-8 text-lg-left">
                                        {!! $column['text'] !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @include('partials.acf-link', array_merge(
                        $fields['how_button'],
                        [ 'class' => 'btn btn-outline-light' ]
                    ) )
                </div>
            </div>
        @endif

        @if ( $fields['quote'] )
            <div class="home-block__quote" data-enllax-ratio="-0.2" data-enllax-background-align="right" data-scroll>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-7">
                            <h2 class="mb-4">{!! $fields['quote'] !!}</h2>
                            <div class="float-left home-block__quote-author">
                                &ndash;
                            </div>
                            <div class="float-left ml-1">
                                <div class="home-block__quote-author">{{ $fields['quote_name'] }}</div>
                                <div class="home-block__quote-title">{!! $fields['quote_title'] !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ( $fields['faq_faqs'] )
            <div class="home-block__faq" data-enllax-ratio="-0.1" data-enllax-background-align="left" data-scroll>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2>Frequently Asked Questions</h2>
                        </div>

                        <div class="col-12 col-lg-8">
                            <div id="faqs">
                                @foreach ( $fields['faq_faqs'] as $faq )
                                    <div class="faq">
                                        <div class="faq__question" id="faq-q-{{ $loop->iteration }}">
                                            <button class="btn btn-link collapsed" 
                                                data-toggle="collapse" 
                                                data-target="#faq-a-{{ $loop->iteration }}" 
                                                aria-expanded="false" 
                                                aria-controls="faq-a-{{ $loop->iteration }}"> 
                                                <div class="row">
                                                    <div class="col-auto pr-0">
                                                        <div class="faq__indicator fa-fw">
                                                            <div class="plus"><i class="fas fa-fw fa-sm fa-plus"></i></div>
                                                            <div class="minus"><i class="fas fa-fw fa-sm fa-minus"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-0">
                                                        {!! $faq['title'] !!}
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div id="faq-a-{{ $loop->iteration }}" 
                                            class="collapse" 
                                            aria-labelledby="faq-q-{{ $loop->iteration }}" 
                                            data-parent="#faqs">
                                            <div class="faq__answer lead">
                                                {!! $faq['text'] !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ( $fields['advisors_text'] )
            <div class="home-block__advisors" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5 font-size-md">
                            {!! $fields['advisors_text'] !!}
                        </div>
                        <div class="col-12 mt-3">
                            @include('partials.acf-link', $fields['advisors_button'])
                            <div class="d-sm-none"><br></div>
                            @include('partials.acf-link', array_merge(
                                $fields['advisors_link'],
                                [ 'class' => 'link-tealish link-underline ml-sm-5' ]
                            ) )
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
