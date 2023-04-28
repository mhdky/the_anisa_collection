<div class="alertHapusProductAdm bg-[#5555556d] fixed top-0 right-0 bottom-0 left-0 z-30 flex justify-center items-center hidden">
    <div class="bg-white w-56 h-40 rounded-md flex flex-col justify-center items-center">
        <h2 class="text-zinc-600 text-[14px] text-center mb-4">Hapus Produk?</h2>

        <div class="flex justify-center items-center">
            <p class="noDeleteProductAdm bg-yellow-primary px-3 py-1 text-white text-[14px] rounded-md md-800:cursor-pointer">Tidak</p>
            <form action="" method="post">
                @csrf
                <button type="submit" class="text-zinc-600 text-[14px] ml-2 hover:text-black-primary">Hapus</button>
            </form>
        </div>
    </div>
</div>