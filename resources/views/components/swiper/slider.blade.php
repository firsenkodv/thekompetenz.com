<!-- Swiper -->
<div class="swiper mySwiperHead">
    <div class="swiper-wrapper">

        @if(collect($slides)->count())
            @foreach($slides as $slide)
                <div class="swiper-slide">
                    <div class="swiper_content">
                        <h2 class="h2">{{ $slide['json_title'] }}</h2>
                        <div class="swiper_desc">{!!  $slide['json_text'] !!}</div>
                    </div>
                </div>
            @endforeach
        @endif


    </div>

    <div class="swiper-scrollbar"></div>

</div>
<div class="sw-pagination">
    <div class="swiper-button-next">Next insight<span><img alt="" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxNiAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEwLjc4NTcgOS42NzZMMTUuMzU3MiA1LjEwNDU3TTE1LjM1NzIgNS4xMDQ1N0wxMC43ODU3IDAuNU0xNS4zNTcyIDUuMTA0NTdMMC41MDAwMzYgNS4xMDQ1NyIgc3Ryb2tlPSIjRjRGNkY4IiBzdHJva2Utb3BhY2l0eT0iMC42IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg=="></span></div>
</div>
