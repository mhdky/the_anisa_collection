<div class="bg-white w-full flex items-center flex-col md-768:flex-row">
    {{-- back and logo --}}
    <section class="w-full md-768:hidden">
        {{-- container back --}}
        <div class="flex items-center w-full p-4 border-b border-zinc-300">
            <a href="/" class="flex items-center cursor-default">
                <i class="fas fa-arrow-left mr-3 text-yellow-primary"></i>
                <p class="text-yellow-primary font-bold">Home</p>
            </a>
        </div>

        {{-- logo --}}
        <div class="w-full flex justify-center items-center my-12">
            <a href="/" class="text-yellow-primary font-playfair font-bold text-2xl text-center cursor-default">ANISA COLLECTION</a>
        </div>
    </section>

    <div class="bg-yellow-primary w-1/2 h-screen hidden justify-center items-center md-768:flex">
        <a href="/" class="absolute top-5 left-5 flex items-center">
            <i class="fas fa-arrow-left mr-3 text-white"></i>
            <p class="text-white">Home</p>
        </a>

        <section>
            <h1 class="text-3xl font-playfair font-bold mb-3 lg-1130:text-5xl lg-1130:mb-5">ANISA COLLECTION</h1>
            <h2 class="text-white text-2xl font-playfair font-bold lg-1130:text-4xl">Live For Fashion</h2>
        </section>
    </div>

    <div class="w-full px-4 bg-white md-768:w-[45%] md-768:mx-auto lg-1130:w-96">
        {{ $slot }}
    </div>
</div>