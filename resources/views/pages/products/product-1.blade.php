@extends('layouts.app')

@section('title', 'AluconVeterinary Surgical Table | AluconMedix')

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
                        <img id="main-product-image" src="{{ asset('images/A.jpg') }}" alt="Veterinary Surgical Table" class="w-full h-full object-cover transition-opacity duration-300 ease-out origin-center">
                        
                        <!-- Loading Spinner -->
                        <div id="image-loader" class="absolute inset-0 flex items-center justify-center bg-white/40 opacity-0 transition-opacity duration-300 pointer-events-none">
                            <div class="w-10 h-10 border-4 border-brand-blue border-t-transparent rounded-full animate-spin shadow-lg"></div>
                        </div>

                        <!-- Navigation Arrows -->
                        <div class="absolute inset-0 flex items-center justify-between px-4 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                            <button onclick="prevImage()" onmouseenter="isHoveringNav = true" onmouseleave="isHoveringNav = false" class="pointer-events-auto w-10 h-10 md:w-12 md:h-12 bg-white/90 hover:bg-white text-brand-blue rounded-full shadow-lg flex items-center justify-center transition-all transform hover:scale-110">
                                <i data-lucide="chevron-left" class="w-5 h-5 md:w-6 md:h-6"></i>
                            </button>
                            <button onclick="nextImage()" onmouseenter="isHoveringNav = true" onmouseleave="isHoveringNav = false" class="pointer-events-auto w-10 h-10 md:w-12 md:h-12 bg-white/90 hover:bg-white text-brand-blue rounded-full shadow-lg flex items-center justify-center transition-all transform hover:scale-110">
                                <i data-lucide="chevron-right" class="w-5 h-5 md:w-6 md:h-6"></i>
                            </button>
                        </div>

                        <!-- Image Indicators -->
                        <div class="absolute bottom-6 md:bottom-8 left-1/2 -translate-x-1/2 flex gap-2">
                            <div class="indicator w-2 h-2 rounded-full bg-brand-blue transition-all duration-300" data-index="0"></div>
                            <div class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></div>
                            <div class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></div>
                            <div class="indicator w-2 h-2 rounded-full bg-gray-300 transition-all duration-300" data-index="3"></div>
                        </div>
                    </div>
                </div>

                <script>
                    const images = [
                        "{{ asset('images/A.jpg') }}",
                        "{{ asset('images/B (1).jpg') }}",
                        "{{ asset('images/C.jpg') }}",
                        "{{ asset('images/E.jpg') }}", 
                        "{{ asset('images/F.jpg') }}",
                        "{{ asset('images/G.jpg') }}"
                    ];
                    let currentIndex = 0;
                    const mainImage = document.getElementById('main-product-image');
                    const loader = document.getElementById('image-loader');
                    const indicators = document.querySelectorAll('.indicator');
                    const gallery = document.getElementById('product-gallery');
                    let isHoveringNav = false;
                    let isZoomed = false;
                    let lastTap = 0;

                    function updateImage(index) {
                        currentIndex = index;
                        loader.classList.remove('opacity-0');
                        mainImage.style.opacity = '0.5';

                        const tempImg = new Image();
                        tempImg.src = images[currentIndex];
                        tempImg.onload = () => {
                            mainImage.src = images[currentIndex];
                            mainImage.style.opacity = '1';
                            loader.classList.add('opacity-0');
                            resetZoom();
                        };

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

                    function nextImage() { updateImage((currentIndex + 1) % images.length); }
                    function prevImage() { updateImage((currentIndex - 1 + images.length) % images.length); }

                    // Touch & Double Tap Zoom Support
                    let touchStartX = 0;
                    
                    gallery.addEventListener('touchstart', e => {
                        touchStartX = e.changedTouches[0].screenX;
                    }, { passive: true });

                    gallery.addEventListener('touchend', e => {
                        const touchEndX = e.changedTouches[0].screenX;
                        const now = new Date().getTime();
                        
                        // Handle Double Tap
                        if (now - lastTap < 300) {
                            handleDoubleTap(e.changedTouches[0]);
                        } else {
                            // Handle Swipe only if not zoomed
                            if (!isZoomed) {
                                if (touchEndX < touchStartX - 50) nextImage();
                                if (touchEndX > touchStartX + 50) prevImage();
                            }
                        }
                        lastTap = now;
                    }, { passive: true });

                    function handleDoubleTap(touch) {
                        isZoomed = !isZoomed;
                        if (isZoomed) {
                            mainImage.style.transform = 'scale(2.5)';
                            updateZoomPos(touch);
                        } else {
                            resetZoom();
                        }
                    }

                    function resetZoom() {
                        isZoomed = false;
                        mainImage.style.transform = 'scale(1)';
                        mainImage.style.transformOrigin = 'center center';
                    }

                    function updateZoomPos(touch) {
                        const rect = gallery.getBoundingClientRect();
                        const x = ((touch.clientX - rect.left) / rect.width) * 100;
                        const y = ((touch.clientY - rect.top) / rect.height) * 100;
                        mainImage.style.transformOrigin = `${x}% ${y}%`;
                    }

                    gallery.addEventListener('touchmove', e => {
                        if (isZoomed) {
                            e.preventDefault(); // Prevent page scroll when dragging zoomed image
                            updateZoomPos(e.touches[0]);
                        }
                    }, { passive: false });

                    // Desktop Mouse Move Zoom
                    gallery.addEventListener('mousemove', (e) => {
                        if (window.innerWidth < 1024 || isHoveringNav || isZoomed) return;
                        
                        const rect = gallery.getBoundingClientRect();
                        const x = ((e.clientX - rect.left) / rect.width) * 100;
                        const y = ((e.clientY - rect.top) / rect.height) * 100;
                        
                        mainImage.style.transformOrigin = `${x}% ${y}%`;
                        mainImage.style.transform = 'scale(2.5)';
                    });

                    gallery.addEventListener('mouseleave', () => {
                        if (!isZoomed) resetZoom();
                    });

                    updateImage(0);
                </script>

                <!-- Product Info -->
                <div>
                    {{-- <span class="inline-block px-4 py-1.5 bg-blue-100 text-brand-blue-mid rounded-full text-xs font-bold uppercase tracking-widest mb-6">Critical Care Unit</span> --}}
                    <h1 class="text-4xl md:text-5xl font-bold text-brand-blue mb-6">Veterinary Surgical Table</h1>
                    <p class="text-xl text-brand-slate mb-8 leading-relaxed">Versatile V-Top design operating table placed on a smooth electric lift designed to meet modern surgical requirements</p>
                    <div class="space-y-6 mb-10">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-50 text-brand-green rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-6 h-6"></i>
                            </div>
                            <p class="text-brand-slate text-sm">Adjustable stainless steel leaves for perfect patient positioning and fluid management.</p>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-50 text-brand-green rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="check" class="w-6 h-6"></i>
                            </div>
                            <p class="text-brand-slate text-sm">Dual-pillar electric hoist system for rock-solid stability at any height.</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-xl">
                            Request a Quote
                        </a>
                        <a href="{{ route('products.gallery', 'vita-x100') }}" class="inline-block px-10 py-4 border-2 border-brand-blue text-brand-blue rounded-xl font-bold hover:bg-brand-blue hover:text-white transition-all">
                            View Demo
                        </a>
                    </div>
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
                            <span>Fully electric silent motors (Height and Tilt).</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>High-grade brushed stainless steel (304) for easy sterilization.</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Ergonomic 10 function hand-held remote for effortless adjustments.</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Installation of a battery backup is optional</span>
                        </li>
                        <li class="flex items-start gap-4 text-brand-slate">
                            <span class="w-2 h-2 bg-brand-blue-mid rounded-full mt-2 shrink-0"></span>
                            <span>Center-trough drainage system with integrated collection bucket.</span>
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
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Table top Length</td>
                                    <td class="px-6 py-4 text-brand-slate">1168mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Table top Width</td>
                                    <td class="px-6 py-4 text-brand-slate">615mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Adjustable Height</td>
                                    <td class="px-6 py-4 text-brand-slate">737mm - 889mm</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Lifting Capacity</td>
                                    <td class="px-6 py-4 text-brand-slate">250Kg</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Working Surface</td>
                                    <td class="px-6 py-4 text-brand-slate">Brushed Stainless steel (304)</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Base</td>
                                    <td class="px-6 py-4 text-brand-slate">Heavy-duty powder-coated steel frame</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Controller</td>
                                    <td class="px-6 py-4 text-brand-slate">10 - Function hand held remote</td>
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
