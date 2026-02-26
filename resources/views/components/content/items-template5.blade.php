@props([
    'route',
])
<div class="content_items-template5">
    @if($items->count())
        @foreach($items as $item)
            <div class="item5 content_item-template pad_t0_important">

                <div class="item5__flex content_item__flex">
                    <div class="item5__left content_item__left">


                        <div class="office office__flex"><span class="o_left">{{ $item->office }}</span>
                            <span
                                class="o_right"> <img width="24" height="24"
                                                      src="{{ asset(intervention('24x24', $item->flag, 'contacts/intervention')) }}"
                                                      alt="{{ $item->title }}" loading="lazy"/>
                            </span>
                        </div>
                        <div class="address">{{ $item->address }}</div>
                        <div class="country">{{ $item->country }}</div>
                    </div>
                    <div class="item5__right content_item__right">

                        <div id="map-{{$item->id}}" class="map"></div>
                        <script>
                            // Создаем уникальную функцию для каждой карты
                            function initMap{{$item->id}}() {
                                var myMap = new ymaps.Map("map-{{$item->id}}", {
                                    center: [{{ $item->map_array['coordinates'] }}],
                                    zoom: 5,
                                    controls: ['zoomControl', 'typeSelector', 'fullscreenControl']
                                }, {searchControlProvider: 'yandex#search'});

                                var myPlacemark = new ymaps.Placemark([{{ $item->map_array['coordinates'] }}], {
                                    balloonContent: '<h5>{{ $item->map_array['title'] }}</h5><p class="jt_ph">{{ $item->map_array['phone'] }}</p> <p class="jt_ph">{{ $item->map_array['email'] }}</p>'
                                }, {
                                    iconLayout: 'default#image',
                                    iconImageHref: '/storage/contacts/myIcon.svg',
                                    iconImageSize: [58, 55],
                                    iconImageOffset: [-28, -48]
                                });

                                myMap.geoObjects.add(myPlacemark);
                            }

                            // Регистрируем функцию для вызова после загрузки API
                            window.yandexMapsCallbacks = window.yandexMapsCallbacks || [];
                            window.yandexMapsCallbacks.push(initMap{{$item->id}});
                        </script>

                    </div>

                </div>
            </div>
        @endforeach

            {{-- Подключаем API с обработчиком --}}
            <script>
                function loadYandexMaps() {
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = '//api-maps.yandex.ru/2.1/?apikey=43db27ba-be61-4e84-b139-ff37ad4802b8&package.standard&lang=ru_RU';

                    script.onload = function() {
                        ymaps.ready(function() {
                            // Вызываем все зарегистрированные callback-функции
                            if (window.yandexMapsCallbacks) {
                                window.yandexMapsCallbacks.forEach(function(callback) {
                                    callback();
                                });
                            }
                        });
                    };

                    document.head.appendChild(script);
                }

                // Запускаем после загрузки DOM
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', loadYandexMaps);
                } else {
                    loadYandexMaps();
                }
            </script>
    @endif
</div>
