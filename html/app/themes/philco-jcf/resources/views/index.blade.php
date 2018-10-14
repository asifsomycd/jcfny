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

					@while (have_posts()) @php the_post() @endphp
						@include('partials.content-'.get_post_type())
					@endwhile

					{{-- TODO Infinite scroll --}}
					{!! get_the_posts_navigation( [ 
						'prev_text' => 'Show Previous Posts',
						'next_text' => 'Show Newer Posts' 
					] ) !!}

				</div>
			</div>
		</div>
	</div>
@endsection
