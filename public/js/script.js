// burger button
const lineBurgerButton = document.querySelectorAll('.line');
const burgerButton = document.querySelector('.burger-button');
const listMobile = document.querySelector('.list-mobile');
burgerButton.addEventListener('click', () => {
    lineBurgerButton[0].classList.toggle('lineFs');
    lineBurgerButton[1].classList.toggle('lineSc');
    lineBurgerButton[2].classList.toggle('lineTh');
    listMobile.classList.toggle('list-nav-mobile-show');
});


// search desktop
const searchDesktop = document.querySelector('.search-desktop');
const formSearchDesktop = document.querySelector('.form-search-desktop');
const iconSearch = document.querySelector('.icon-search');
const closeformSearch = document.querySelector('.close-form-search');

searchDesktop.addEventListener('click', () => {
    formSearchDesktop.style.display = 'block';
    iconSearch.style.color = '#DF9903';
    closeformSearch.style.display = 'block';

    function autofocusSearch() {
        document.getElementById('input-search').focus();
    }
    setTimeout(() => {
        autofocusSearch()
    }, 500);
});
closeformSearch.addEventListener('click', () => {
    formSearchDesktop.style.display = 'none';
    iconSearch.style.color = '#1E1E1E';
    closeformSearch.style.display = 'none';
});

// input search desktop desabled and none disabled
function FnSearchDesktop() {
    const inputSearchDesktop = document.querySelector('.inputSearchDesktop').value.replace(/\s/g,'');
    const btnSearchDesktop = document.querySelector('.btnSearchDesktop');
    if(inputSearchDesktop.length > 0) {
        btnSearchDesktop.disabled = false;
    } else {
        btnSearchDesktop.disabled = true;
    }
}

// input search mobile desabled and none disabled
function FnSearchMobile() {
    const inputSearchMobile = document.querySelector('.inputSearchMobile').value.replace(/\s/g,'');
    const btnSearchMobile = document.querySelector('.btnSearchMobile');
    if(inputSearchMobile.length > 0) {
        btnSearchMobile.disabled = false;
    } else {
        btnSearchMobile.disabled = true;
    }
}