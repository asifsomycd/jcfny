@extends('layouts.app')

@section('wrap-container')
  <div class="wrap" role="document">
    <div class="layout-block__headline" data-enllax-ratio="-0.1" data-enllax-background-align="right" data-scroll>
      <div class="content container">
        <div class="row justify-content-between">
          <main class="main col-12">
            <h1 class="entry-title">{!! get_the_title() !!}</h1>
            <div class="entry-content lead row justify-content-between align-items-center">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                @while(have_posts()) @php the_post() @endphp
                  @php the_content() @endphp
                @endwhile
              </div>

              <div class="layout-block__headline_cta col-12 col-lg-4 text-center text-lg-left">
                @include('partials.acf-link', $fields['headline_button'])

                @if ( $fields['headline_video']['video_id'] )
                  <div class="d-xl-none"><br></div>

                  @include('partials.modal-video', [
                    'button_classes' => 'acf-link link-tealish link-underline ml-xl-5',
                    'button_text' => $fields['headline_video']['text'],
                    'video_id' => $fields['headline_video']['video_id'],
                    'modal_id' => 'video-headline-' . $fields['headline_video']['video_id'],
                  ])
                @endif
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>

    @if ( $fields['image_text'] )
      <div class="layout-block__image position-relative" data-scroll>
        <div class="layout-block__image_container">
          <div class="container-fluid h-100">
            <div class="row h-100">
              <div class="layout-block__image_block col-12 col-lg-7 h-100" style="background-image: url({{ $fields['image']['sizes']['col-6'] }});"></div>
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
      <div class="layout-block__how" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
        <div class="container text-center text-md-left">
          <h2>{{ $fields['how_title'] }}</h2>
          <div class="row justify-content-center mt-4 mb-3">
            @foreach ( $fields['how_columns'] as $column )
              <div class="col-8 col-md-4 mb-4 mb-lg-0 pl-lg-4 pr-lg-4 text-center">
                <div class="row">
                  <div class="col-12 col-lg-4 mb-4">
                    <img src="{{ $column['image']['sizes']['col-4'] }}" alt="How It Works">
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

    @if ( $fields['impact'] )
      <div class="layout-block__impact" data-scroll>
        <div class="container text-center text-md-left">
          <div class="row">
            <div class="col-12 col-lg-6">
              <h2>{{ $fields['impact_title'] }}</h2>
              {!! $fields['impact_text'] !!}
            </div>
          </div>
          <div class="row justify-content-center mt-4 mb-3">
            @foreach ( $fields['impact'] as $column )
              <div class="layout-block__impact-column count-up col-8 col-md-4 mb-4 mb-lg-0 {{ !$loop->first ? 'pl-lg-5' : '' }} {{ !$loop->last ? 'pr-lg-5' : '' }} text-center text-md-left" data-scroll>
                <div class="layout-block__impact-text">
                  {{ $column['pre'] }}<span class="count-up-target" data-end="{!! $column['count'] !!}">{!! $column['count'] !!}</span>{{ $column['post'] }}
                </div>
                <p>
                  <strong>{{ $column['description'] }}</strong>
                </p>
              </div>
            @endforeach
          </div>
          <div class="row">
            <div class="col-12 col-md-4 pr-lg-5">
              @include('partials.acf-link', $fields['impact_button'])
            </div>
          </div>
        </div>
      </div>
    @endif

    @if ($fields['quotes'])
      @include('partials.layout-quotes', [
        'interval' => $fields['quote_interval'],
        'quotes' => $fields['quotes'],
      ])
    @endif

    @if ($fields['faq_faqs'])
      @include('partials.layout-faqs', [
        'faqs' => $fields['faq_faqs'],
        'title' => 'Frequently Asked Questions',
      ])
    @endif

    @if ( $fields['advisors_text'] )
      <div class="layout-block__advisors" data-enllax-ratio="0.1" data-enllax-background-align="right" data-scroll>
        <div class="parallax-badge d-none d-md-block" data-enllax-ratio="-0.1"></div>
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 font-size-md">
              {!! $fields['advisors_text'] !!}
            </div>
            <div class="col-12 text-center text-lg-left">
              @include('partials.acf-link', $fields['advisors_button'])
              <div class="d-lg-none"><br></div>
              @include('partials.acf-link', array_merge(
                $fields['advisors_link'],
                [ 'class' => 'link-tealish link-underline ml-lg-5' ]
              ) )
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
@endsection
