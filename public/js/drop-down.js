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