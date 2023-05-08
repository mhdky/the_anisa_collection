<div class="flex flex-col">
    {{-- province --}}
    <label for="province" class="mb-1 mt-5">Pilih Provinsi</label>
    <select wire:model="provinceId" name="province" id="province" required class="py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0">
        <option selected>--Pilih Provinsi--</option>
        @foreach ($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>

    {{-- city --}}
    <label for="city" class="mb-1 mt-5">Pilih Kota</label>
    <select wire:model="cityId" name="city" id="city" required class="py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0">
        <option selected disabled>--Pilih Kota--</option>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
</div>
