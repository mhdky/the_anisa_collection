// Mendapatkan elemen-elemen yang dibutuhkan
const inputQuantity = document.querySelector(".InputQuantity");
const btnMinus = document.querySelector(".btnMinus");
const btnPlus = document.querySelector(".btnPlus");
const thisStock = document.querySelector(".thisStock");

// Mengatur nilai awal InputQuantity dan batasan minimum
let currentValue = 1;
const minValue = 1;

// Menambahkan event listener ke tombol plus
btnPlus.addEventListener("click", function() {
  // Mengecek apakah nilai saat ini kurang dari batas stok
  if (currentValue < parseInt(thisStock.value)) {
    currentValue++; // Menambah nilai saat ini
  } else {
    currentValue = parseInt(thisStock.value); // Menetapkan nilai saat ini menjadi batas stok
  }
  inputQuantity.value = currentValue; // Menampilkan nilai saat ini pada input quantity
});

// Menambahkan event listener ke tombol minus
btnMinus.addEventListener("click", function() {
  // Mengecek apakah nilai saat ini lebih besar dari batas minimum
  if (currentValue > minValue) {
    currentValue--; // Mengurangi nilai saat ini
  } else {
    currentValue = minValue; // Menetapkan nilai saat ini menjadi batas minimum
  }
  inputQuantity.value = currentValue; // Menampilkan nilai saat ini pada input quantity
});
