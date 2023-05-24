document.querySelector('.showForm').addEventListener('click', () => {
    document.querySelector('.formPay').style.height = 'max-content';
});

const btnBuktiPembayaran = document.querySelector('.btnBuktiPembayaran');
const iconBuktiPembayaran = document.querySelector('.iconBuktiPembayaran');
const buktiPembayaran = document.querySelector('.buktiPembayaran');

btnBuktiPembayaran.addEventListener('click', () => {
    iconBuktiPembayaran.classList.toggle('iconBuktiPembayaranRotate');
    buktiPembayaran.classList.toggle('buktiPembayaranShow');
})