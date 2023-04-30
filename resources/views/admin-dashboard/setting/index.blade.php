@extends('layouts.admin-main')

@section('container')
    <div class="w-full flex-[2] mt-[65px] pb-20 p-3 md-900:mt-[64px]">
        {{-- profile information --}}
        <div class="w-full border border-zinc-200 rounded-md overflow-hidden">
            <h1 class="bg-zinc-50 w-full h-12 flex items-center px-4 border-b border-zinc-200 text-zinc-600 text-[18px]">
                Informasi Profil
            </h1>

            @livewire('dashboard.setting.user-information')
        </div>
    </div>
@endsection

@push('nav-admin')
    <script src="{{ asset('js/nav-admin.js') }}"></script>
@endpush