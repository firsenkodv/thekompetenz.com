<div class="content_item-template content_item-template3">
    <div class="content_item__flex">
        <div class="content_item__left">
            <div class="t_p__title">
                <span class="blue-strong">Departments</span>
            </div>
        </div>
        <div class="content_item__right">
            <div class="content_items content_items-template2">
                @if(isset($items))
                    <div class="content_items__block">
                        @foreach($items as $item)
                            <div class="item2 content_item2__flex">
                                <div class="content_item2__left">
                                <div class="img">
                                    <img width="200" height="267" src="{{ asset(intervention('200x267', $item->img, 'pages/intervention')) }}"
                                         alt="{{ $item->title }}"  loading="lazy" />
                                </div>
                                </div>
                                <div class="content_item2__right">
                                    <div class="ci2__flex_direction">
                                        <div class="ci2_top">
                                            <div  class="title title3">{{ $item->title }}</div>
                                            <div class="subtitle3">{!!  $item->subtitle  !!}</div>
                                            <div class="short_desc desc">{!!  $item->short_desc !!}</div>
                                        </div>
                                        <div class="ci2_bottom">

                                        </div>

                                    </div>


                                </div>
                            </div>
                        @endforeach


                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
