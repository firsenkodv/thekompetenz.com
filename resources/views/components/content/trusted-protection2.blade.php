<div class="content_trusted-protection">
    <div class="block">
        <div class="trusted_protection__options">
            <div class="t_p__flex pad_t10_important">
                <div class="t_p__left">
                    <div class="t_p__title">
                        {!! ($title)??'' !!}
                    </div>
                    <div class="t_p__more">

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
