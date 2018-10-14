<div 
    @if ( isset( $form_display ) && $form_display === 'inline' ) 
        class="action-form action-form--inline" 
    @else 
        class="action-form"
        data-scroll
    @endif
>

    @section('form-text')
        <p class="lead"><strong>Have more questions?</strong></p>
        <h3>Decide if a JCF Fund is right for you</h3>
    @endsection

    @section('form')
        {!! $site_action_form !!}
        <div class="no-spam">
            No spam. We promise.
        </div>
    @endsection

    @if ( isset( $is_sticky ) ) 
        <div class="row justify-content-between">
            <div class="col-7">
                @yield('form-text')
            </div>
            <div class="col-5">
                <p class="lead">&nbsp;</p>
                @yield('form')
            </div>
        </div>
    @else
        @yield('form-text')
        @yield('form')
    @endif
</div>
