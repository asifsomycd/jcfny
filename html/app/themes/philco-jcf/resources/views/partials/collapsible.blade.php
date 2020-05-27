@if (! $collapsibles)
  @php return; @endphp
@endif

@php
  $id = $id ?? 'collapse-' . uniqid();
  $preview = ! empty($block) ? $block['is_preview'] : false;
@endphp

@if ($preview)
  <div id="{{ $id }}" class="collapsible-wrap">
    @foreach ($collapsibles as $collapsible)
      <div class="collapsible">
        <div class="collapsible__trigger" id="{{ $id }}-q-{{ $loop->iteration }}">
          <div class="btn btn-link collapsed">
            <div class="collapsible__indicator fa-fw">
              <div class="plus">+</div>
            </div>
            <div class="collapsible__title col pl-0" style="display: inline-block;">
                {!! $collapsible['title'] !!}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  @php return; @endphp
@endif

<div id="{{ $id }}" class="collapsible-wrap">
  @foreach ($collapsibles as $collapsible)
    <div class="collapsible">
      <div class="collapsible__trigger" id="{{ $id }}-q-{{ $loop->iteration }}">
        <a class="btn btn-link collapsed"
          href="#{{ $id }}-a-{{ $loop->iteration }}"
          data-toggle="collapse"
          data-target="#{{ $id }}-a-{{ $loop->iteration }}"
          aria-expanded="false"
          aria-controls="{{ $id }}-a-{{ $loop->iteration }}">
          <div class="row">
              <div class="col-auto pr-0">
                  <div class="collapsible__indicator fa-fw">
                      <div class="plus"><i class="fas fa-fw fa-sm fa-plus"></i></div>
                      <div class="minus"><i class="fas fa-fw fa-sm fa-minus"></i></div>
                  </div>
              </div>
              <div class="collapsible__title col pl-0">
                  {!! $collapsible['title'] !!}
              </div>
          </div>
        </a>
      </div>

      <div id="{{ $id }}-a-{{ $loop->iteration }}"
        class="collapse collapsible__target"
        aria-labelledby="{{ $id }}-q-{{ $loop->iteration }}"
        {{ $parent ? 'data-parent=#' . $id : '' }}>
        {!! $collapsible['text'] !!}
      </div>
    </div>
  @endforeach
</div>
