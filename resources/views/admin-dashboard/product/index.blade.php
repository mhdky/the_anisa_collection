@extends('layouts.main')

@push('liveware-style')
    @livewireStyles
@endpush

@section('container')
    {{-- @livewire('admin-dashboard.product.create') --}}

    @include('partials.dashboard.navbar')
@endsection

@push('livewire-script')
    @livewireScripts
@endpush