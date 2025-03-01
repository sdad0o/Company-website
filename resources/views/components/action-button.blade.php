@php
    $color = '';
    if ($type == 'create') {
        $color = 'primary';
    } elseif ($type == 'edit') {
        $color = 'success';
    } elseif ($type == 'show') {
        $color = 'warning';
    }

@endphp
<a href="{{ $href }}" class="btn btn-sm btn-{{ $color }}">
    @if ($type == 'create')
        {{ __('keywords.add_new') }}
    @elseif($type == 'edit')
        <i class="fe fe-edit fa-2x"></i>
    @elseif($type == 'show')
        <i class="fe fe-eye fa-2x"></i>
    @endif

</a>
