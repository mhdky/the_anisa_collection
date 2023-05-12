const copyButtons = document.querySelectorAll('.copyResi');
const alertResis = document.querySelectorAll('.alertResi');

copyButtons.forEach(function(copyButton, index) {
    copyButton.addEventListener('click', function() {
        const nomorResi = this.previousElementSibling;
        const teks = nomorResi.textContent;

        const textarea = document.createElement('textarea');
        textarea.value = teks;
        document.body.appendChild(textarea);

        textarea.select();
        document.execCommand('copy');

        document.body.removeChild(textarea);

        const alertResi = alertResis[index];
        alertResi.style.display = 'flex';
        setTimeout(function() {
        alertResi.style.display = 'none';;
        }, 3000);
    });
});