const toTop = document.querySelector('.borderNavHome');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add('borderNavHomeShow');
    } else {
        toTop.classList.remove('borderNavHomeShow');
    }
});