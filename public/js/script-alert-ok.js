setTimeout(() => {
    const alertOk = document.querySelector('.alertOk');
    alertOk.classList.add('alertOkHide');
}, 3000);
setTimeout(() => {
    document.querySelector('.alertOk').style.display = 'none';
}, 3400);