@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
@php $card = 'bg-white p-6 shadow-sm ring-1 ring-gray-950/5'; @endphp

<div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
    <div class="{{ $card }}">
        <p class="text-sm font-medium text-gray-500">Total Layanan</p>
        <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-950">{{ $serviceCount }}</p>
        <p class="mt-1 text-xs text-gray-400">Layanan terdaftar</p>
    </div>
    <div class="{{ $card }}">
        <p class="text-sm font-medium text-gray-500">Total Gambar Galeri</p>
        <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-950">&mdash;</p>
        <p class="mt-1 text-xs text-gray-400">Segera tersedia</p>
    </div>
    <div class="{{ $card }}">
        <p class="text-sm font-medium text-gray-500">Jumlah Admin</p>
        <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-950">{{ $adminCount }}</p>
        <p class="mt-1 text-xs text-gray-400">Akun terdaftar</p>
    </div>
</div>
@endsection
