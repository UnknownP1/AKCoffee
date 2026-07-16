<script setup>
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue';

defineOptions({ layout: WebsiteLayout });
</script>

<template>
    <Head title="Lokasi AK Coffee" />
    
    <main class="flex-grow pb-2xl px-margin-mobile md:px-margin-desktop">
        
        <!-- Hero Section -->
        <section class="py-2xl text-center flex flex-col items-center">
            <div class="font-headline-md text-headline-md font-bold text-primary mb-lg">AK Coffee</div>
            <span class="text-primary font-label-sm tracking-widest uppercase">Temukan Kami</span>
            <h1 class="font-display-lg text-display-lg leading-tight mt-md">Mampir ke <span class="text-primary">AK Coffee.</span></h1>
            <p class="font-body-lg text-body-lg text-secondary max-w-xl mt-md">
                Nikmati suasana hangat dan tenang di sudut kota Samarinda. Tempat yang pas untuk mabar, kerja santai, atau sekadar ngopi sore.
            </p>
        </section>

        <!-- Main Content Area: Bento Grid Layout -->
        <section class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            
            <!-- Map Card (KIRI - 8 Kolom) -->
            <div class="md:col-span-8 bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden min-h-[500px] flex flex-col">
                <div class="p-lg flex justify-between items-center bg-surface border-b border-outline-variant">
                    <h2 class="font-headline-md flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary">map</span>
                        Peta Interaktif
                    </h2>
                    
                    <!-- TOMBOL MAPS: Ini langsung terhubung ke link yang kamu kasih -->
                    <a 
                        href="https://maps.app.goo.gl/rvc3yGndgEQyb7PfA" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="flex items-center gap-xs text-primary font-label-md hover:underline transition-colors"
                    >
                        Buka di Google Maps
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
                
                <!-- AREA PETA GOOGLE MAPS (Iframe langsung tanpa API Key) -->
                <div class="flex-grow relative bg-surface-container w-full h-full min-h-[400px]">
                    <iframe
                        src="https://maps.google.com/maps?q=Jl.%20Ks%20Tubun%20Dalam%20No%2038%20B,%20Samarinda%20Kota,%20Kalimantan%20Timur&output=embed&z=15"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full"
                    ></iframe>
                </div>
            </div>

            <!-- Right Sidebar (KANAN - 4 Kolom) -->
            <div class="md:col-span-4 space-y-gutter">
                
                <!-- Gambar Interior (Dari AI Stitch) -->
                <div class="h-64 rounded-xl overflow-hidden border border-outline-variant relative group">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" 
                         style="background-image: url('OuterShop.jpeg');">
                    </div>
                </div>

                <!-- Detail Alamat Card (Hardcode sesuai keinginanmu) -->
                <div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant">
                    <h3 class="font-headline-md mb-md">Detail Alamat</h3>
                    <div class="space-y-md">
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                            <p class="font-body-md text-on-surface">Jl. Ks Tubun Dalam No 38 B, Samarinda Kota, Kalimantan Timur 75112</p>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary">schedule</span>
                            <div>
                                <p class="font-label-md">Jam Operasional</p>
                                <p class="font-body-md">Setiap Hari: 08.30 - 23.00 WITA</p>
                            </div>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary">call</span>
                            <div>
                                <p class="font-label-md">Hubungi Kami</p>
                                <p class="font-body-md">+62 541 1234 5678</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
    </main>
</template>