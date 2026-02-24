@props([
    'array'
])

@if($array)
    @foreach($array as $item)
    <div class="trusted_protection__slider">
        @if($item['json_link'])
            <a href="{{ $item['json_link'] }}">
                @endif
                <img src="{{ asset(Storage::url($item['json_img'])) }}" class="trusted_protection__img"
                     alt="{{ $item['json_title'] }}" loading="lazy"/>
                @if($item['json_link'])
            </a>
        @endif
    </div>
    @endforeach
@endif
