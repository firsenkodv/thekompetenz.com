@props([
    'route',
])
<div class="content_item-template">
    <div class="content_item__flex">
        <div class="content_item__left">
           {{-- Форма--}}
        </div>
        <div class="content_item__right">
            <div class="content_items content_items-template2">
                @if(isset($items))
                    <div class="content_items__block">
                        @foreach($items as $item)
                            <div class="item2 content_item2__flex">
                                <div class="content_item2__left">
                                <a href="{{ route($route, $item->slug) }}" class="img">
                                    <img width="200" height="267" src="{{ asset(intervention('200x267', $item->img, 'pages/intervention')) }}"
                                         alt="{{ $item->title }}"  loading="lazy" />
                                </a>
                                </div>
                                <div class="content_item2__right">
                                    <div class="ci2__flex_direction">
                                        <div class="ci2_top">
                                            <div class="subtitle">{!!  $item->slogan  !!}</div>
                                            <a href="{{ route($route, $item->slug) }}"  class="title">{{ $item->title }}</a>
                                            <div class="short_desc desc">{!!  $item->short_desc !!}</div>
                                        </div>
                                        <div class="ci2_bottom">
                                            <a href="{{ route($route, $item->slug) }}"   class="more"><span>Read more</span> <img width="15" loading="lazy" alt="Read more" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxNyAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjAzNTcgOS45MjZMMTUuNjA3MSA1LjM1NDU3TTE1LjYwNzEgNS4zNTQ1N0wxMS4wMzU3IDAuNzVNMTUuNjA3MSA1LjM1NDU3TDAuNzUwMDA1IDUuMzU0NTciIHN0cm9rZT0iIzZFNkU2RSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K" /></a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        @endforeach
                        {{ $items->withQueryString()->links('pagination::default') }}

                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
