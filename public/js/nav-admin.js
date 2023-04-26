const burgerBtnAdm = document.querySelector('.burgerBtnAdm');
const lineAdm = document.querySelectorAll('.lineAdm');
const listNavAdm = document.querySelector('.listNavAdm');

burgerBtnAdm.addEventListener('click', () => {
    lineAdm[0].classList.toggle('lineS');
    lineAdm[1].classList.toggle('lineD');
    lineAdm[2].classList.toggle('lineT');
    listNavAdm.classList.toggle('listNavAdmShow');
})