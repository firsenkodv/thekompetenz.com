export function yandex_map_object(key){

  const elem = document.createElement('script');
            elem.type = 'text/javascript';
            elem.src = '//api-maps.yandex.ru/2.1/?apikey='+ key +'&package.standard&lang=ru_RU';
            document.getElementsByTagName('body')[0].appendChild(elem);
}
