@extends('layouts.main')

@push('liveware-style')
    @livewireStyles
@endpush    

@section('container')
    @include('partials.navbar')

    <div class="mt-[70px] w-full p-4 sm-500:w-[500px] sm-500:mx-auto">
        {{-- account information --}}
        @livewire('account.account-information')

        {{-- change password --}}
        @livewire('account.change-pessword')
    </div>
    
    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

@push('livewire-script')
    @livewireScripts
@endpush   