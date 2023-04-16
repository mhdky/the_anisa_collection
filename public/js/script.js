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

// drop down
const namaPengguna = document.querySelector('.nama-pengguna');
const profileLogout = document.querySelector('.profile-logout');
const closeProfileLogout = document.querySelector('.close-profile-logout');
const arrowDown = document.querySelector('.arrow-down');

namaPengguna.addEventListener('click', () => {
    profileLogout.style.display = 'block';
    closeProfileLogout.style.display = 'block';
    arrowDown.style.transform = 'rotate(180deg)';
});
closeProfileLogout.addEventListener('click', () => {
    profileLogout.style.display = 'none';
    closeProfileLogout.style.display = 'none';
    arrowDown.style.transform = 'rotate(0deg)';
});

const myprofile = document.querySelector('.myprofile');
const upicon = document.querySelector('.upicon');
myprofile.addEventListener('mouseenter', () => {
    upicon.style.color = '#424242';
});
myprofile.addEventListener('mouseleave', () => {
    upicon.style.color = '#1E1E1E';
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