// show search mobile admin
const searchBtnAdm = document.querySelector('.searchBtnAdm');
const searchAdm = document.querySelector('.searchAdm');
const inputSearchMobileAdm = document.querySelector('.inputSearchMobileAdm');
searchBtnAdm.addEventListener('click', () => {
    searchAdm.style.display = 'block';
    setTimeout(() => {
        inputSearchMobileAdm.focus();
    }, 100);
});

// close search mobile admin
document.querySelector('.closeSearchMobileAdm').addEventListener('click', () => {
    searchAdm.style.display = 'none';
});