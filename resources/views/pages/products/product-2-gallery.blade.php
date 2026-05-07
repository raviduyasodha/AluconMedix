@extends('layouts.app')

@section('title', 'Alucon Infant Warmer Gallery | AluconMedix')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Breadcrumbs -->
            <nav class="flex mb-8 text-sm font-medium">
                <a href="{{ route('products.detail', 'laser-s3') }}" class="text-brand-blue-mid hover:text-brand-blue flex items-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Product Details
                </a>
            </nav>

            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-cyan-100 text-brand-blue rounded-full text-xs font-bold uppercase tracking-widest mb-6">Innovation In Action</span>
                <h1 class="text-4xl md:text-5xl font-bold text-brand-blue mb-6">Alucon Infant Warmer Gallery</h1>
                <p class="text-xl text-brand-slate max-w-3xl mx-auto leading-relaxed">Discover the precision and safety of our infant warming solutions through our video demonstrations and customer installations.</p>
            </div>

            <!-- Demo Video Section -->
            <div class="mb-24">
                <h2 class="text-3xl font-bold text-brand-blue mb-10 flex items-center gap-3">
                    <i data-lucide="video" class="w-8 h-8 text-brand-blue-mid"></i>
                    Working Demo Video
                </h2>
                <div class="aspect-video bg-white rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 relative group">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors cursor-pointer">
                        <div class="w-24 h-24 bg-white text-brand-blue-mid rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform">
                            <i data-lucide="play" class="w-10 h-10 ml-1"></i>
                        </div>
                    </div>
                    <img src="{{ asset('images/B.jpg') }}" alt="Video Thumbnail" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Handover Section -->
            <div class="mb-24">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h2 class="text-3xl font-bold text-brand-blue mb-4">Customer Handover</h2>
                        <p class="text-brand-slate">Delivering life-saving technology to leading neonatal units.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="aspect-square bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
                        <img src="{{ asset('images/E.jpg') }}" alt="Handover 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="aspect-square bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
                        <img src="{{ asset('images/BD.jpg') }}" alt="Handover 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="aspect-square bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
                        <img src="{{ asset('images/BC.jpg') }}" alt="Handover 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- Customer Feedback / In-Use Section -->
            <div class="mb-24">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h2 class="text-3xl font-bold text-brand-blue mb-4">In Clinical Use</h2>
                        <p class="text-brand-slate">Advanced warming technology protecting our smallest patients.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="relative group rounded-[2.5rem] overflow-hidden shadow-xl">
                        <img src="{{ asset('images/A.jpg') }}" alt="Clinical Use 1" class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                            <p class="italic text-lg mb-2">"The temperature control precision is remarkable, providing the consistent environment our patients need."</p>
                            <p class="font-bold text-brand-neon">General Hospital, Neonatal Unit</p>
                        </div>
                    </div>
                    <div class="relative group rounded-[2.5rem] overflow-hidden shadow-xl">
                        <img src="{{ asset('images/F.jpg') }}" alt="Clinical Use 2" class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                            <p class="italic text-lg mb-2">"An intuitive system that our nursing staff could master quickly, enhancing safety."</p>
                            <p class="font-bold text-brand-neon">Dr. Aruna Wickramasinghe, Pediatrician</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center py-16 bg-brand-blue rounded-[3rem] text-white">
                <h2 class="text-3xl font-bold mb-6">Advanced Neonatal Care Starts Here</h2>
                <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">Discuss your facility's requirements with our technical specialists today.</p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-brand-blue rounded-xl font-bold hover:bg-brand-neon transition-all shadow-xl">
                    Request a Quote
                </a>
            </div>
        </div>
    </div>
@endsection
