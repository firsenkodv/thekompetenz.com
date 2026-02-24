@props([
    'route',
])
<div class="content_items content_items-template">
    @if(isset($items))
        <div class="content_items__flex">
            @foreach($items as $item)
                <div class="item content_item">
                <a href="{{ route($route, $item->slug) }}" class="img">
                <img width="320" height="451" src="{{ asset(intervention('320x451', $item->img, 'pages/intervention')) }}"
                     alt="{{ $item->title }}"  loading="lazy" />
                </a>
                <a href="{{ route($route, $item->slug) }}"  class="title">{{ $item->title }}</a>
                <div class="subtitle">{{ $item->subtitle }}</div>
                    <a href="{{ route($route, $item->slug) }}"   class="more"><span>Read more</span> <img width="15" loading="lazy" alt="Read more" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxNyAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjAzNTcgOS45MjZMMTUuNjA3MSA1LjM1NDU3TTE1LjYwNzEgNS4zNTQ1N0wxMS4wMzU3IDAuNzVNMTUuNjA3MSA1LjM1NDU3TDAuNzUwMDA1IDUuMzU0NTciIHN0cm9rZT0iIzZFNkU2RSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K" /></a>
                </div>
            @endforeach
        </div>
    @endif
</div>
