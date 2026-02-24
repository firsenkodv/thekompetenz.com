<!-- Swiper -->
<div class="swiper mySwiperCarouselCentered">
    <div class="swiper-wrapper">

        @if(isset($slides))
            @foreach($slides as $slide)
                <a href="{{ ($slide['json_link'])??'#' }}" class="swiper-slide" style="background: url('{{ Storage::url($slide['json_img']) }}')">
                   <span class="sw-content">
                  <span class="__title">{{ $slide['json_title'] }}</span>
            <span class="__more">Read more <img alt=""
                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMiAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjQ2NDMgMTIuOTg0N0wyMC41NTk1IDYuODg5NDNNMjAuNTU5NSA2Ljg4OTQzTDE0LjQ2NDMgMC43NU0yMC41NTk1IDYuODg5NDNMMC43NDk5ODcgNi44ODk0MyIgc3Ryb2tlPSIjRjRGNkY4IiBzdHJva2Utb3BhY2l0eT0iMC42IiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=">
            </span>
            </span>
                </a>
            @endforeach
        @endif
    </div>
</div>

