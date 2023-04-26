@extends('layouts.admin-main')

@push('liveware-style')
    @livewireStyles
@endpush

@section('container')
    {{-- @livewire('admin-dashboard.product.create') --}}
@endsection

@push('livewire-script')
    @livewireScripts
@endpush