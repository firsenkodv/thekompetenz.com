<div class="content_trusted-protection">
    <div class="block">
        @if($img)
            <div class="trusted_protection__slider">
                <img src="{{ Storage::url($img) }}" class="trusted_protection__img" alt="trusted_protection" />
            </div>
        @endif
        <div class="trusted_protection__options">
            <div class="t_p__flex">
                <div class="t_p__left">
                    <div class="t_p__title">
                        {!! ($title)??'' !!}
                    </div>
                    <div class="t_p__more">

                        <a href="#">About us <span><img alt=""
                                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMiAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjQ2NDMgMTIuOTg0N0wyMC41NTk1IDYuODg5NDNNMjAuNTU5NSA2Ljg4OTQzTDE0LjQ2NDMgMC43NU0yMC41NTk1IDYuODg5NDNMMC43NTAwMDIgNi44ODk0MyIgc3Ryb2tlPSIjNkU2RTZFIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo="></span>
                        </a>
                    </div>
                </div>
                <div class="t_p__right">

                    @if(!is_null($items))
                        @foreach($items as $item)
                            <div class="protection_data">
                                <div class="protection_data__success">
                                    <div class="p_t_num blue-light">{{ $item['json_title'] }}</div>
                                    <div class="p_t_num_desc blue-strong">{{ $item['json_subtitle'] }}</div>
                                </div>
                                <div class="protection_data__desc">
                                    {{ $item['json_text'] }}
                                </div>
                            </div>

                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
