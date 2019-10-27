{{--
  Template Name: Calculator
--}}

@extends('layouts.app')

@section('post-header')
    @include('partials.header-page')
@endsection

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
@endsection

@section('wrap-container')
  @if($calculator)
    <script>const calculatorParams = {!! $calculator !!};</script>
    <div id="react-calculator"></div>
  @endif

  @if($impact)
    @include('partials.impact', [
      'title' => $impact->title,
      'text' => $impact->text,
      'impact' => $impact->impact,
      'button' => $impact->button,
    ])
  @endif

  <div class="wrap container mt-5" role="document">
    <div class="content">
      <div class="row justify-content-center">
        <main class="main col-12 col-lg-10">
          @yield('content')
        </main>
      </div>
    </div>
  </div>
@endsection
