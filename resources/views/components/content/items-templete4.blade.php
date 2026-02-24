@props([
    'route',
])
<div class="content_item-template4">
@if($items->count())
        @foreach($items as $item)

            {{ $item->title }}

        @endforeach
    @endif
</div>
