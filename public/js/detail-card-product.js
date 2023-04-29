// carad product
const buttonDetilMobile = document.querySelectorAll('.buttonDetilMobile');
const detailDescriptionCardMobile = document.querySelectorAll('.detailDescriptionCardMobile');
const buttonDetilMobileHidden = document.querySelectorAll('.buttonDetilMobileHidden');
const cardProductBorder = document.querySelectorAll('.cardProductBorder');

for(let a = 0; a < buttonDetilMobile.length || a < detailDescriptionCardMobile.length || a < buttonDetilMobileHidden.length || a < cardProductBorder.length; a++) {
    buttonDetilMobile[a].addEventListener('click', () => {
        detailDescriptionCardMobile[a].style.display = 'block';
        buttonDetilMobile[a].style.display = 'none';
        buttonDetilMobileHidden[a].style.display = 'block';
        cardProductBorder[a].style.border = '1px solid #52525b';
    });

    buttonDetilMobileHidden[a].addEventListener('click', () => {
        detailDescriptionCardMobile[a].style.display = 'none';
        buttonDetilMobile[a].style.display = 'block';
        buttonDetilMobileHidden[a].style.display = 'none';
        cardProductBorder[a].style.border = '1px solid #e4e4e7';
    })
}

// menu option
const buttonOption = document.querySelectorAll('.buttonOption');
const optionMenu = document.querySelectorAll('.optionMenu');
const closeOptionMenu = document.querySelectorAll('.closeOptionMenu');
const btnHapusProductAdm = document.querySelectorAll('.btnHapusProductAdm');
const alertHapusProductAdm = document.querySelectorAll('.alertHapusProductAdm');
const noDeleteProductAdm = document.querySelectorAll('.noDeleteProductAdm');

for(let b = 0; b < buttonOption.length || b < optionMenu.length || b < closeOptionMenu.length || b < btnHapusProductAdm.length || b < alertHapusProductAdm.length || b < noDeleteProductAdm.length;  b++) {
    // show option menu
    buttonOption[b].addEventListener('click', () => {
        optionMenu[b].style.display = 'block';
        closeOptionMenu[b].style.display = 'block';
        document.querySelector('body').style.overflow = 'hidden';
    });

    // close option menu
    closeOptionMenu[b].addEventListener('click', () => {
        optionMenu[b].style.display = 'none';
        closeOptionMenu[b].style.display = 'none';
        document.querySelector('body').style.overflow = 'auto';
    });

    // show alert delete
    btnHapusProductAdm[b].addEventListener('click', () => {
        optionMenu[b].style.display = 'none';
        closeOptionMenu[b].style.display = 'none';
        document.querySelector('body').style.overflow = 'auto';
        alertHapusProductAdm[b].style.display = 'flex';
    });

    // close alert delete
    noDeleteProductAdm[b].addEventListener('click', () => {
        alertHapusProductAdm[b].style.display = 'none';
    });
}

// delete product 
function deleteProduct(id) {
    const token = document.querySelector('input[name="_token"]').value;
    fetch('/dashboard/product/' + id + '/delete', {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
    .then(response => {
        if (response.ok) {
            document.querySelector(`[data-product-id="${id}"]`).remove();
            const alertHapusProductAdms = document.querySelectorAll('.alertHapusProductAdm');
            alertHapusProductAdms.forEach(alertHapusProductAdm => {
                alertHapusProductAdm.style.display = 'none';
            });
        } else {
            alert('Failed to delete post');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Failed to delete post');
    });
}