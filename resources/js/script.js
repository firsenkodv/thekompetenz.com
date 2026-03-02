import {imask} from './include/imask';
import {swiper} from "./include/site/swiper";
import {removeErrors} from "./include/fancybox/form/removeErrors";
import {select} from "./include/select/select";
import {flash_message} from "./include/flash_message/flash_message";
import {content_faq} from "./include/site/content_faq";
import {mobile} from "./include/mobile/mobile";


document.addEventListener('DOMContentLoaded', function () {

    imask() // маска на поле input input[name="phone"]
    swiper()
    removeErrors() // убрать ошибки с input`s
    select() // select, для axios модальных форм подключается отдельно
    flash_message() // закрытие модального окна
    content_faq() // faq
    mobile() // mobile

});
