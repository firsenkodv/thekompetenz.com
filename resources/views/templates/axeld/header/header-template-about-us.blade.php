<header>
    <div class="header_background_about-us">
        <video autoplay muted loop playsinline id="background-video">
            <source src="{{ Storage::url('video/1.mp4') }}" type="video/mp4">
            Ваш браузер не поддерживает видео тег.
        </video>
        <!-- Остальной контент -->
        <div class="block_header block">
            <div class="block_header__left">
                <x-logo.logo-component :route-name="route_name()"/>
            </div>
            <div class="block_header__center">
                <div class="header_menu">
                    <x-menu.header-menu-component  />
                </div>
            </div>
            <div class="block_header__right">
                <div class="header_enter">
                    <x-avatar.avatar-component />
                </div>
                <div class="header_language">
                    <img alt=""
                         src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEwMjJfMTExOCkiPgo8cGF0aCBkPSJNMTYgMzJDMjQuODM2NiAzMiAzMiAyNC44MzY2IDMyIDE2QzMyIDcuMTYzNDQgMjQuODM2NiAwIDE2IDBDNy4xNjM0NCAwIDAgNy4xNjM0NCAwIDE2QzAgMjQuODM2NiA3LjE2MzQ0IDMyIDE2IDMyWiIgZmlsbD0iI0YwRjBGMCIvPgo8cGF0aCBkPSJNMTUuMzA0MyAxNkgzMS45OTk5QzMxLjk5OTkgMTQuNTU1OSAzMS44MDc0IDEzLjE1NjkgMzEuNDQ4OCAxMS44MjYxSDE1LjMwNDNWMTZaIiBmaWxsPSIjRDgwMDI3Ii8+CjxwYXRoIGQ9Ik0xNS4zMDQzIDcuNjUyMTlIMjkuNjUxNkMyOC42NzIxIDYuMDUzOTQgMjcuNDE5OCA0LjY0MTI1IDI1Ljk1OTcgMy40NzgyNUgxNS4zMDQzVjcuNjUyMTlaIiBmaWxsPSIjRDgwMDI3Ii8+CjxwYXRoIGQ9Ik0xNS45OTk5IDMyQzE5Ljc2NTUgMzIgMjMuMjI2NSAzMC42OTg1IDI1Ljk1OTcgMjguNTIxN0g2LjA0MDE2QzguNzczMjkgMzAuNjk4NSAxMi4yMzQzIDMyIDE1Ljk5OTkgMzJaIiBmaWxsPSIjRDgwMDI3Ii8+CjxwYXRoIGQ9Ik0yLjM0ODM0IDI0LjM0NzhIMjkuNjUxNkMzMC40Mzc5IDIzLjA2NDcgMzEuMDQ3NyAyMS42NjIyIDMxLjQ0ODggMjAuMTczOUgwLjU1MTE0N0MwLjk1MjIxIDIxLjY2MjIgMS41NjIwMiAyMy4wNjQ3IDIuMzQ4MzQgMjQuMzQ3OFoiIGZpbGw9IiNEODAwMjciLz4KPHBhdGggZD0iTTcuNDExNSAyLjQ5ODYzSDguODY5NTZMNy41MTMzMSAzLjQ4Mzk0TDguMDMxMzcgNS4wNzgyNUw2LjY3NTE5IDQuMDkyOTRMNS4zMTkgNS4wNzgyNUw1Ljc2NjUgMy43MDA5NEM0LjU3MjM3IDQuNjk1NjIgMy41MjU3NSA1Ljg2MSAyLjY2MzI1IDcuMTU5NUgzLjEzMDQ0TDIuMjY3MTIgNy43ODY2OUMyLjEzMjYyIDguMDExMDYgMi4wMDM2MiA4LjIzOSAxLjg4IDguNDcwMzFMMi4yOTIyNSA5LjczOTEzTDEuNTIzMTMgOS4xODAzMUMxLjMzMTk0IDkuNTg1MzcgMS4xNTcwNiA5Ljk5OTU2IDAuOTk5ODc1IDEwLjQyMjRMMS40NTQwNiAxMS44MjA0SDMuMTMwNDRMMS43NzQxOSAxMi44MDU3TDIuMjkyMjUgMTQuNEwwLjkzNjA2MyAxMy40MTQ3TDAuMTIzNjg3IDE0LjAwNDlDMC4wNDIzNzUgMTQuNjU4NiAwIDE1LjMyNDMgMCAxNkgxNkMxNiA3LjE2MzUgMTYgNi4xMjE3NSAxNiAwQzEyLjgzOTMgMCA5Ljg5MjgxIDAuOTE2ODc1IDcuNDExNSAyLjQ5ODYzWk04LjAzMTM3IDE0LjRMNi42NzUxOSAxMy40MTQ3TDUuMzE5IDE0LjRMNS44MzcwNiAxMi44MDU3TDQuNDgwODEgMTEuODIwNEg2LjE1NzE5TDYuNjc1MTkgMTAuMjI2MUw3LjE5MzE5IDExLjgyMDRIOC44Njk1Nkw3LjUxMzMxIDEyLjgwNTdMOC4wMzEzNyAxNC40Wk03LjUxMzMxIDguMTQ0ODFMOC4wMzEzNyA5LjczOTEzTDYuNjc1MTkgOC43NTM4MUw1LjMxOSA5LjczOTEzTDUuODM3MDYgOC4xNDQ4MUw0LjQ4MDgxIDcuMTU5NUg2LjE1NzE5TDYuNjc1MTkgNS41NjUxOUw3LjE5MzE5IDcuMTU5NUg4Ljg2OTU2TDcuNTEzMzEgOC4xNDQ4MVpNMTMuNzcwNSAxNC40TDEyLjQxNDMgMTMuNDE0N0wxMS4wNTgxIDE0LjRMMTEuNTc2MiAxMi44MDU3TDEwLjIxOTkgMTEuODIwNEgxMS44OTYzTDEyLjQxNDMgMTAuMjI2MUwxMi45MzIzIDExLjgyMDRIMTQuNjA4N0wxMy4yNTI0IDEyLjgwNTdMMTMuNzcwNSAxNC40Wk0xMy4yNTI0IDguMTQ0ODFMMTMuNzcwNSA5LjczOTEzTDEyLjQxNDMgOC43NTM4MUwxMS4wNTgxIDkuNzM5MTNMMTEuNTc2MiA4LjE0NDgxTDEwLjIxOTkgNy4xNTk1SDExLjg5NjNMMTIuNDE0MyA1LjU2NTE5TDEyLjkzMjMgNy4xNTk1SDE0LjYwODdMMTMuMjUyNCA4LjE0NDgxWk0xMy4yNTI0IDMuNDgzOTRMMTMuNzcwNSA1LjA3ODI1TDEyLjQxNDMgNC4wOTI5NEwxMS4wNTgxIDUuMDc4MjVMMTEuNTc2MiAzLjQ4Mzk0TDEwLjIxOTkgMi40OTg2M0gxMS44OTYzTDEyLjQxNDMgMC45MDQzMTJMMTIuOTMyMyAyLjQ5ODYzSDE0LjYwODdMMTMuMjUyNCAzLjQ4Mzk0WiIgZmlsbD0iIzAwNTJCNCIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzEwMjJfMTExOCI+CjxyZWN0IHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K">
                </div>
            </div>
        </div>

        <div class="about-us-data">
        <div class="block">
            <h1 class="h2">{{ config2('moonshine.work.title') }}</h1>
        </div>
        <div class="block">
            <p class="short_desc">{{ config2('moonshine.work.short_desc') }}</p>
        </div>
        </div>

    </div>
</header>

