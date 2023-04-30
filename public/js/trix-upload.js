document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
});

function previewImg() {
    const image = document.querySelector('.imageAdm');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}