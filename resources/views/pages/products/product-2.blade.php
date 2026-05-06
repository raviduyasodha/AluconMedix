@extends('layouts.app')

@section('title', 'Alucon Infant Warmer | AluconMedix')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Breadcrumbs -->
            <nav class="flex mb-8 text-sm font-medium">
                <a href="{{ route('products') }}" class="text-brand-blue-mid hover:text-brand-blue flex items-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Products
                </a>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Image Gallery (Interactive Slider) -->
                <div class="relative group">
                    <div class="aspect-square bg-white rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 relative cursor-zoom-in group/zoom" id="product-gallery">
                        <img id="main-product-image" src="{{ asset('images/B.jpg') }}" alt="Alucon Infant Warmer" class="w-full h-full object-cover transition-transform duration-200 ease-out origin-center">
                        
                        <!-- Navigation Arrows -->
                        <div class="absolute inset-0 flex items-center justify-between px-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                            <button onclick="prevImage()" onmouseenter="isHoveringNav = true" onmouseleave="isHoveringNav = false" class="pointer-events-auto w-12 h-12 bg-white/90 hover:bg-white text-brand-blue rounded-full shadow-lg flex items-center justify-center transition-all transform hover:scale-110">
                                <i data-lucide="chevron-left" class="w-6 h-6"></i>
                            </button>
                            <button onclick="nextImage()" onmouseenter="isHoveringNav = true" onmouseleave="isHoveringNav = false" class="pointer-events-auto w-12 h-12 bg-white/90 hover:bg-white text-brand-blue rounded-full shadow-lg flex items-center justify-center transition-all transform hover:scale-110">
                                <i data-lucide="chevron-right" class="w-6 h-6"></i>
                            </button>
                        </div>

                        <!-- Image Indicators -->
                        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2">
                            <div class="indicator w-2 h-2 rounded-full bg-brand-blue transition-all duration-300" data-index="0"></div>
                            <div class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></div>
                            <div class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></div>
                            <div class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="3"></div>
                        </div>
                    </div>
                    
                    {{-- <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-blue-mid rounded-full flex items-center justify-center border-8 border-gray-50 shadow-lg z-10">
                        <span class="text-white font-bold text-center leading-tight">New<br>Featured</span>
                    </div> --}}
                </div>

                <script>
                    const images = [
                        "{{ asset('images/B.jpg') }}",
                        "{{ asset('images/BA.jpg') }}",
                        "{{ asset('images/BC.jpg') }}",
                        "{{ asset('images/BD.jpg') }}"
                    ];
                    let currentIndex = 0;
                    const mainImage = document.getElementById('main-product-image');
                    const indicators = document.querySelectorAll('.indicator');

                    function updateImage(index) {
                        currentIndex = index;
                        mainImage.style.opacity = '0';
                        setTimeout(() => {
                            mainImage.src = images[currentIndex];
                            mainImage.style.opacity = '1';
                        }, 250);

                        indicators.forEach((ind, i) => {
                            if (i === currentIndex) {
                                ind.classList.remove('bg-gray-300', 'w-2');
                                ind.classList.add('bg-brand-blue', 'w-6');
                            } else {
                                ind.classList.remove('bg-brand-blue', 'w-6');
                                ind.classList.add('bg-gray-300', 'w-2');
                            }
                        });
                    }

                    function nextImage() {
                        let next = (currentIndex + 1) % images.length;
                        updateImage(next);
                    }

                    function prevImage() {
                        let prev = (currentIndex - 1 + images.length) % images.length;
                        updateImage(prev);
                    }

                    // Zoom Effect Logic
                    const gallery = document.getElementById('product-gallery');
                    let isHoveringNav = false;
                    
                    gallery.addEventListener('mousemove', (e) => {
                        if (isHoveringNav) {
                            mainImage.style.transform = 'scale(1)';
                            return;
                        }
                        const rect = gallery.getBoundingClientRect();
                        const x = ((e.clientX - rect.left) / rect.width) * 100;
                        const y = ((e.clientY - rect.top) / rect.height) * 100;
                        
                        mainImage.style.transformOrigin = `${x}% ${y}%`;
                        mainImage.style.transform = 'scale(2.5)';
                    });

                    gallery.addEventListener('mouseleave', () => {
                        mainImage.style.transform = 'scale(1)';
                        mainImage.style.transformOrigin = 'center center';
                    });

                    // Initial state for indicators
                    updateImage(0);
                </script>

                <!-- Product Info -->
                <div>
                    {{-- <span class="inline-block px-4 py-1.5 bg-cyan-100 text-brand-blue rounded-full text-xs font-bold uppercase tracking-widest mb-6">Advanced Surgery</span> --}}
                    <h1 class="text-4xl md:text-5xl font-bold text-brand-blue mb-6">Alucon Infant Warmer</h1>
                    <p class="text-xl text-brand-slate mb-8 leading-relaxed">Our radiant warmer provides a nurturing cocoon of precision-controlled heat, ensuring a safe, stable environment for life's first precious moments. Advanced technology, delivered with a soft touch.</p>
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-50 text-brand-green rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-6 h-6"></i>
                            </div>
                            <p class="text-brand-slate text-sm">Ultra-short pulse technology for cold ablation with no thermal damage.</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-50 text-brand-green rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-6 h-6"></i>
                            </div>
                            <p class="text-brand-slate text-sm">Haptic feedback handpiece for surgeons to feel tissue density differences.</p>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-xl">
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features & Specs -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div>
                    <h2 class="text-3xl font-bold text-brand-blue mb-12">Key Features</h2>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>High quality powder-coated steel body</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>6mm thickness Perspex guard railing for safety and visibility</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Programmable heater controller with fixed temperature presets</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Flexible skin temperature probe with dedicated display</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>650W ceramic coated Infrared Heater element</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>LED observation lamps</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Silent and lockable castor wheels</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Easy access mounting points for oxygen supply with oxygen regulator (oxygen cylinder not included)</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-brand-blue mb-12">Technical Specifications</h2>
                    <div class="overflow-hidden rounded-2xl border border-gray-100 shadow-sm">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-gray-50 text-brand-blue">
                                <tr>
                                    <th class="px-6 py-4 font-bold">Parameter</th>
                                    <th class="px-6 py-4 font-bold">Specification</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Mattress - Length</td>
                                    <td class="px-6 py-4 text-brand-slate">600mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Mattress - Width</td>
                                    <td class="px-6 py-4 text-brand-slate">500mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Mattress - Thickness</td>
                                    <td class="px-6 py-4 text-brand-slate">25mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Working level from the ground</td>
                                    <td class="px-6 py-4 text-brand-slate">900mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Unit Weight</td>
                                    <td class="px-6 py-4 text-brand-slate">65Kg</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Warranty</td>
                                    <td class="px-6 py-4 text-brand-slate">One Year Warranty for any manufacturing defects</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
