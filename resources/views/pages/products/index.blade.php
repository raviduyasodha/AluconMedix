@extends('layouts.app')

@section('title', 'Our Products | AluconMedix')

@section('content')
    <!-- Page Header -->
    <header class="bg-brand-blue py-24 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-5xl font-bold mb-6">Our Products</h1>
            <p class="text-xl opacity-90 max-w-3xl leading-relaxed">Precision-Engineered Solutions for Modern Healthcare. Explore our range of clinical equipment.</p>
        </div>
    </header>

    <!-- Product Grid -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Product 1 -->
                <div class="group bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/A.jpg') }}" alt="VITA-X100 Monitor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-blue/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                            <p class="text-white text-sm font-medium">Advanced Veterinary Surgical Table</p>
                        </div>
                    </div>
                    <div class="p-10">
                        <h3 class="text-3xl font-bold text-brand-blue mb-4">Alucon Veterinary Surgical Table</h3>
                        <p class="text-brand-slate text-lg mb-8 leading-relaxed">High-precision real-time monitoring for critical care environments with intuitive touch interface and cloud connectivity.</p>
                        <div class="flex flex-wrap gap-3 mb-10">
                            {{-- <span class="bg-blue-50 text-brand-blue-mid px-4 py-1.5 rounded-full text-sm font-semibold">Touchscreen</span>
                            <span class="bg-blue-50 text-brand-blue-mid px-4 py-1.5 rounded-full text-sm font-semibold">12-Lead ECG</span>
                            <span class="bg-blue-50 text-brand-blue-mid px-4 py-1.5 rounded-full text-sm font-semibold">Cloud Sync</span> --}}
                        </div>
                        <a href="{{ route('products.detail', 'vita-x100') }}" class="inline-flex items-center justify-center w-full py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-md group">
                            View Technical Details <i data-lucide="chevron-right" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/B.jpg') }}" alt="LASER-S3 Scalpel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-blue/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                            <p class="text-white text-sm font-medium">Alucon Neonatal Infant Radiant Warmer</p>
                        </div>
                    </div>
                    <div class="p-10">
                        <h3 class="text-3xl font-bold text-brand-blue mb-4">Alucon Neonatal Infant Radiant Warmer</h3>
                        <p class="text-brand-slate text-lg mb-8 leading-relaxed">Advanced surgical laser system designed for ultra-precise procedures with minimal tissue damage and rapid recovery.</p>
                        <div class="flex flex-wrap gap-3 mb-10">
                            {{-- <span class="bg-blue-50 text-brand-blue-mid px-4 py-1.5 rounded-full text-sm font-semibold">AI-Assisted</span>
                            <span class="bg-blue-50 text-brand-blue-mid px-4 py-1.5 rounded-full text-sm font-semibold">Ultra-Short Pulse</span>
                            <span class="bg-blue-50 text-brand-blue-mid px-4 py-1.5 rounded-full text-sm font-semibold">Haptic Feedback</span> --}}
                        </div>
                        <a href="{{ route('products.detail', 'laser-s3') }}" class="inline-flex items-center justify-center w-full py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-md group">
                            View Technical Details <i data-lucide="chevron-right" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Solutions -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white p-12 md:p-20 rounded-[3rem] shadow-sm border border-gray-100 flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1">
                    <h2 class="text-4xl font-bold text-brand-blue mb-6">Need a Custom Solution?</h2>
                    <p class="text-brand-slate text-lg leading-relaxed mb-8">Our engineering team specializes in adapting our core technologies for specialized clinical needs. From custom sensor arrays to integrated hospital ecosystems, we can build it.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-brand-blue-mid text-white rounded-xl font-bold hover:bg-brand-blue transition-all">
                        Inquire About Customization
                    </a>
                </div>
                <div class="flex-1 grid grid-cols-2 gap-4">
                    <div class="aspect-square bg-blue-50 rounded-2xl flex items-center justify-center text-brand-blue-mid">
                        <i data-lucide="settings" class="w-12 h-12"></i>
                    </div>
                    <div class="aspect-square bg-cyan-50 rounded-2xl flex items-center justify-center text-brand-blue-mid">
                        <i data-lucide="cpu" class="w-12 h-12"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
