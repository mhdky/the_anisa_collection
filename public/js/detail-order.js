const ShowDetailOrder = document.querySelectorAll('.ShowDetailOrder');
const hideDetailOrder = document.querySelectorAll('.hideDetailOrder');
const DetailOrder = document.querySelectorAll('.DetailOrder');

for(let tampilOrder = 0; tampilOrder < ShowDetailOrder.length || tampilOrder < DetailOrder || tampilOrder < hideDetailOrder; tampilOrder++) {
    ShowDetailOrder[tampilOrder].addEventListener('click', () => {
        DetailOrder[tampilOrder].style.display = 'block';
        ShowDetailOrder[tampilOrder].style.display = 'none';
        hideDetailOrder[tampilOrder].style.display = 'block';
    });

    hideDetailOrder[tampilOrder].addEventListener('click', () => {
        DetailOrder[tampilOrder].style.display = 'none';
        ShowDetailOrder[tampilOrder].style.display = 'block';
        hideDetailOrder[tampilOrder].style.display = 'none';
    });
}

const bukaGambarPembayaran = document.querySelectorAll('.bukaGambarPembayaran');
const gambarPembayaran = document.querySelectorAll('.gambarPembayaran');
const tutupGambarPembayaran = document.querySelectorAll('.tutupGambarPembayaran');

for(let tampilGambar = 0; tampilGambar < bukaGambarPembayaran.length || tampilGambar < gambarPembayaran.length || tampilGambar < tutupGambarPembayaran; tampilGambar++) {
    bukaGambarPembayaran[tampilGambar].addEventListener('click', () => {
        gambarPembayaran[tampilGambar].style.display = 'flex';
        document.querySelector('body').style.overflow = 'hidden';
    });
    tutupGambarPembayaran[tampilGambar].addEventListener('click', () => {
        gambarPembayaran[tampilGambar].style.display = 'none';
        document.querySelector('body').style.overflow = 'auto';
    });
}