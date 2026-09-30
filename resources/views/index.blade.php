@extends('layouts.app')

@section('content')
<div class="relative w-full h-[600px] md:h-[700px] bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop')] bg-cover bg-center bg-no-repeat flex items-center justify-center">
    
    <div class="absolute inset-0 bg-slate-900/60"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-[-60px]">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white tracking-tight mb-6">
            Solusi Lengkap Kebutuhan <br class="hidden md:block" />
            Kantor & Ruang Kerja
        </h1>
        
        <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-slate-200 mb-10 leading-relaxed font-medium">
            Menyediakan mesin kantor, komputer, piranti lunak, hingga furnitur premium untuk mendukung efisiensi, kenyamanan, dan produktivitas bisnis Anda.
        </p>
        
        <div class="flex justify-center">
            <a href="#layanan" class="inline-flex h-12 items-center justify-center rounded-full bg-blue-800 px-10 text-base font-medium text-white hover:bg-blue-900 transition duration-200">
                Lihat Layanan
            </a>
        </div>
    </div>
</div>

<div id="layanan" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight">Layanan Kami</h2>
            <p class="mt-4 text-lg text-slate-500">Beragam pilihan produk berkualitas untuk memenuhi segala kebutuhan operasional dan tata ruang perusahaan Anda.</p>
        </div>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
        @foreach($services as $item)
        <a href="{{ $item['url'] }}" class="group block">
            <div class="relative aspect-[4/3] w-full overflow-hidden bg-slate-100 ring-1 ring-slate-900/5">
                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-out">
            </div>
            <div class="mt-6">
                <h3 class="text-xl font-semibold text-slate-900 group-hover:text-blue-800 transition-colors duration-200">{{ $item['title'] }}</h3>
            </div>
        </a>
        @endforeach
    </div>
   
    <div class="mt-16 text-center">
        <a href="{{ url('/layanan') }}" class="inline-flex h-12 items-center justify-center px-8 text-sm font-bold text-slate-900 ring-1 ring-slate-300 hover:bg-blue-900 hover:text-white transition duration-200 uppercase tracking-wider">
            Lihat Semua Layanan &rarr;
        </a>
    </div>
</div>

<div class="bg-white border-t border-slate-200 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-widest uppercase mb-4 font-mon">Kualitas. Keandalan. Pelayanan.</h2>
            <p class="text-lg text-slate-500 max-w-2xl font-medium">Temukan alasan mengapa berbagai instansi dan perusahaan di Bali mempercayakan kebutuhan operasional dan ruang kerja mereka kepada CV Elka Mandiri.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="group relative flex flex-col justify-end h-[450px] overflow-hidden ring-1 ring-slate-200 bg-white">
                
                <div class="absolute top-6 right-6 w-12 h-12 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-0 h-[3px] bg-blue-800 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute top-0 right-0 w-[3px] h-0 bg-blue-800 group-hover:h-full transition-all duration-300 ease-out"></div>
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop" alt="Solusi Terpadu" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
                
                <div class="relative z-10 p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-800 transition-colors uppercase tracking-wide">Solusi Terpadu</h3>
                    <p class="text-slate-600 font-medium leading-relaxed">Satu pintu untuk semua kebutuhan. Dari instalasi piranti lunak, penyediaan komputer, hingga furnitur dalam satu ekosistem yang selaras.</p>
                </div>
            </div>

            <div class="group relative flex flex-col justify-end h-[450px] overflow-hidden ring-1 ring-slate-200 bg-white">
                
                <div class="absolute top-6 right-6 w-12 h-12 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-0 h-[3px] bg-blue-800 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute top-0 right-0 w-[3px] h-0 bg-blue-800 group-hover:h-full transition-all duration-300 ease-out"></div>
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <img src="https://images.unsplash.com/photo-1637073849563-5b0ac780ec34?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D    " alt="Kualitas Profesional" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
                
                <div class="relative z-10 p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-800 transition-colors uppercase tracking-wide">Standar Profesional</h3>
                    <p class="text-slate-600 font-medium leading-relaxed">Kami hanya menyediakan produk dengan standar industri terbaik untuk memastikan keawetan, keamanan, dan efisiensi jangka panjang.</p>
                </div>
            </div>

            <div class="group relative flex flex-col justify-end h-[450px] overflow-hidden ring-1 ring-slate-200 bg-white">
                
                <div class="absolute top-6 right-6 w-12 h-12 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-0 h-[3px] bg-blue-800 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute top-0 right-0 w-[3px] h-0 bg-blue-800 group-hover:h-full transition-all duration-300 ease-out"></div>
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <img src="https://images.unsplash.com/photo-1766066014237-00645c74e9c6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dukungan Penuh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
                
                <div class="relative z-10 p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-800 transition-colors uppercase tracking-wide">Dukungan Responsif</h3>
                    <p class="text-slate-600 font-medium leading-relaxed">Layanan pelanggan dan purna jual yang selalu siap membantu Anda menangani segala masalah teknis maupun konsultasi produk.</p>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="bg-blue-900 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-6">Siap Membangun Ruang Kerja Ideal Anda?</h2>
        <p class="text-blue-200 text-lg md:text-xl max-w-2xl mx-auto mb-10">Tim ahli kami siap memberikan konsultasi dan penawaran terbaik sesuai dengan anggaran dan spesifikasi perusahaan Anda.</p>
        <a href="#" class="inline-flex h-12 items-center justify-center bg-white px-10 text-base font-bold text-blue-900 hover:bg-blue-50 transition duration-200 ring-1 ring-white">
            Konsultasi Sekarang
        </a>
    </div>
</div>
@endsection