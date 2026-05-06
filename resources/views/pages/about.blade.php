@extends('layouts.app')

@section('title', 'About Us | AluconMedix')

@section('content')
    <!-- Page Header -->
    <header class="bg-brand-blue py-24 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-5xl font-bold mb-6">About AluconMedix</h1>
            <p class="text-xl opacity-90 max-w-3xl leading-relaxed">Excellence in Medical Equipment Production and Supply. Building trust through precision engineering since 2010.</p>
        </div>
    </header>

    <!-- Mission & Vision -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-blue-50/50 p-12 rounded-[2rem] border border-blue-100">
                    <div class="w-12 h-12 bg-brand-blue-mid text-white rounded-lg flex items-center justify-center mb-8">
                        <i data-lucide="target" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-brand-blue mb-6">Our Mission</h2>
                    <p class="text-brand-slate text-lg leading-relaxed">To empower healthcare professionals with the most advanced, reliable, and precise medical technology, ensuring superior patient care and clinical outcomes through continuous innovation and engineering excellence.</p>
                </div>
                <div class="bg-cyan-50/30 p-12 rounded-[2rem] border border-cyan-100">
                    <div class="w-12 h-12 bg-brand-neon text-brand-blue rounded-lg flex items-center justify-center mb-8">
                        <i data-lucide="eye" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-brand-blue mb-6">Our Vision</h2>
                    <p class="text-brand-slate text-lg leading-relaxed">To be the global leader in medical equipment manufacturing, recognized for our commitment to quality, patient safety, and the advancement of healthcare technology for a healthier future.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-brand-blue text-center mb-12">Who We Are</h2>
                <div class="prose prose-lg text-brand-slate max-w-none space-y-8">
                    <p>AluconMedix was founded on the principle that precision engineering can save lives. For years, we have been at the forefront of the medical device industry, blending medical expertise with state-of-the-art manufacturing processes.</p>
                    <p>Our headquarters in Colombo houses a world-class R&D center and a sterile manufacturing facility that adheres to the strictest international standards. We don't just build machines; we build trust between doctors and their patients.</p>
                    <p>We believe in a "Patient-First" philosophy, where every design decision is guided by how it will improve the treatment experience. From diagnostic monitors to surgical lasers, our products are the backbone of modern hospitals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-brand-blue text-center mb-16">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-lg transition-all">
                    <i data-lucide="heart" class="w-10 h-10 text-red-500 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4 text-brand-blue">Integrity</h3>
                    <p class="text-brand-slate text-sm">Transparency in everything we do, from sourcing materials to client relations.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-lg transition-all">
                    <i data-lucide="zap" class="w-10 h-10 text-yellow-500 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4 text-brand-blue">Innovation</h3>
                    <p class="text-brand-slate text-sm">Constant pursuit of better solutions through research and development.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-lg transition-all">
                    <i data-lucide="check-circle" class="w-10 h-10 text-brand-green mb-6"></i>
                    <h3 class="text-xl font-bold mb-4 text-brand-blue">Quality</h3>
                    <p class="text-brand-slate text-sm">Uncompromising standards in production and final quality control.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-lg transition-all">
                    <i data-lucide="users" class="w-10 h-10 text-brand-blue-mid mb-6"></i>
                    <h3 class="text-xl font-bold mb-4 text-brand-blue">Collaboration</h3>
                    <p class="text-brand-slate text-sm">Working closely with medical professionals to meet real-world needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple CTA -->
    <section class="py-24 bg-brand-blue text-white text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Ready to see our innovations?</h2>
            <a href="{{ route('products') }}" class="inline-block bg-white text-brand-blue px-10 py-4 rounded-lg font-bold hover:bg-brand-neon hover:-translate-y-1 transition-all">
                Explore Our Catalog
            </a>
        </div>
    </section>
@endsection
