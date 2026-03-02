<div class="f_menu">
    @if(config2('moonshine.setting.f_menu'))
        @foreach(config2('moonshine.setting.f_menu') as $k => $item)
            <a href="{{($item['json_link'])??'#'}}">{{ $item['json_title'] }}</a>
        @endforeach
    @endif
</div>
