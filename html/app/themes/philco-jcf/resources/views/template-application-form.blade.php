{{--
  Template Name: Application Form
--}}

@extends('layouts.app')

@section('wrap-container')
  <div class="form__intro">
    <div
      class="wrap wrapper--pale-gray"
      role="document"
    >
      <div class="content container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-5">
            <h1
              class="entry-title fix-widow-skip"
              data-scroll
            >{!! get_the_title() !!}</h1>
          </div>
          <main
            class="main col-12 col-lg-5 offset-lg-1"
            data-scroll
          >
            @while (have_posts())
              @php the_post() @endphp
              @include('partials.content-page')
            @endwhile
          </main>
        </div>
      </div>
    </div>

    <div class="wrapper--blueberry">
      <div
        class="container"
        data-scroll
      >
        <div class="row align-items-center">
          <div class="form__intro__text col-12 col-lg-5">
            {!! $intro_text !!}
          </div>
          <div class="form__step-0 col-12 col-lg-5 offset-lg-1"></div>
        </div>
      </div>
    </div>
  </div>

  <div
    class="form__app"
    style="display: none;"
  >
    <div class="form__progress-bar wrapper--blueberry">
      <div class="container">
        <div class="row flex-nowrap flex-lg-wrap">
          @foreach ($steps as $step)
            <div class="progress__step progress__step--{{ $loop->iteration }} col">
              <div class="progress__indicator">
                <div class="progress__circle"></div>
              </div>
              <strong>Step {{ $loop->iteration }}<span class="d-none d-md-inline">:</span></strong><br />
              <small class="d-none d-md-inline">{{ $step['title'] }}</small>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="form__wrapper">
      <div class="container">
        <div class="row">
          <div class="form__sidebar col-12 col-lg-4 pr-lg-5">
            @foreach ($steps as $step)
              <div class="sidebar__step--{{ $loop->iteration }}">
                <div class="h4">Step {{ $loop->iteration }}:</div>
                <div class="h3">{{ $step['title'] }}</div>
                @if ($step['image'])
                  <img
                    class="d-none d-lg-block"
                    src="{{ $step['image']['sizes']['col-4'] }}"
                  >
                @endif
                {!! $step['text'] !!}
              </div>
            @endforeach

            <div class="sidebar__callout mt-5 d-none d-lg-block">
              <div class="h4">Any Questions?</div>
              <div class="h3 fix-widow-skip">Call <a
                  class="link-white"
                  href="{{ $site_phone_url }}"
                >{{ $site_phone }}</a></div>
              <a
                class="btn btn-primary"
                href="{{ get_the_permalink($site_contact_page) }}"
                target="_blank"
              >Or Email Us</a>
            </div>
          </div>

          <div class="form__entree col-12 col-lg-6 pl-lg-5"></div>

          <div class="form__sidebar form__sidebar--mobile col-12 d-lg-none text-center">
            <div class="sidebar__callout">
              <div class="h4">Any Questions?</div>
              <div class="h3">Call <a
                  class="link-white"
                  href="{{ $site_phone_url }}"
                >{{ $site_phone }}</a></div>
              <a
                class="btn btn-primary"
                href="{{ get_the_permalink($site_contact_page) }}"
                target="_blank"
              >Or Email Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="application-form">
    {!! $application_form !!}
    {{--
      Force form to show
      @see {https://stackoverflow.com/a/67741301/1331870}
    --}}
    <script>
      jQuery('.gform_wrapper').show();
    </script>
  </div>
@endsection
