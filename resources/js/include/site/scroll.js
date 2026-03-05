export function scroll() {
// Функция, которая возвращает элемент по ID
    const button = document.getElementById('scrollTopBtn');

// Обработчик события прокрутки окна браузера
    window.addEventListener('scroll', function() {
        // Если страница была прокручена хотя бы немного вниз,
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            button.classList.add("show");     // показываем кнопку
        } else {
            button.classList.remove("show");  // скрываем кнопку
        }
    });

// Когда клюкают на кнопку, плавно поднимаемся
    button.onclick = function(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
}
