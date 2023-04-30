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