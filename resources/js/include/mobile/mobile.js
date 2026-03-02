import { slideToggle } from '../methods/slideToggle';

export function mobile() {
    const close = document.querySelector('.app_h_menu .app_close');
    const open = document.querySelector('.app_open_menu');

    open.addEventListener('click', showHide)
    close.addEventListener('click', showHide)

    function showHide() {
        const hMenu = document.querySelector('.app_h_menu');
        hMenu.classList.toggle('active');
        slideToggle(document.querySelector('.app_h_menu'), 400);
    }
}
