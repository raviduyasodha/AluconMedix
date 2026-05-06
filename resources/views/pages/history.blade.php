@extends('layouts.app')

@section('title', 'Our Journey | AluconMedix')

@section('content')
    <!-- Page Header -->
    <header class="bg-brand-blue py-24 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-5xl font-bold mb-6">Our Journey</h1>
            <p class="text-xl opacity-90 max-w-3xl leading-relaxed">Building a legacy of precision and trust in healthcare technology.</p>
        </div>
    </header>

    <!-- Enhanced Timeline Section -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Journey Stats -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="text-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="text-4xl font-bold text-brand-blue-mid mb-2">30+</div>
                    <div class="text-brand-slate">Years of Excellence</div>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="text-4xl font-bold text-brand-blue-mid mb-2">130+</div>
                    <div class="text-brand-slate">Units Delivered</div>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="text-4xl font-bold text-brand-blue-mid mb-2">15+</div>
                    <div class="text-brand-slate">Hospitals Served</div>
                </div>
            </div> --}}
            
            <div class="relative">
                <!-- 1994 -->
                <div class="mb-20 relative timeline-item">
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-8 w-6 h-6 bg-brand-blue-mid rounded-full border-4 border-white shadow-lg z-10 hover:scale-125 transition-transform"></div>
                    <div class="md:grid md:grid-cols-2 gap-16 items-start">
                        <div class="md:text-right">
                            <div class="inline-flex items-center mb-2">
                                <i data-lucide="flag" class="w-5 h-5 text-brand-blue-mid mr-2"></i>
                                <span class="text-3xl font-extrabold text-brand-blue-mid">1994</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-blue mt-2">The Foundation</h3>
                        </div>
                        <div class="mt-4 md:mt-0 p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start mb-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="lightbulb" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">While functioning as an engineering workshop, we were introduced into the sector of designing and manufacturing Hospital Equipment upon advice provided by Deshabandu Dr. Kapila Gunwardena, who initiated the thought and provided guidance to design an Infant Warmer / Resuscitator. This initiative was accepted by ourselves initially as a community service to the area.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 1995 -->
                <div class="mb-20 relative timeline-item">
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-8 w-6 h-6 bg-brand-blue-mid rounded-full border-4 border-white shadow-lg z-10 hover:scale-125 transition-transform"></div>
                    <div class="md:grid md:grid-cols-2 gap-16 items-start">
                        <div class="hidden md:block p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="wrench" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Completed design and fabrication of the first Infant Warmer / Resuscitator unit where 10 Nos. were manufactured and provided to Ratnapura Base Hospital.</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:text-left">
                            <div class="inline-flex items-center mb-2">
                                <i data-lucide="hammer" class="w-5 h-5 text-brand-blue-mid mr-2"></i>
                                <span class="text-3xl font-extrabold text-brand-blue-mid">1995</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-blue mt-2">First Design</h3>
                        </div>
                        <div class="md:hidden mt-4 p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="wrench" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Completed design and fabrication of the first Infant Warmer / Resuscitator unit where 10 Nos. were manufactured and provided to Ratnapura Base Hospital.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 1999 -->
                <div class="mb-20 relative timeline-item">
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-8 w-6 h-6 bg-brand-blue-mid rounded-full border-4 border-white shadow-lg z-10 hover:scale-125 transition-transform"></div>
                    <div class="md:grid md:grid-cols-2 gap-16 items-start">
                        <div class="md:text-right">
                            <div class="inline-flex items-center mb-2">
                                <i data-lucide="package" class="w-5 h-5 text-brand-blue-mid mr-2"></i>
                                <span class="text-3xl font-extrabold text-brand-blue-mid">1999</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-blue mt-2">First Large Order</h3>
                        </div>
                        <div class="mt-4 md:mt-0 p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="truck" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Received our first large scale order where 120 Infant Warmer / Resuscitator units were produced upon request of UNICEF</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2015 -->
                <div class="mb-20 relative timeline-item">
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-8 w-6 h-6 bg-brand-blue-mid rounded-full border-4 border-white shadow-lg z-10 hover:scale-125 transition-transform"></div>
                    <div class="md:grid md:grid-cols-2 gap-16 items-start">
                        <div class="hidden md:block p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="map" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Continued to provide Infant Warmer / Resuscitators upon various orders received to hospitals in the Sabaragamuwa region ( Ratnapura, Kahawatta, Mawanella, Ruwanwella, Embilipitiya, etc. )</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:text-left">
                            <div class="inline-flex items-center mb-2">
                                <i data-lucide="trending-up" class="w-5 h-5 text-brand-blue-mid mr-2"></i>
                                <span class="text-3xl font-extrabold text-brand-blue-mid">2015</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-blue mt-2">Expansion into Sabaragamuwa</h3>
                        </div>
                        <div class="md:hidden mt-4 p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="map" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Continued to provide Infant Warmer / Resuscitators upon various orders received to hospitals in the Sabaragamuwa region ( Ratnapura, Kahawatta, Mawanella, Ruwanwella, Embilipitiya, etc. )</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="mb-20 relative timeline-item">
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-8 w-6 h-6 bg-brand-blue-mid rounded-full border-4 border-white shadow-lg z-10 hover:scale-125 transition-transform"></div>
                    <div class="md:grid md:grid-cols-2 gap-16 items-start">
                        <div class="md:text-right">
                            <div class="inline-flex items-center mb-2">
                                <i data-lucide="shield" class="w-5 h-5 text-brand-blue-mid mr-2"></i>
                                <span class="text-3xl font-extrabold text-brand-blue-mid">2024</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-blue mt-2">Post COVID Situation</h3>
                        </div>
                        <div class="mt-4 md:mt-0 p-8 bg-white rounded-2xl border-2 border-brand-blue-mid shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start mb-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-blue bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-blue-mid group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="settings" class="w-6 h-6 text-brand-blue-mid"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Sri Lanka was placed in a challenging position post COVID with the economic downfall, limiting imports of hospital equipment to the country. During that period, we were requested by hospitals to repair existing equipment such as Infant Warmers / Resuscitators, ICU Beds, Theater observation lamps, Autoclave machines, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="mb-20 relative timeline-item">
                    <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-8 w-6 h-6 bg-brand-neon rounded-full border-4 border-white shadow-lg z-10 hover:scale-125 transition-transform animate-pulse"></div>
                    <div class="md:grid md:grid-cols-2 gap-16 items-start">
                        <div class="hidden md:block p-8 bg-white rounded-2xl border-2 border-brand-neon shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-neon bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-neon group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="zap" class="w-6 h-6 text-brand-neon"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Innovate new products such as advanced infant warmers and broadened our horizons into the Veterinary equipment manufacturing industry with the design and fabrication of a electronically controlled veterinary surgical table</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:text-left">
                            <div class="inline-flex items-center mb-2">
                                <i data-lucide="sparkles" class="w-5 h-5 text-brand-neon mr-2"></i>
                                <span class="text-3xl font-extrabold text-brand-neon">Present</span>
                            </div>
                            <h3 class="text-2xl font-bold text-brand-blue mt-2">Innovating New Products</h3>
                        </div>
                        <div class="md:hidden mt-4 p-8 bg-white rounded-2xl border-2 border-brand-neon shadow-md hover:shadow-xl transition-all hover:border-brand-blue group">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-brand-neon bg-opacity-10 rounded-full flex items-center justify-center group-hover:bg-brand-neon group-hover:bg-opacity-20 transition-colors">
                                    <i data-lucide="zap" class="w-6 h-6 text-brand-neon"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-brand-slate leading-relaxed">Innovate new products such as advanced infant warmers and broadened our horizons into the Veterinary equipment manufacturing industry with the design and fabrication of a electronically controlled veterinary surgical table</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Closing Statement -->
    {{-- <section class="py-24 bg-gradient-to-br from-brand-blue to-brand-blue-mid text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-24 -mb-24"></div>
        
        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-6">
                <i data-lucide="target" class="w-8 h-8"></i>
            </div>
            <h2 class="text-3xl font-bold mb-8">Looking Ahead</h2>
            <p class="text-lg leading-relaxed mb-12 opacity-90">As we look to the future, AluconMedix remains dedicated to the same principles that started our journey: uncompromising quality and a relentless pursuit of innovation. We are committed to eco-friendly manufacturing and smart healthcare ecosystems to drive the future of medicine.</p>
            <div class="flex justify-center">
                <a href="{{ route('contact') }}" class="px-10 py-4 bg-white text-brand-blue rounded-xl font-bold hover:bg-opacity-90 transition-all shadow-lg hover:shadow-xl transform hover:scale-105">
                    Join Our Journey
                </a>
            </div>
        </div>
    </section> --}}

    <!-- Custom Styles and Scripts -->
    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fade-in-up 0.8s ease-out;
        }
        
        .timeline-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }
        
        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .timeline-item:nth-child(even) {
            transition-delay: 0.2s;
        }
        
        .timeline-item:nth-child(odd) {
            transition-delay: 0.1s;
        }
        
        /* Mobile timeline line */
        @media (max-width: 768px) {
            .timeline-item::before {
                content: '';
                position: absolute;
                left: 20px;
                top: 40px;
                bottom: -20px;
                width: 2px;
                background: linear-gradient(to bottom, #1A3C6E, #2563EB);
                z-index: 0;
            }
            
            .timeline-item:last-child::before {
                display: none;
            }
        }
        
        /* Progress indicator */
        /* .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #1A3C6E, #00BFFF);
            z-index: 1000;
            transition: width 0.3s ease;
        } */
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();
            
            // Progress bar
            const progressBar = document.createElement('div');
            progressBar.className = 'progress-bar';
            document.body.appendChild(progressBar);
            
            function updateProgressBar() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrollProgress = (scrollTop / scrollHeight) * 100;
                progressBar.style.width = scrollProgress + '%';
            }
            
            window.addEventListener('scroll', updateProgressBar);
            
            // Timeline animation on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.timeline-item').forEach(item => {
                observer.observe(item);
            });
            
            // Add hover sound effect (optional enhancement)
            document.querySelectorAll('.timeline-item .group').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
@endsection
