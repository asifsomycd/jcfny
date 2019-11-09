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


    @if($fields['how_columns'])
      @include('partials.layout-columns-icons', [
        'title' => $fields['how_title'],
        'columns' => $fields['how_columns'],
        'button' => $fields['how_button'],
      ])
    @endif

    @if ( $fields['impact'] )
      @include('partials.impact', [
        'title' => $fields['impact_title'],
        'text' => $fields['impact_text'],
        'impact' => $fields['impact'],
        'button' => $fields['impact_button'],
      ])
    @endif

    @if($fields['quotes'])
      @include('partials.layout-quotes', [
        'interval' => $fields['quote_interval'],
        'quotes' => $fields['quotes'],
      ])
    @endif

    @if($fields['faq_faqs'])
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
