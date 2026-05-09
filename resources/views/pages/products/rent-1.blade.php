@extends('layouts.app')

@section('title', 'Rent Veterinary Surgical Table | AluconMedix')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Breadcrumbs -->
            <nav class="flex mb-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="text-brand-blue-mid hover:text-brand-blue flex items-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Home
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
                    
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-brand-neon rounded-full flex items-center justify-center border-8 border-gray-50 shadow-lg z-10">
                        <span class="text-brand-blue font-bold text-center leading-tight text-sm uppercase">Available<br>For Rent</span>
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <span class="inline-block px-4 py-1.5 bg-blue-100 text-brand-blue-mid rounded-full text-xs font-bold uppercase tracking-widest mb-6">Equipment Rental Service</span>
                    <h1 class="text-4xl md:text-5xl font-bold text-brand-blue mb-6">Veterinary Surgical Table (Rental)</h1>
                    <p class="text-xl text-brand-slate mb-8 leading-relaxed">Flexible rental options for modern veterinary practices. Get the latest technology without the full upfront cost.</p>
                    
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 mb-10">
                        <h3 class="text-lg font-bold text-brand-blue mb-4">Rental Highlights:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-brand-slate">
                                <i data-lucide="calendar" class="w-5 h-5 text-brand-blue-mid"></i>
                                <span>Flexible Weekly & Monthly Terms</span>
                            </li>
                            <li class="flex items-center gap-3 text-brand-slate">
                                <i data-lucide="wrench" class="w-5 h-5 text-brand-blue-mid"></i>
                                <span>Full Maintenance Included</span>
                            </li>
                            <li class="flex items-center gap-3 text-brand-slate">
                                <i data-lucide="truck" class="w-5 h-5 text-brand-blue-mid"></i>
                                <span>Fast Delivery & Installation</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-brand-blue text-white rounded-xl font-bold hover:bg-brand-blue-mid transition-all shadow-xl">
                        Enquire About Rental
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rental Terms -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div>
                    <h2 class="text-3xl font-bold text-brand-blue mb-12">Why Rent From Us?</h2>
                    <ul class="space-y-6">
                        <li class="flex items-center gap-4 text-brand-slate">
                            <div class="w-12 h-12 bg-blue-50 text-brand-blue-mid rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="shield-check" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-blue">Reliability</p>
                                <p class="text-sm">All equipment is rigorously tested and certified before every rental.</p>
                            </div>
                        </li>
                        <li class="flex items-center gap-4 text-brand-slate">
                            <div class="w-12 h-12 bg-blue-50 text-brand-blue-mid rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-blue">Cost-Effective</p>
                                <p class="text-sm">Save on capital expenditure and manage your budget with fixed monthly costs.</p>
                            </div>
                        </li>
                        <li class="flex items-center gap-4 text-brand-slate">
                            <div class="w-12 h-12 bg-blue-50 text-brand-blue-mid rounded-full flex items-center justify-center shrink-0">
                                <i data-lucide="refresh-cw" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-blue">Upgrade Anytime</p>
                                <p class="text-sm">Easily swap for newer models as technology evolves.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-brand-blue mb-12">Rental Specifications</h2>
                    <div class="overflow-hidden rounded-2xl border border-gray-100 shadow-sm">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-gray-50 text-brand-blue">
                                <tr>
                                    <th class="px-6 py-4 font-bold">Plan Type</th>
                                    <th class="px-6 py-4 font-bold">Details</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Short Term</td>
                                    <td class="px-6 py-4 text-brand-slate">7 - 30 Days</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Long Term</td>
                                    <td class="px-6 py-4 text-brand-slate">6 - 12 Months</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Deposit</td>
                                    <td class="px-6 py-4 text-brand-slate">Refundable Security Deposit</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold text-brand-blue">Maintenance</td>
                                    <td class="px-6 py-4 text-brand-slate">Included in monthly fee</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            
            if (now - lastTap < 300) {
                handleDoubleTap(e.changedTouches[0]);
            } else {
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
                e.preventDefault();
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
@endsection
