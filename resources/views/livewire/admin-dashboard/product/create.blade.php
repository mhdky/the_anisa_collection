<div class="w-[500px] mx-auto my-10">
    <form autocomplete="off" wire:submit.prevent="store" class="flex flex-col">
        <select wire:model="category_id" id="" class="w-full">
            <option readonly>Pilih</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
        
        <input type="text" wire:model="name" id="" placeholder="name" class="w-full mt-5">
        @error('name')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
        
        <textarea type="text" wire:model="detail" id="" placeholder="detail" class="w-full h-10 mt-5"></textarea>
        @error('detail')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="number" wire:model="price" id="" placeholder="price" class="w-full mt-5">
        @error('price')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="file" wire:model="image" id="" placeholder="image" class="w-full mt-5">
        @error('image')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="number" wire:model="stock" id="" placeholder="stock" class="w-full mt-5">
        @error('stock')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="text" wire:model="size" id="" placeholder="size" class="w-full mt-5">
        @error('size')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="text" wire:model="merek" id="" placeholder="merek" class="w-full mt-5">
        @error('merek')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="text" wire:model="bahan" id="" placeholder="bahan" class="w-full mt-5">
        @error('bahan')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <input type="text" wire:model="jenis_lengan" id="" placeholder="jenis_lengan" class="w-full mt-5">
        @error('jenis_lengan')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <button type="submit" class="bg-blue-500 w-full mt-5 py-2 rounded-md text-white">Simpan</button>
    </form>

</div>
