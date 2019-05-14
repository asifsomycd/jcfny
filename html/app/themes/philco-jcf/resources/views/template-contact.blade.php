{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('wrap-container')
  {{-- Desktop Version --}}
  <div id="desktop-contact" class="d-none d-md-block">

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

    <div class="contact-block__form" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 col-xl-7">
            {!! $form_text !!}
            <div id="desktop-form__email">
              {!! $form !!}
            </div>
          </div>
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
                <div id="desktop-form__info" class="action-form action-form--inline">
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

  </div>

  {{-- Mobile Version --}}
  {{--
    Here's the thing... This separate mobile version was thrown in quite
    late to the project. Rather than reconfigure everything, we're going
    to go with a more static than dynamic route. Sorry. :/
  --}}
  <div id="mobile-contact" class="d-md-none">
    <div class="wrap wrapper--blueberry" role="document">
      <div class="container">
        <div class="collapsible">
          <div class="collapsible__trigger">
            <a class="btn btn-link" href="{{ $site_phone_url }}">
              <div class="row">
                <div class="col-auto pr-0">
                  <div class="collapsible__indicator fa-fw">
                    <i class="far fa-fw fa-sm fa-arrow-right"></i>
                  </div>
                </div>
                <div class="collapsible__title col pl-0">
                  <span>Call Now</span>
                  {{ $site_phone }}
                </div>
              </div>
            </a>
          </div>
        </div>

        @include('partials.collapsible', [
          'id' => 'mobile-contact-collapse',
          'parent' => true,
          'collapsibles' => [
            // [
            //   'title' => 'Schedule a Call',
            //   'text' => '<div id="mobile-form__schedule"></div>',
            // ],
            [
              'title' => 'Email Us',
              'text' => $form_text . '<div id="mobile-form__email"></div>',
            ],
            [
              'title' => 'Request More Info',
              'text' => $left_text . '<div id="mobile-form__info"></div>',
            ],
          ]
        ])

        <div class="collapsible">
          <div class="collapsible__trigger">
            <a class="btn btn-link" href="{{ $right_button['url'] }}">
              <div class="row">
                <div class="col-auto pr-0">
                  <div class="collapsible__indicator fa-fw">
                    <i class="far fa-fw fa-sm fa-arrow-right"></i>
                  </div>
                </div>
                <div class="collapsible__title col pl-0">
                  Open a Fund
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
