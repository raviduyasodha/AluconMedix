@extends('layouts.app')

@section('title', 'AluconMedix | Leading Medical Solutions')

@section('content')
    <!-- Hero Section -->
    <header class="relative min-h-[50vh] sm:min-h-[55vh] md:min-h-[60vh] lg:min-h-[65vh] xl:h-[85vh] flex items-center bg-brand-blue text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl max-w-4xl lg:max-w-5xl font-extrabold leading-[1.1] mb-6 sm:mb-8 animate-fade-in-up">
                    Leading the Future of <span class="text-brand-neon">Medical Technology</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl max-w-2xl lg:max-w-3xl opacity-90 mb-8 sm:mb-10 leading-relaxed">
                    AluconMedix designs and manufactures premium-grade medical equipment for hospitals and clinics worldwide. Precision. Quality. Innovation.
                </p>
                <div class="flex flex-wrap gap-3 sm:gap-4">
                    <a href="{{ route('products') }}" class="px-6 py-3 sm:px-8 sm:py-4 bg-brand-blue-mid text-white rounded-lg font-bold text-base sm:text-lg hover:bg-blue-700 hover:-translate-y-1 transition-all shadow-xl">
                        Explore Products
                    </a>
                    <a href="{{ route('contact') }}" class="px-6 py-3 sm:px-8 sm:py-4 border-2 border-brand-neon text-white rounded-lg font-bold text-base sm:text-lg hover:bg-brand-neon hover:text-brand-blue hover:-translate-y-1 transition-all">
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
    <section class="py-16 sm:py-20 lg:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 sm:mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-brand-blue mb-4">Innovative Solutions</h2>
                    <p class="text-brand-slate text-base sm:text-lg">Discover our range of advanced medical devices designed for precision and ease of use.</p>
                </div>
                <a href="{{ route('products') }}" class="text-brand-blue-mid font-bold flex items-center gap-2 group">
                    View All Products <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-12">
                <div class="group">
                    <div class="relative aspect-video rounded-2xl sm:rounded-3xl overflow-hidden mb-6 sm:mb-8 shadow-lg">
                        <img src="{{ asset('images/A.jpg') }}" alt="VITA-X100 Monitor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4 sm:p-8">
                            <span class="bg-brand-neon text-brand-blue px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">New Release</span>
                        </div>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold mb-4 group-hover:text-brand-blue-mid transition-colors">Alucon Veterinary Surgical Table</h3>
                    <p class="text-brand-slate mb-6 sm:mb-8 leading-relaxed text-sm sm:text-base">Versatile V-Top design operating table placed on a smooth electric lift designed to meet modern surgical requirements</p>
                    <a href="{{ route('products.detail', 'vita-x100') }}" class="inline-flex items-center justify-center px-5 py-2.5 sm:px-6 sm:py-3 bg-brand-blue text-white rounded-lg font-bold hover:bg-brand-blue-mid transition-all text-sm sm:text-base">
                        View Technical Specs
                    </a>
                </div>
                <div class="group">
                    <div class="relative aspect-video rounded-2xl sm:rounded-3xl overflow-hidden mb-6 sm:mb-8 shadow-lg">
                        <img src="{{ asset('images/B.jpg') }}" alt="LASER-S3 Scalpel" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                       <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4 sm:p-8">
                            <!-- <span class="bg-brand-green text-brand-blue px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider">New Release</span>-->
                        </div> 
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold mb-4 group-hover:text-brand-blue-mid transition-colors">Alucon Neonatal Infant Radiant Warmer</h3>
                    <p class="text-brand-slate mb-6 sm:mb-8 leading-relaxed text-sm sm:text-base">Nurturing cocoon of precision-controlled heat, ensuring a safe, stable environment for life's first precious moments</p>
                    <a href="{{ route('products.detail', 'laser-s3') }}" class="inline-flex items-center justify-center px-5 py-2.5 sm:px-6 sm:py-3 bg-brand-blue text-white rounded-lg font-bold hover:bg-brand-blue-mid transition-all text-sm sm:text-base">
                        View Technical Specs
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Rent From Us -->
    {{-- <section class="py-16 sm:py-20 lg:py-24 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
             <div class="max-w-2xl">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-brand-blue mb-4">Rent From Us</h2>
                </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 sm:gap-16 items-center">
                <div class="relative group">
                    <div class="aspect-square bg-white rounded-2xl sm:rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100">
                        <img src="{{ asset('images/A.jpg') }}" alt="Rental Surgical Table" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute -bottom-4 sm:-bottom-6 -right-4 sm:-right-6 w-24 h-24 sm:w-32 sm:h-32 bg-brand-neon rounded-full flex items-center justify-center border-4 sm:border-8 border-gray-50 shadow-lg z-10">
                        <span class="text-brand-blue font-bold text-center leading-tight uppercase text-xs sm:text-sm">Rent<br>Ready</span>
                    </div>
                </div>

                <div>
                    
                    <p class="text-base sm:text-xl text-brand-slate mb-6 sm:mb-8 leading-relaxed">
                        Need medical equipment for short-term projects or temporary replacements? 
                        Our rental program offers top-tier equipment with flexible terms and full maintenance support.
                    </p>
                    
                    <div class="space-y-3 sm:space-y-4 mb-8 sm:mb-10">
                        <div class="flex items-center gap-3 text-brand-slate">
                            <i data-lucide="check-circle-2" class="w-5 h-5 sm:w-6 sm:h-6 text-brand-blue-mid flex-shrink-0"></i>
                            <span class="text-sm sm:text-base">Zero maintenance worries</span>
                        </div>
                        <div class="flex items-center gap-3 text-brand-slate">
                            <i data-lucide="check-circle-2" class="w-5 h-5 sm:w-6 sm:h-6 text-brand-blue-mid flex-shrink-0"></i>
                            <span class="text-sm sm:text-base">Flexible weekly/monthly contracts</span>
                        </div>
                        <div class="flex items-center gap-3 text-brand-slate">
                            <i data-lucide="check-circle-2" class="w-5 h-5 sm:w-6 sm:h-6 text-brand-blue-mid flex-shrink-0"></i>
                            <span class="text-sm sm:text-base">Immediate delivery and setup</span>
                        </div>
                    </div>

                    <a href="{{ route('products.detail', 'rent-surgical-table') }}" class="inline-block px-8 py-3.5 sm:px-10 sm:py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-xl text-sm sm:text-base">
                        View Rental Details
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA Banner -->
    <section class="py-8 sm:py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="relative bg-gradient-to-r from-brand-blue to-brand-blue-mid rounded-2xl sm:rounded-[2.5rem] p-8 sm:p-12 md:p-20 text-center text-white overflow-hidden">
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6 sm:mb-8 leading-tight">Elevate Your Clinical Standards Today</h2>
                    <p class="text-base sm:text-lg md:text-xl opacity-90 mb-8 sm:mb-12">Our specialists are ready to help you choose the right equipment for your facility. Contact us for a consultation.</p>
                    <a href="{{ route('contact') }}" class="inline-block w-full sm:w-auto px-5 py-3.5 sm:px-6 sm:py-4 md:px-10 md:py-5 bg-white text-brand-blue rounded-xl font-extrabold text-sm sm:text-base md:text-lg hover:bg-brand-neon hover:-translate-y-1 transition-all shadow-2xl">
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
