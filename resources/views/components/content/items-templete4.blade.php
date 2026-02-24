@props([
    'route',
])
<div class="content_items-template4">
    @if($items->count())
        @foreach($items as $item)
            <div class="item4 content_item-template pad_t0_important">

                <div class="item4__flex content_item__flex">
                    <div class="item4__left content_item__left">
                        <a href="{{ route($route, $item->slug) }}" class="img">
                            <img width="496" height="300"
                                 src="{{ asset(intervention('496x300', $item->img, 'pages/intervention')) }}"
                                 alt="{{ $item->title }}" loading="lazy"/>
                        </a>


                    </div>
                    <div class="item4__right content_item__right">
                        <div class="ci4__flex_direction">
                            <div class="ci4_top">
                                <div class="title"><a href="{{ route($route, $item->slug) }}">{{ $item->title }}</a>
                                </div>
                                <div class="short_desc">{{ $item->short_desc }}</div>
                            </div>
                            <div class="ci4_bottom">
                                <a href="{{ route($route, $item->slug) }}"
                                   class="more"><span>Explore more</span><img alt="more" width="17" height="11" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxNyAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjAzNTcgOS45MjZMMTUuNjA3MSA1LjM1NDU3TTE1LjYwNzEgNS4zNTQ1N0wxMS4wMzU3IDAuNzVNMTUuNjA3MSA1LjM1NDU3TDAuNzQ5OTc1IDUuMzU0NTciIHN0cm9rZT0iIzA4NzBEOCIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K" /></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    @endif
</div>
