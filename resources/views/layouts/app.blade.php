<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AluconMedix | Advanced Medical Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'AluconMedix provides high-quality medical equipment and supplies for healthcare professionals.')">
    <link rel="icon" type="image/png" href="images/lOGO1.jpg" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN for easy hosting as requested) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#1A3C6E',
                            'blue-mid': '#2563EB',
                            'neon': '#00BFFF',
                            'green': '#A8D5BA',
                            charcoal: '#1E293B',
                            slate: '#64748B',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                        heading: ['Poppins', 'ui-sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; }
        .hero-bg-mask {
            mask-image: linear-gradient(to left, rgba(0,0,0,1) 60%, rgba(0,0,0,0));
            -webkit-mask-image: linear-gradient(to left, rgba(0,0,0,1) 60%, rgba(0,0,0,0));
        }
    </style>
</head>
<body class="bg-white text-brand-charcoal overflow-x-hidden">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/+94768803333" target="_blank" class="fixed bottom-8 right-8 z-[9999] group" aria-label="Chat on WhatsApp">
        <div class="relative flex items-center justify-center">
            <!-- Ping Animation -->
            <span class="absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75 animate-ping"></span>
            
            <!-- Button Body -->
            <div class="relative bg-[#25D366] hover:bg-[#20ba5a] text-white p-4 rounded-full shadow-2xl transition-all duration-300 transform group-hover:scale-110 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                </svg>
            </div>
            
            <!-- Tooltip/Label -->
            <div class="absolute right-full mr-4 bg-white text-brand-blue px-4 py-2 rounded-lg shadow-xl font-bold text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none border border-gray-100">
                Chat with us on WhatsApp
            </div>
        </div>
    </a>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
