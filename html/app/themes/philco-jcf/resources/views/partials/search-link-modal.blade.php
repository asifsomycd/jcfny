<li class="search-link menu-item">
  @include('partials.search-link')

  @section('modal-body')
    {!! get_search_form() !!}
  @overwrite

  @section('modals')
    @parent

    @include('partials.modal', [
        'class' => 'search-modal',
        'type'  => 'search',
    ] )
  @endsection
</li>
