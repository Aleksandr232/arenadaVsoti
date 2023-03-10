

 // menu
const hnNavbarBurgerBtn = document.querySelector('.hn-navbar__burger__btn');
const hnNavbarMenu = document.querySelector('.hn-navbar__menu');
const hnNavbarBurger = document.querySelector('.hn-navbar__burger');
const hnNavbarBurgerTitle = document.querySelector('.hn-navbar__burger__title');



hnNavbarBurgerBtn.addEventListener('click', () => {
    hnNavbarMenu.classList.toggle('active');
    hnNavbarBurger.classList.toggle('active');
    hnNavbarBurgerTitle.classList.toggle('active');
    console.log('Melnkov dev', 'https://newportfolio-sooty-kappa.vercel.app/')


});


// Website dark/light theme

const themeBtn = document.querySelector(".theme-btn");

themeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");
    themeBtn.classList.toggle("sun");

    localStorage.setItem("saved-theme", getCurrentTheme());
    localStorage.setItem("saved-icon", getCurrentIcon());
});

const getCurrentTheme = () => document.body.classList.contains("dark-theme") ? "dark" : "light";
const getCurrentIcon = () => themeBtn.classList.contains("sun") ? "sun" : "moon";

const savedTheme = localStorage.getItem("saved-theme");
const savedIcon = localStorage.getItem("saved-icon");

if(savedTheme) {
    document.body.classList[savedTheme === "dark" ? "add" : "remove"]("dark-theme");
    themeBtn.classList[savedIcon === "sun" ? "add" : "remove"]("sun");
}


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

// ?????????? ?? ???????? ????????????????
let inp = document.querySelectorAll('.mask-phone');

inp.forEach((e) => {
    // ?????????????????? ??????????
    e.addEventListener('focus', event => {
        // ???????? ?????? ???????????? ?????? ?????? ????????, ???? ??????????
        if(!/^\+\d*$/.test(event.value))
            // ???? ?????????????????? ???????? ?????????? ?????? ????????????????
            e.value = '+7';
    });

    e.addEventListener('keypress', evt => {
        // ???????????????? ???????? ???? ????????
        if(!/\d/.test(evt.key))
            e.preventDefault();
    });
})

console.log('Melnkov dev', 'https://newportfolio-sooty-kappa.vercel.app/')
users()



