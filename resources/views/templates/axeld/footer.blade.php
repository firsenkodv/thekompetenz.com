<footer>
    <div class="block">
    <div class="footer_flex">
        <div class="footer_left">
            <x-logo.logo-footer-component :route-name="route_name()" />
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
        <div class="copy f_t_left">
            © {{ date('Y') }} {{ config2('moonshine.setting.f_copyright') }}
        </div>
            <div class="f_t_right">
                <div class="f_menu">
                    @if(config2('moonshine.setting.f_menu'))
                        @foreach(config2('moonshine.setting.f_menu') as $k => $item)
                            <a href="{{($item['json_link'])??'#'}}">{{ $item['json_title'] }}</a>
                        @endforeach
                    @endif
                </div>
                <div class="f_social">
                    @if(config2('moonshine.setting.youtube'))
                        <a href="{{ config2('moonshine.setting.youtube') }}"><img alt="" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAyMCAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEwNTBfNjYyKSI+CjxwYXRoIGQ9Ik03LjcwOTE0IDEwLjY5NzdMMTIuNjE2MSA3LjU4MDgzTDcuNzA5MTQgNC40NjM5NVYxMC42OTc3Wk0xOC42Mzg2IDIuNTYyNjVDMTguNzYxNSAzLjA1MDk2IDE4Ljg0NjYgMy43MDU1MSAxOC45MDMzIDQuNTM2NjhDMTguOTY5NSA1LjM2Nzg1IDE4Ljk5NzkgNi4wODQ3MyAxOC45OTc5IDYuNzA4MUwxOS4wNTQ2IDcuNTgwODNDMTkuMDU0NiA5Ljg1NjE2IDE4LjkwMzMgMTEuNTI4OSAxOC42Mzg2IDEyLjU5OUMxOC40MDIyIDEzLjUzNDEgMTcuODUzOSAxNC4xMzY3IDE3LjAwMyAxNC4zOTY0QzE2LjU1ODYgMTQuNTMxNSAxNS43NDU1IDE0LjYyNSAxNC40OTc1IDE0LjY4NzNDMTMuMjY4NCAxNC43NjAxIDEyLjE0MzMgMTQuNzkxMiAxMS4xMDMzIDE0Ljc5MTJMOS42MDAwNSAxNC44NTM2QzUuNjM4NiAxNC44NTM2IDMuMTcwOTYgMTQuNjg3MyAyLjE5NzE0IDE0LjM5NjRDMS4zNDYyNCAxNC4xMzY3IDAuNzk3ODcyIDEzLjUzNDEgMC41NjE1MDggMTIuNTk5QzAuNDM4NTk5IDEyLjExMDcgMC4zNTM1MDggMTEuNDU2MiAwLjI5Njc4MSAxMC42MjVDMC4yMzA1OTkgOS43OTM4MiAwLjIwMjIzNSA5LjA3Njk0IDAuMjAyMjM1IDguNDUzNTZMMC4xNDU1MDggNy41ODA4M0MwLjE0NTUwOCA1LjMwNTUxIDAuMjk2NzgxIDMuNjMyNzggMC41NjE1MDggMi41NjI2NUMwLjc5Nzg3MiAxLjYyNzU5IDEuMzQ2MjQgMS4wMjQ5OSAyLjE5NzE0IDAuNzY1MjQ4QzIuNjQxNTEgMC42MzAxODMgMy40NTQ2IDAuNTM2Njc3IDQuNzAyNiAwLjQ3NDMzOUM1LjkzMTY5IDAuNDAxNjEyIDcuMDU2NzggMC4zNzA0NDMgOC4wOTY3OCAwLjM3MDQ0M0w5LjYwMDA1IDAuMzA4MTA1QzEzLjU2MTUgMC4zMDgxMDUgMTYuMDI5MSAwLjQ3NDMzOSAxNy4wMDMgMC43NjUyNDhDMTcuODUzOSAxLjAyNDk5IDE4LjQwMjIgMS42Mjc1OSAxOC42Mzg2IDIuNTYyNjVaIiBmaWxsPSIjMDAwMDNEIi8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0iY2xpcDBfMTA1MF82NjIiPgo8cmVjdCB3aWR0aD0iMTkuMiIgaGVpZ2h0PSIxNS4yIiBmaWxsPSJ3aGl0ZSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="></a>
                    @endif
                        @if(config2('moonshine.setting.instagram'))
                    <a href="{{ config2('moonshine.setting.instagram') }}"><img alt="" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTgiIHZpZXdCb3g9IjAgMCAxNyAxOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEwNTBfNjY2KSI+CjxwYXRoIGQ9Ik04LjM2Mzc1IDUuODY1MTNDNi43MzA1OSA1Ljg2NTEzIDUuNDA2NjYgNy4xODY4NCA1LjQwNjY2IDguODE3MjVDNS40MDY2NiAxMC40NDc3IDYuNzMwNTkgMTEuNzY5NCA4LjM2Mzc1IDExLjc2OTRDOS45OTY5IDExLjc2OTQgMTEuMzIwOCAxMC40NDc3IDExLjMyMDggOC44MTcyNUMxMS4zMjA4IDcuMTg2ODQgOS45OTY5IDUuODY1MTMgOC4zNjM3NSA1Ljg2NTEzWiIgZmlsbD0iIzAwMDAzRCIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTMuNjA0NjkgMC43MTYxNTVDNi43NDIwNCAwLjM2NjA5OSA5Ljk4NTQ4IDAuMzY2MDk5IDEzLjEyMjggMC43MTYxNTVDMTQuODUwMSAwLjkwODg4MiAxNi4yNDMzIDIuMjY3NTYgMTYuNDQ2MSAzLjk5ODAxQzE2LjgyMTIgNy4xOTk5MiAxNi44MjEyIDEwLjQzNDYgMTYuNDQ2MSAxMy42MzY1QzE2LjI0MzMgMTUuMzY2OSAxNC44NTAxIDE2LjcyNTYgMTMuMTIyOCAxNi45MTgzQzkuOTg1NDcgMTcuMjY4NCA2Ljc0MjA0IDE3LjI2ODQgMy42MDQ2OSAxNi45MTgzQzEuODc3MzkgMTYuNzI1NiAwLjQ4NDE5NyAxNS4zNjY5IDAuMjgxNDY1IDEzLjYzNjVDLTAuMDkzNjU4OCAxMC40MzQ2IC0wLjA5MzY1ODggNy4xOTk5MiAwLjI4MTQ2NSAzLjk5ODAxQzAuNDg0MTk3IDIuMjY3NTYgMS44NzczOSAwLjkwODg4MiAzLjYwNDY5IDAuNzE2MTU1Wk0xMi45MTMxIDMuMzY3MTlDMTIuNDEwNiAzLjM2NzE5IDEyLjAwMzIgMy43NzM4NyAxMi4wMDMyIDQuMjc1NTNDMTIuMDAzMiA0Ljc3NzE5IDEyLjQxMDYgNS4xODM4NyAxMi45MTMxIDUuMTgzODdDMTMuNDE1NiA1LjE4Mzg3IDEzLjgyMyA0Ljc3NzE5IDEzLjgyMyA0LjI3NTUzQzEzLjgyMyAzLjc3Mzg3IDEzLjQxNTYgMy4zNjcxOSAxMi45MTMxIDMuMzY3MTlaTTQuMDQxODUgOC44MTcyNUM0LjA0MTg1IDYuNDM0MzQgNS45NzY4MyA0LjUwMjYyIDguMzYzNzUgNC41MDI2MkMxMC43NTA3IDQuNTAyNjIgMTIuNjg1NiA2LjQzNDM0IDEyLjY4NTYgOC44MTcyNUMxMi42ODU2IDExLjIwMDIgMTAuNzUwNyAxMy4xMzE5IDguMzYzNzUgMTMuMTMxOUM1Ljk3NjgzIDEzLjEzMTkgNC4wNDE4NSAxMS4yMDAyIDQuMDQxODUgOC44MTcyNVoiIGZpbGw9IiMwMDAwM0QiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMF8xMDUwXzY2NiI+CjxyZWN0IHdpZHRoPSIxNi44IiBoZWlnaHQ9IjE3LjYiIGZpbGw9IndoaXRlIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="></a>
                        @endif
                        @if(config2('moonshine.setting.facebook'))
                            <a href="{{ config2('moonshine.setting.facebook') }}"><img alt="" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTkiIHZpZXdCb3g9IjAgMCAxOCAxOSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEwNTBfNjcwKSI+CjxwYXRoIGQ9Ik0xNy41Mjc0IDkuMTg0M0MxNy41Mjc0IDQuMzY2ODUgMTMuNjE3NiAwLjQ1NzAzMSA4LjgwMDE1IDAuNDU3MDMxQzMuOTgyNjkgMC40NTcwMzEgMC4wNzI4NzYgNC4zNjY4NSAwLjA3Mjg3NiA5LjE4NDNDMC4wNzI4NzYgMTMuNDA4MyAzLjA3NTA2IDE2LjkyNTQgNy4wNTQ2OSAxNy43MzdWMTEuODAyNUg1LjMwOTI0VjkuMTg0M0g3LjA1NDY5VjcuMDAyNDlDNy4wNTQ2OSA1LjMxODEyIDguNDI0ODggMy45NDc5NCAxMC4xMDkyIDMuOTQ3OTRIMTIuMjkxMVY2LjU2NjEySDEwLjU0NTZDMTAuMDY1NiA2LjU2NjEyIDkuNjcyODggNi45NTg4NSA5LjY3Mjg4IDcuNDM4ODVWOS4xODQzSDEyLjI5MTFWMTEuODAyNUg5LjY3Mjg4VjE3Ljg2NzlDMTQuMDgwMSAxNy40MzE2IDE3LjUyNzQgMTMuNzEzOCAxNy41Mjc0IDkuMTg0M1oiIGZpbGw9IiMwMDAwM0QiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMF8xMDUwXzY3MCI+CjxyZWN0IHdpZHRoPSIxNy42IiBoZWlnaHQ9IjE4LjQiIGZpbGw9IndoaXRlIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="></a>
                        @endif
                        @if(config2('moonshine.setting.TikTok'))
                            <a href="{{ config2('moonshine.setting.TikTok') }}">
                                <img alt="" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjg3OTQgMi43OTQ0OEMxMS4zMDI5IDIuMTM1MjEgMTAuOTg1MiAxLjI4ODU0IDEwLjk4NTQgMC40MTIxMDlIOC4zNzk2MVYxMC44ODc4QzguMzU5NTEgMTEuNDU0NyA4LjEyMDYgMTEuOTkxNiA3LjcxMzIgMTIuMzg1NkM3LjMwNTc5IDEyLjc3OTUgNi43NjE2NyAxMi45OTk3IDYuMTk1NDMgMTIuOTk5OEM0Ljk5NzkzIDEyLjk5OTggNC4wMDI4MiAxMi4wMTk4IDQuMDAyODIgMTAuODAzM0M0LjAwMjgyIDkuMzUwMjIgNS40MDI3MiA4LjI2MDQxIDYuODQ0NzggOC43MDgxNlY2LjAzODU2QzMuOTM1MzUgNS42NDk5NCAxLjM4ODU1IDcuOTE0MDQgMS4zODg1NSAxMC44MDMzQzEuMzg4NTUgMTMuNjE2NSAzLjcxNjA5IDE1LjYxODcgNi4xODcgMTUuNjE4N0M4LjgzNSAxNS42MTg3IDEwLjk4NTQgMTMuNDY0NSAxMC45ODU0IDEwLjgwMzNWNS40ODk0M0MxMi4wNDIxIDYuMjQ5NjMgMTMuMzEwOCA2LjY1NzUgMTQuNjExNyA2LjY1NTI3VjQuMDQ0OEMxNC42MTE3IDQuMDQ0OCAxMy4wMjYzIDQuMTIwODMgMTEuODc5NCAyLjc5NDQ4WiIgZmlsbD0iIzAwMDAzRCIvPgo8L3N2Zz4K"></a>
                            @endif
                </div>
                <div class="f_language">

                    <div class="f_language__flex">
                        <img alt="United States" width="24" height="24" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEwMjJfMTExOCkiPgo8cGF0aCBkPSJNMTYgMzJDMjQuODM2NiAzMiAzMiAyNC44MzY2IDMyIDE2QzMyIDcuMTYzNDQgMjQuODM2NiAwIDE2IDBDNy4xNjM0NCAwIDAgNy4xNjM0NCAwIDE2QzAgMjQuODM2NiA3LjE2MzQ0IDMyIDE2IDMyWiIgZmlsbD0iI0YwRjBGMCIvPgo8cGF0aCBkPSJNMTUuMzA0MyAxNkgzMS45OTk5QzMxLjk5OTkgMTQuNTU1OSAzMS44MDc0IDEzLjE1NjkgMzEuNDQ4OCAxMS44MjYxSDE1LjMwNDNWMTZaIiBmaWxsPSIjRDgwMDI3Ii8+CjxwYXRoIGQ9Ik0xNS4zMDQzIDcuNjUyMTlIMjkuNjUxNkMyOC42NzIxIDYuMDUzOTQgMjcuNDE5OCA0LjY0MTI1IDI1Ljk1OTcgMy40NzgyNUgxNS4zMDQzVjcuNjUyMTlaIiBmaWxsPSIjRDgwMDI3Ii8+CjxwYXRoIGQ9Ik0xNS45OTk5IDMyQzE5Ljc2NTUgMzIgMjMuMjI2NSAzMC42OTg1IDI1Ljk1OTcgMjguNTIxN0g2LjA0MDE2QzguNzczMjkgMzAuNjk4NSAxMi4yMzQzIDMyIDE1Ljk5OTkgMzJaIiBmaWxsPSIjRDgwMDI3Ii8+CjxwYXRoIGQ9Ik0yLjM0ODM0IDI0LjM0NzhIMjkuNjUxNkMzMC40Mzc5IDIzLjA2NDcgMzEuMDQ3NyAyMS42NjIyIDMxLjQ0ODggMjAuMTczOUgwLjU1MTE0N0MwLjk1MjIxIDIxLjY2MjIgMS41NjIwMiAyMy4wNjQ3IDIuMzQ4MzQgMjQuMzQ3OFoiIGZpbGw9IiNEODAwMjciLz4KPHBhdGggZD0iTTcuNDExNSAyLjQ5ODYzSDguODY5NTZMNy41MTMzMSAzLjQ4Mzk0TDguMDMxMzcgNS4wNzgyNUw2LjY3NTE5IDQuMDkyOTRMNS4zMTkgNS4wNzgyNUw1Ljc2NjUgMy43MDA5NEM0LjU3MjM3IDQuNjk1NjIgMy41MjU3NSA1Ljg2MSAyLjY2MzI1IDcuMTU5NUgzLjEzMDQ0TDIuMjY3MTIgNy43ODY2OUMyLjEzMjYyIDguMDExMDYgMi4wMDM2MiA4LjIzOSAxLjg4IDguNDcwMzFMMi4yOTIyNSA5LjczOTEzTDEuNTIzMTMgOS4xODAzMUMxLjMzMTk0IDkuNTg1MzcgMS4xNTcwNiA5Ljk5OTU2IDAuOTk5ODc1IDEwLjQyMjRMMS40NTQwNiAxMS44MjA0SDMuMTMwNDRMMS43NzQxOSAxMi44MDU3TDIuMjkyMjUgMTQuNEwwLjkzNjA2MyAxMy40MTQ3TDAuMTIzNjg3IDE0LjAwNDlDMC4wNDIzNzUgMTQuNjU4NiAwIDE1LjMyNDMgMCAxNkgxNkMxNiA3LjE2MzUgMTYgNi4xMjE3NSAxNiAwQzEyLjgzOTMgMCA5Ljg5MjgxIDAuOTE2ODc1IDcuNDExNSAyLjQ5ODYzWk04LjAzMTM3IDE0LjRMNi42NzUxOSAxMy40MTQ3TDUuMzE5IDE0LjRMNS44MzcwNiAxMi44MDU3TDQuNDgwODEgMTEuODIwNEg2LjE1NzE5TDYuNjc1MTkgMTAuMjI2MUw3LjE5MzE5IDExLjgyMDRIOC44Njk1Nkw3LjUxMzMxIDEyLjgwNTdMOC4wMzEzNyAxNC40Wk03LjUxMzMxIDguMTQ0ODFMOC4wMzEzNyA5LjczOTEzTDYuNjc1MTkgOC43NTM4MUw1LjMxOSA5LjczOTEzTDUuODM3MDYgOC4xNDQ4MUw0LjQ4MDgxIDcuMTU5NUg2LjE1NzE5TDYuNjc1MTkgNS41NjUxOUw3LjE5MzE5IDcuMTU5NUg4Ljg2OTU2TDcuNTEzMzEgOC4xNDQ4MVpNMTMuNzcwNSAxNC40TDEyLjQxNDMgMTMuNDE0N0wxMS4wNTgxIDE0LjRMMTEuNTc2MiAxMi44MDU3TDEwLjIxOTkgMTEuODIwNEgxMS44OTYzTDEyLjQxNDMgMTAuMjI2MUwxMi45MzIzIDExLjgyMDRIMTQuNjA4N0wxMy4yNTI0IDEyLjgwNTdMMTMuNzcwNSAxNC40Wk0xMy4yNTI0IDguMTQ0ODFMMTMuNzcwNSA5LjczOTEzTDEyLjQxNDMgOC43NTM4MUwxMS4wNTgxIDkuNzM5MTNMMTEuNTc2MiA4LjE0NDgxTDEwLjIxOTkgNy4xNTk1SDExLjg5NjNMMTIuNDE0MyA1LjU2NTE5TDEyLjkzMjMgNy4xNTk1SDE0LjYwODdMMTMuMjUyNCA4LjE0NDgxWk0xMy4yNTI0IDMuNDgzOTRMMTMuNzcwNSA1LjA3ODI1TDEyLjQxNDMgNC4wOTI5NEwxMS4wNTgxIDUuMDc4MjVMMTEuNTc2MiAzLjQ4Mzk0TDEwLjIxOTkgMi40OTg2M0gxMS44OTYzTDEyLjQxNDMgMC45MDQzMTJMMTIuOTMyMyAyLjQ5ODYzSDE0LjYwODdMMTMuMjUyNCAzLjQ4Mzk0WiIgZmlsbD0iIzAwNTJCNCIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzEwMjJfMTExOCI+CjxyZWN0IHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K">
                        <div class="">United States</div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</footer>
