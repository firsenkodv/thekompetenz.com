<div class="content_services-business">
    <div class="s_b__flex">
    <div class="s_b__left">
        <div class="s_b__wrap">
        <div class="s_b_categories">
            <a href="{{(route('for.businesses'))??'#'}}">{{ $business }}</a>
            <a href="{{(route('for.individuals'))??'#'}}">{{ $individuals }}</a>
        </div>
        <div class="s_b_text">
            {{ $text }}
        </div>
        </div>
        <div class="swiper_navigation_carousel_centered">
            <div class="swiper-b-prev"></div>
            <div class="swiper-b-next"></div>
        </div>

    </div>
    <div class="s_b__right">
        <x-swiper.carusel-centered :slides="$items"/>
    </div>
    </div>

</div>
