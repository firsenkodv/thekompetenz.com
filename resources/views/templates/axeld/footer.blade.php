<footer>
    <div class="block">
        <div class="footer_flex">
            <div class="footer_left">
                <x-logo.logo-footer-component :route-name="route_name()"/>
                <div class="f__title">
                    {!!  config2('moonshine.setting.f_title') !!}
                </div>
                <br>
                <div class="f__copy">{{ config2('moonshine.setting.f_desc') }}</div>
            </div>
            <div class="footer_right">
                <div class="f_flex quick_links">
                    @if(config2('moonshine.setting.f_circles'))
                        @foreach(config2('moonshine.setting.f_circles') as $k => $item)
                            <div class="f{{$k}}">
                                <div class="quick_link @if($k==2) quick_link__blue @endif">
                                    <div class="base">{{ $item['json_title'] }}</div>
                                    <div class="explained">{{ $item['json_text'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>

            </div>
        </div>
        <div class="footer_two">

            <x-footer.copy/>

            <div class="f_t_right">

                <x-footer.menu/>
                <x-social.social-footer/>

                <div class="f_language">

                    <x-footer.language/>

                </div>
            </div>
        </div>
    </div>
</footer>
