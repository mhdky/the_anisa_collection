setTimeout(() => {
    const alertOk = document.querySelector('.alertOk');
    alertOk.classList.add('alertOkHide');
}, 5000);
setTimeout(() => {
    document.querySelector('.alertOk').style.display = 'none';
}, 5400);