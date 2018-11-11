@php
    $id = $id ?? 'collapse-' . uniqid();
@endphp

<div id="{{ $id }}" class="collapsible">
    @foreach ( $collapsibles as $collapsible )
        <div class="collapsible">
            <div class="collapsible__trigger" id="collapsible-q-{{ $loop->iteration }}">
                <a class="btn btn-link collapsed"
                    href="#collapsible-a-{{ $loop->iteration }}"
                    data-toggle="collapse"
                    data-target="#collapsible-a-{{ $loop->iteration }}"
                    aria-expanded="false"
                    aria-controls="collapsible-a-{{ $loop->iteration }}">
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

            <div id="collapsible-a-{{ $loop->iteration }}"
                class="collapse collapsible__target lead"
                aria-labelledby="collapsible-q-{{ $loop->iteration }}"
                {{ $parent ? 'data-parent=#' . $id : '' }}>
                {!! $collapsible['text'] !!}
            </div>
        </div>
    @endforeach
</div>
