<div class="content_latest_insights">
    <div class="bock">
        <div class="l_i__flex">
            <div class="l_i__left">
                <div class="l_i__wrap">
                    <div class="l_i__title">{{ $title }}</div>
                    <div class="l_i_more">
                        <a href="{{ ($link)?:'#' }}">Read all insights <span><img alt="" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMiAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjQ2NDMgMTIuOTg0N0wyMC41NTk1IDYuODg5NDNNMjAuNTU5NSA2Ljg4OTQzTDE0LjQ2NDMgMC43NU0yMC41NTk1IDYuODg5NDNMMC43NDk5ODcgNi44ODk0MyIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"></span></a>
                    </div>
                </div>
            </div>
            <div class="l_i__right">
                <div class="l_i__items">

                @if(isset($items))
                    @foreach($items as $item)
                            <a href="{{ ($item['json_link'])??'#' }}" class="l_i__item">
                                <div class="l_i_breadcrumbs"><span>{{ $item['json_category'] }}</span></div>
                                <div class="l_i_short_desc">
                                    <h2>
                                       {{ $item['json_title'] }}
                                    </h2>
                                </div>
                            </a>
                        @endforeach
                @endif

                </div>
            </div>
        </div>
    </div>
</div>

