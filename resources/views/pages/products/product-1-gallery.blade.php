@extends('layouts.app')

@section('title', 'Veterinary Surgical Table Gallery | AluconMedix')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Breadcrumbs -->
            <nav class="flex mb-8 text-sm font-medium">
                <a href="{{ route('products.detail', 'vita-x100') }}" class="text-brand-blue-mid hover:text-brand-blue flex items-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Product Details
                </a>
            </nav>

            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 bg-blue-100 text-brand-blue-mid rounded-full text-xs font-bold uppercase tracking-widest mb-6">Product Experience</span>
                <h1 class="text-4xl md:text-5xl font-bold text-brand-blue mb-6">Veterinary Surgical Table Gallery</h1>
                <p class="text-xl text-brand-slate max-w-3xl mx-auto leading-relaxed">See the table in action and view our successful customer handovers across the country.</p>
            </div>

            <!-- Demo Video Section -->
            <div class="mb-24">
                <h2 class="text-3xl font-bold text-brand-blue mb-10 flex items-center gap-3">
                    <i data-lucide="play-circle" class="w-8 h-8 text-brand-blue-mid"></i>
                    Working Demo Video
                </h2>
                <div class="aspect-video bg-white rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 relative group">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/10 transition-colors cursor-pointer">
                        <div class="w-24 h-24 bg-white text-brand-blue-mid rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform">
                            <i data-lucide="play" class="w-10 h-10 ml-1"></i>
                        </div>
                    </div>
                    <img src="{{ asset('images/hero.png') }}" alt="Video Thumbnail" class="w-full h-full object-cover">
                    <!-- In a real app, replace the img with a video or iframe -->
                </div>
            </div>

            <!-- Handover Section -->
            <div class="mb-24">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h2 class="text-3xl font-bold text-brand-blue mb-4">Customer Handover</h2>
                        <p class="text-brand-slate">Capturing the moments of trust and partnership with medical institutions.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="aspect-square bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
                        <img src="{{ asset('images/BA.jpg') }}" alt="Handover 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="aspect-square bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
                        <img src="{{ asset('images/BC.jpg') }}" alt="Handover 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="aspect-square bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
                        <img src="{{ asset('images/BD.jpg') }}" alt="Handover 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- Customer Feedback / In-Use Section -->
            <div class="mb-24">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h2 class="text-3xl font-bold text-brand-blue mb-4">In Clinical Use</h2>
                        <p class="text-brand-slate">Real-world performance in modern surgical environments.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="relative group rounded-[2.5rem] overflow-hidden shadow-xl">
                        <img src="{{ asset('images/F.jpg') }}" alt="Clinical Use 1" class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                            <p class="italic text-lg mb-2">"The stability and ease of adjustment have significantly improved our surgical flow."</p>
                            <p class="font-bold text-brand-neon">Dr. Samantha Perera, Chief Veterinarian</p>
                        </div>
                    </div>
                    <div class="relative group rounded-[2.5rem] overflow-hidden shadow-xl">
                        <img src="{{ asset('images/G.jpg') }}" alt="Clinical Use 2" class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent text-white">
                            <p class="italic text-lg mb-2">"The stainless steel quality and silent motor operation are top-notch."</p>
                            <p class="font-bold text-brand-neon">City Pet Hospital, Surgery Dept.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center py-16 bg-brand-blue rounded-[3rem] text-white">
                <h2 class="text-3xl font-bold mb-6">Experience the Excellence Yourself</h2>
                <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">Contact us for a live demonstration or to discuss your specific surgical requirements.</p>
                <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-brand-blue rounded-xl font-bold hover:bg-brand-neon transition-all shadow-xl">
                    Request a Demo
                </a>
            </div>
        </div>
    </div>
@endsection
