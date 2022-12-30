 // menu
const hnNavbarBurgerBtn = document.querySelector('.hn-navbar__burger__btn');
const hnNavbarMenu = document.querySelector('.hn-navbar__menu');
const hnNavbarBurger = document.querySelector('.hn-navbar__burger');
const hnNavbarBurgerTitle = document.querySelector('.hn-navbar__burger__title');



hnNavbarBurgerBtn.addEventListener('click',  () => {
    hnNavbarMenu.classList.toggle('active');
    hnNavbarBurger.classList.toggle('active');
    hnNavbarBurgerTitle.classList.toggle('active');

});


//  modal window
const btnOpenModal = document.querySelectorAll('.btn')
    , modalWindow = document.querySelector('.modal-window')
    , closeModal = document.querySelectorAll('.close-modal, .modal-bg')
    , scroll = calcScroll();

btnOpenModal.forEach(i => {
    i.addEventListener('click', () => {
        let qwerty = modalWindow.querySelector('input[name=hidden]').value = i.getAttribute('data-btn');
        if(modalWindow.style.display !== 'block') {
            modalWindow.style.display = 'block';
            document.body.style.overflow = 'hidden';
            document.body.style.marginRight = `${scroll}px`;
        }
    });
});

closeModal.forEach(elem => {
    elem.addEventListener('click', function() {
        if(modalWindow.style.display !== 'none') {
            modalWindow.style.display = 'none';
            document.body.style.overflow = '';
            document.body.style.marginRight = '0px';
        }
    });
});

function calcScroll() {
    const div = document.createElement('div');

    div.style.width = '50px';
    div.style.height = '50px';
    div.style.overflowY = 'scroll';
    div.style.visibility = 'hidden';

    document.body.appendChild(div);

    let scrollWidth = div.offsetWidth - div.clientWidth;
    div.remove();

    return scrollWidth;
}

// Маска в поле телефона
let inp = document.querySelectorAll('.mask-phone');

inp.forEach((e) => {
    // Проверяем фокус
    e.addEventListener('focus', event => {
        // Если там ничего нет или есть, но левое
        if(!/^\+\d*$/.test(event.value))
            // То вставляем знак плюса как значение
            e.value = '+7';
    });

    e.addEventListener('keypress', evt => {
        // Отменяем ввод не цифр
        if(!/\d/.test(evt.key))
            e.preventDefault();
    });
})






