<footer class="bg-[#0f172a] text-[#94a3b8] pt-20 pb-8 mt-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="space-y-6">
                <a href="{{ route('home') }}" class="text-2xl font-extrabold text-white">
                    <img src="{{ asset('images/LOGO.jpg') }}" alt="Alucon Medix Logo" width="250px" >
                </a>
                <p class="text-sm leading-relaxed">Leading provider of advanced medical technology and equipment. Enhancing lives through precision engineering and clinical innovation.</p>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-brand-neon"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-brand-neon"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-brand-neon"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-brand-neon transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-brand-neon transition-colors">About Us</a></li>
                    <li><a href="{{ route('history') }}" class="hover:text-brand-neon transition-colors">Our History</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-brand-neon transition-colors">Products</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-brand-neon transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Featured Products</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('products.detail', 'vita-x100') }}" class="hover:text-brand-neon transition-colors">Veterinary Surgical Table</a></li>
                    <li><a href="{{ route('products.detail', 'laser-s3') }}" class="hover:text-brand-neon transition-colors" style="font-size:13px;">Alucon Neonatal Infant Radiant Warmer</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-brand-neon transition-colors">All Products</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Contact Us</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-brand-blue-mid shrink-0"></i>
                        <span>No 11, Thepulangoda Rd, Ratnapura, Sri Lanka</span>
                    </li>
                    <li class="flex gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-brand-blue-mid shrink-0"></i>
                        <span>+94 70 308 0333</span>
                    </li>
                    <li class="flex gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-brand-blue-mid shrink-0"></i>
                        <span>info@aluconmedix.lk</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pt-8 border-t border-white/10 text-center text-xs">
            <p>&copy; {{ date('Y') }} AluconMedix. Alucon Medix is a fully owned subsidiary of Brilliant Lanka (Pvt) Ltd.</p>
        </div>
    </div>
</footer>
