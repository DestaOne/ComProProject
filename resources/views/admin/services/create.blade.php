@extends('admin.layouts.app')

@section('title', 'Tambah Layanan')

@section('content')
<div class="max-w-4xl">
    @include('admin.services._form', [
        'action' => route('admin.services.store'),
        'submit' => 'Simpan Layanan',
    ])
</div>
@endsection
