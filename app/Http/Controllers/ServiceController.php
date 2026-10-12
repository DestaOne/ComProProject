<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('layanan.index', [
            'services' => Service::orderBy('id')->get(),
        ]);
    }

    public function show(Service $service): View
    {
        return view('layanan.show', compact('service'));
    }
}
