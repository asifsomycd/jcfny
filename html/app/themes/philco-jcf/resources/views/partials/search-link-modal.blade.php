<li class="search-link menu-item">
  <a href="#search" class="search-link-trigger" role="button" data-toggle="modal" data-target=".search-modal" aria-label="Search form">
    <i class="fas fa-search"></i>
  </a>

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
