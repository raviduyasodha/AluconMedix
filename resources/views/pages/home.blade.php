@extends('layouts.app')

@section('title', 'AluconMedix | Leading Medical Solutions')

@section('content')
    <!-- Hero Section -->
    <header class="relative h-[85vh] flex items-center bg-brand-blue text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-6xl">
                <h1 class="text-6xl max-w-5xl md:text-7xl font-extrabold leading-[1.1] mb-8 animate-fade-in-up">
                    Leading the Future of <span class="text-brand-neon">Medical Technology</span>
                </h1>
                <p class="text-xl max-w-3xl md:text-2xl opacity-90 mb-10 leading-relaxed">
                    AluconMedix designs and manufactures premium-grade medical equipment for hospitals and clinics worldwide. Precision. Quality. Innovation.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('products') }}" class="px-8 py-4 bg-brand-blue-mid text-white rounded-lg font-bold text-lg hover:bg-blue-700 hover:-translate-y-1 transition-all shadow-xl">
                        Explore Products
                    </a>
                    <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-brand-neon text-white rounded-lg font-bold text-lg hover:bg-brand-neon hover:text-brand-blue hover:-translate-y-1 transition-all">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute inset-y-0 right-0 w-3/5 hidden lg:block">
            <img src="{{ asset('images/hero.png') }}" alt="Medical Technology" class="w-full h-full object-cover hero-bg-mask">
        </div>
    </header>

    <!-- Why Choose Us -->
    <!-- <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-bold text-brand-blue mb-6">Why Choose AluconMedix</h2>
                <p class="text-brand-slate text-lg">We combine clinical expertise with advanced engineering to deliver equipment that healthcare professionals trust every single day.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group">
                    <div class="w-14 h-14 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue-mid group-hover:text-white transition-colors">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Quality Assurance</h3>
                    <p class="text-brand-slate text-sm leading-relaxed">Every piece of equipment undergoes rigorous testing to exceed international medical standards.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group">
                    <div class="w-14 h-14 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue-mid group-hover:text-white transition-colors">
                        <i data-lucide="award" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Certified Products</h3>
                    <p class="text-brand-slate text-sm leading-relaxed">All our products are ISO and CE certified, ensuring safety and reliability in clinical settings.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group">
                    <div class="w-14 h-14 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue-mid group-hover:text-white transition-colors">
                        <i data-lucide="headset" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Expert Support</h3>
                    <p class="text-brand-slate text-sm leading-relaxed">Our team of technical experts is available 24/7 to provide training and maintenance support.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group">
                    <div class="w-14 h-14 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue-mid group-hover:text-white transition-colors">
                        <i data-lucide="building" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Trusted by Hospitals</h3>
                    <p class="text-brand-slate text-sm leading-relaxed">Partnering with over 500 leading medical institutions to provide top-tier healthcare solutions.</p>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Product Highlights -->
    <section class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-4xl font-bold text-brand-blue mb-4">Innovative Solutions</h2>
                    <p class="text-brand-slate text-lg">Discover our range of advanced medical devices designed for precision and ease of use.</p>
                </div>
                <a href="{{ route('products') }}" class="text-brand-blue-mid font-bold flex items-center gap-2 group">
                    View All Products <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="group">
                    <div class="relative aspect-video rounded-3xl overflow-hidden mb-8 shadow-lg">
                        <img src="{{ asset('images/A.jpg') }}" alt="VITA-X100 Monitor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                            <span class="bg-brand-neon text-brand-blue px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider">New Release</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 group-hover:text-brand-blue-mid transition-colors">Alucon Veterinary Surgical Table</h3>
                    <p class="text-brand-slate mb-8 leading-relaxed">Designed for the Demands of Modern Surgery. With Versatile V-Top Design & Smooth Electric Lift.</p>
                    <a href="{{ route('products.detail', 'vita-x100') }}" class="inline-flex items-center justify-center px-6 py-3 bg-brand-blue text-white rounded-lg font-bold hover:bg-brand-blue-mid transition-all">
                        View Technical Specs
                    </a>
                </div>
                <div class="group">
                    <div class="relative aspect-video rounded-3xl overflow-hidden mb-8 shadow-lg">
                        <img src="{{ asset('images/B.jpg') }}" alt="LASER-S3 Scalpel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                       <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                            <!-- <span class="bg-brand-green text-brand-blue px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider">New Release</span>-->
                        </div> 
                    </div>
                    <h3 class="text-2xl font-bold mb-4 group-hover:text-brand-blue-mid transition-colors">Alucon Infant Warmer</h3>
                    <p class="text-brand-slate mb-8 leading-relaxed">Advanced surgical laser system designed for ultra-precise procedures with minimal tissue damage and rapid recovery.</p>
                    <a href="{{ route('products.detail', 'laser-s3') }}" class="inline-flex items-center justify-center px-6 py-3 bg-brand-blue text-white rounded-lg font-bold hover:bg-brand-blue-mid transition-all">
                        View Technical Specs
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Rent From Us -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
             <div class="max-w-2xl">
                    <h2 class="text-4xl font-bold text-brand-blue mb-4">Rent From Us</h2>
                </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative group">
                    <div class="aspect-square bg-white rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100">
                        <img src="{{ asset('images/A.jpg') }}" alt="Rental Surgical Table" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-brand-neon rounded-full flex items-center justify-center border-8 border-gray-50 shadow-lg z-10">
                        <span class="text-brand-blue font-bold text-center leading-tight uppercase text-sm">Rent<br>Ready</span>
                    </div>
                </div>

                <div>
                    
                    <p class="text-xl text-brand-slate mb-8 leading-relaxed">
                        Need medical equipment for short-term projects or temporary replacements? 
                        Our rental program offers top-tier equipment with flexible terms and full maintenance support.
                    </p>
                    
                    <div class="space-y-4 mb-10">
                        <div class="flex items-center gap-3 text-brand-slate">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-blue-mid"></i>
                            <span>Zero maintenance worries</span>
                        </div>
                        <div class="flex items-center gap-3 text-brand-slate">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-blue-mid"></i>
                            <span>Flexible weekly/monthly contracts</span>
                        </div>
                        <div class="flex items-center gap-3 text-brand-slate">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-blue-mid"></i>
                            <span>Immediate delivery and setup</span>
                        </div>
                    </div>

                    <a href="{{ route('products.detail', 'rent-surgical-table') }}" class="inline-block px-10 py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-xl">
                        View Rental Details
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-gradient-to-r from-brand-blue to-brand-blue-mid rounded-[2.5rem] p-12 md:p-20 text-center text-white overflow-hidden">
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">Elevate Your Clinical Standards Today</h2>
                    <p class="text-xl opacity-90 mb-12">Our specialists are ready to help you choose the right equipment for your facility. Contact us for a consultation.</p>
                    <a href="{{ route('contact') }}" class="inline-block w-full sm:w-auto px-6 py-4 md:px-10 md:py-5 bg-white text-brand-blue rounded-xl font-extrabold text-base md:text-lg hover:bg-brand-neon hover:-translate-y-1 transition-all shadow-2xl">
                        Schedule a Technical Consultation
                    </a>
                </div>
                <!-- Abstract Background Shapes -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-neon/10 rounded-full blur-3xl -ml-40 -mb-40"></div>
            </div>
        </div>
    </section>
@endsection
