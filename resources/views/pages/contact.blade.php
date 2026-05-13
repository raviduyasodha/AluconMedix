@extends('layouts.app')

@section('title', 'Contact Us | AluconMedix')

@section('content')
    <!-- Page Header -->
    <header class="bg-brand-blue py-24 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-5xl font-bold mb-6">Get in Touch</h1>
            <p class="text-xl opacity-90 max-w-3xl leading-relaxed">We are here to assist you with your medical equipment needs. Reach out to our specialist team.</p>
        </div>
    </header>

    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
                <!-- Contact Info -->
                <div class="lg:col-span-2 space-y-12">
                    <div>
                        <h2 class="text-3xl font-bold text-brand-blue mb-8">Contact Information</h2>
                        <div class="space-y-8">
                            <div class="flex gap-6">
                                <div class="w-12 h-12 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-blue">Headquarters</h4>
                                    <p class="text-brand-slate">No 11, Thepulangoda Rd, Ratnapura, Sri Lanka</p>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="w-12 h-12 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-blue">Phone</h4>
                                    <p class="text-brand-slate">+94 76 880 3333 (General)</p>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="w-12 h-12 bg-blue-50 text-brand-blue-mid rounded-xl flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-blue">Email</h4>
                                    <p class="text-brand-slate">info@aluconmedix.lk</p>
                                    <p class="text-brand-slate">sales@aluconmedix.lk</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl overflow-hidden border border-gray-100 shadow-lg h-80">
                        {{-- <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585994236!2d79.786164!3d6.9218374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1714390000000!5m2!1sen!2slk" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe> --}}

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5007650570406!2d80.38657909999999!3d6.7085721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3bf545d7dccc3%3A0x93163ef157fbf705!2sAlucon%20Medix!5e0!3m2!1sen!2sau!4v1778640280233!5m2!1sen!2sau" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-3">
                    <div class="bg-white p-10 md:p-16 rounded-[3rem] border border-gray-100 shadow-2xl relative">
                        @if(session('success'))
                            <div class="text-center py-12">
                                <div class="w-20 h-20 bg-green-50 text-brand-green rounded-full flex items-center justify-center mx-auto mb-8">
                                    <i data-lucide="check-circle" class="w-10 h-10"></i>
                                </div>
                                <h2 class="text-3xl font-bold text-brand-blue mb-4">Message Sent!</h2>
                                <p class="text-brand-slate text-lg mb-8">Thank you for contacting AluconMedix. Our specialist team will reach out to you within 24 hours.</p>
                                <a href="{{ route('home') }}" class="inline-block px-8 py-3 border-2 border-brand-blue text-brand-blue rounded-xl font-bold hover:bg-brand-blue hover:text-white transition-all">
                                    Return Home
                                </a>
                            </div>
                        @else
                            <h2 class="text-3xl font-bold text-brand-blue mb-10">Send us a Message</h2>
                            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-8">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <label for="name" class="block text-sm font-bold text-brand-blue">Full Name</label>
                                        <input type="text" id="name" name="name" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue-mid transition-all" placeholder="John Doe" required>
                                    </div>
                                    <div class="space-y-3">
                                        <label for="email" class="block text-sm font-bold text-brand-blue">Email Address</label>
                                        <input type="email" id="email" name="email" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue-mid transition-all" placeholder="john@example.com" required>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <label for="subject" class="block text-sm font-bold text-brand-blue">Subject</label>
                                    <input type="text" id="subject" name="subject" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue-mid transition-all" placeholder="Technical Inquiry" required>
                                </div>
                                <div class="space-y-3">
                                    <label for="message" class="block text-sm font-bold text-brand-blue">Message</label>
                                    <textarea id="message" name="message" rows="5" class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-blue-mid transition-all" placeholder="Tell us about your requirements..." required></textarea>
                                </div>
                                <button type="submit" class="w-full py-5 bg-brand-blue text-white rounded-xl font-extrabold text-lg hover:bg-brand-blue-mid hover:-translate-y-1 transition-all shadow-xl">
                                    Send Inquiry
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
