<div class="flex flex-col">
    {{-- province --}}
    <label for="province" class="mb-1 mt-5">Pilih Provinsi</label>
        @error('province_id')
            <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
        @enderror
    <select wire:model="provinceId" name="province_id" id="province" required class="p-2 border-black-primary focus:border-black-primary rounded-md focus:ring-0">
        <option selected>--Pilih Provinsi--</option>
        @foreach ($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>

    {{-- city --}}
    <label for="city" class="mb-1 mt-5">Pilih Kota</label>
    @error('city_id')
        <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
    @enderror
    <select wire:model="cityId" name="city_id" id="city" required class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">
        <option selected disabled>--Pilih Kota--</option>
        @foreach ($cities as $city)            
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
</div>
