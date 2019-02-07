@extends('layouts.app')

@section('post-header')
	@include('partials.header-page')
@endsection

@section('wrap-container')
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">

          @if (!have_posts())
            <div class="alert alert-warning">
              {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
          @endif

          @while(have_posts()) @php the_post() @endphp
            @include('partials.content')
          @endwhile

					{!! get_the_posts_navigation( [
						'prev_text' => 'Previous',
						'next_text' => 'Next'
					] ) !!}

				</div>
			</div>
		</div>
	</div>
@endsection
