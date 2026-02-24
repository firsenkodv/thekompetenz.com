<div class="content_latest_insights content_our-values">
    <div class="bock">
        <div class="l_i__flex">
            <div class="l_i__left">
                <div class="l_i__wrap">
                    <div class="l_i__title">{{ $title }}</div>
                    <div class="l_i_more">

                    </div>
                </div>
            </div>
            <div class="l_i__right">
                <div class="l_i__items">

                    @if(isset($items))
                        @foreach($items as $item)
                            <div class="l_i__item">
                                <div class="l_i_breadcrumbs"><span>{{ $item['json_number'] }}</span></div>
                                <div class="l_i_short_desc">
                                    <h2>
                                        {{ $item['json_title'] }}
                                    </h2>
                                    <p>
                                        {{ $item['json_text'] }}
                                    </p>

                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
