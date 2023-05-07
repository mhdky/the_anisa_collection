@if (session()->has('ok'))
    <div class="alertOk fixed top-0 right-0 bottom-0 left-0 flex justify-center items-center">
        <div class="bg-[#000000d3] w-[97%] py-16 flex flex-col items-center rounded-md sm-440:w-[420px]">
            <div class="bg-green-500 w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-check text-white text-xl"></i>
            </div>

            <p class="text-white text-lg mt-5">{{ session('ok') }}</p>
        </div>
    </div>
@endif