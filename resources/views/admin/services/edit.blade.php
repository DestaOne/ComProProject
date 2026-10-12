@extends('admin.layouts.app')

@section('title', 'Edit Layanan')

@section('content')
<div class="max-w-4xl">
    @include('admin.services._form', [
        'action' => route('admin.services.update', $service),
        'submit' => 'Simpan Perubahan',
    ])
</div>
@endsection
