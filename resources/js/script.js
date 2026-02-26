import { imask } from './include/imask';
/*import {tooltip} from './include/tooltip';*/
import {yandex_map_object} from "./include/site/yandex_map";
import {swiper} from "./include/site/swiper";
import {removeErrors} from "./include/fancybox/form/removeErrors";
 import {select} from "./include/select/select";
import {flash_message} from "./include/flash_message/flash_message";

import {content_faq} from "./include/site/content_faq";



document.addEventListener('DOMContentLoaded', function () {


    imask() // маска на поле input input[name="phone"]
   /* tooltip() // tooltip */
        //  yandex_map_object('43db27ba-be61-4e84-b139-ff37ad4802b8') // карта в объект
    swiper()
    removeErrors() // убрать ошибки с input`s
    select() // select, для axios модальных форм подключается отдельно
    flash_message() // закрытие модального окна
    content_faq() // faq

});
