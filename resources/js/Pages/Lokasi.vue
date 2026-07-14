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
                Nikmati suasana hangat dan tenang di berbagai sudut kota Samarinda. Kini hadir di 3 lokasi strategis untuk menemani aktivitas Anda.
            </p>
        </section>

        <!-- 3 Cabang Layout (Sejajar) -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            
            <!-- CABANG 1: Samarinda Kota (Dengan Peta) -->
            <div class="bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden flex flex-col">
                <div class="p-lg flex justify-between items-center bg-surface border-b border-outline-variant flex-wrap gap-2">
                    <h2 class="font-headline-md flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary">map</span>
                        Cabang Samarinda Kota
                    </h2>
                    
                    <a 
                        href="https://maps.app.goo.gl/rvc3yGndgEQyb7PfA" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="flex items-center gap-xs text-primary font-label-md hover:underline transition-colors text-sm"
                    >
                        <span class="hidden sm:inline">Buka di Maps</span>
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
                
                <div class="h-64 md:h-80 w-full relative bg-surface-container">
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
                
                <div class="p-lg space-y-md bg-surface-container-lowest flex-1">
                    <h3 class="font-label-md text-label-md text-primary uppercase tracking-wider">Detail Alamat</h3>
                    <div class="space-y-md">
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">location_on</span>
                            <p class="font-body-md text-on-surface text-sm">Jl. Ks Tubun Dalam No 38 B, Samarinda Kota, Kalimantan Timur 75112</p>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">schedule</span>
                            <div>
                                <p class="font-label-md text-sm">Jam Operasional</p>
                                <p class="font-body-md text-sm">08.30 - 23.00 WITA</p>
                            </div>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">call</span>
                            <div>
                                <p class="font-label-md text-sm">Hubungi Kami</p>
                                <p class="font-body-md text-sm">+62 541 1234 5678</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CABANG 2: Sungai Kunjang -->
            <div class="bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden flex flex-col">
                <div class="p-lg bg-surface border-b border-outline-variant">
                    <h2 class="font-headline-md flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary">location_city</span>
                        Cabang Sungai Kunjang
                    </h2>
                </div>
                
                <!-- Gambar placeholder agar sama rata -->
                <div class="h-64 md:h-80 w-full bg-gray-100 relative overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center" 
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDqvF_-D8FlBAbOSMd_YhaqPC_APKmXbmBwivm3-2ta1DdpLv3Ey5ZnYZI13WDvtW1lPDd8hdzaPyyCDAzdJz0hoij9FCHLiSlEovVJ_iJzIl8Z-Jt8VwrNnIaIUjphIIlzwg0wKKNF3W8u2lpEFBFa7SzbnFjsN94O5X2qFWgE4RhUldG6zpqNhu6GhGNwEGBR0wDR5tJvENIcboPvIOPcKx3PskbuwnIrkDx4MNR3mcCrTrqQnsvL1sdChOuwBZnAP6ZXnKS4Eh0');">
                    </div>
                </div>

                <div class="p-lg space-y-md bg-surface-container-lowest flex-1">
                    <h3 class="font-label-md text-label-md text-primary uppercase tracking-wider">Detail Alamat</h3>
                    <div class="space-y-md">
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">location_on</span>
                            <p class="font-body-md text-on-surface text-sm">Jl. Pahlawan No. 21, Sungai Kunjang, Samarinda, Kalimantan Timur 75123</p>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">schedule</span>
                            <div>
                                <p class="font-label-md text-sm">Jam Operasional</p>
                                <p class="font-body-md text-sm">07.00 - 22.00 WITA</p>
                            </div>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">call</span>
                            <div>
                                <p class="font-label-md text-sm">Hubungi Kami</p>
                                <p class="font-body-md text-sm">+62 541 9876 5432</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CABANG 3: Palaran -->
            <div class="bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden flex flex-col">
                <div class="p-lg bg-surface border-b border-outline-variant">
                    <h2 class="font-headline-md flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary">storefront</span>
                        Cabang Palaran
                    </h2>
                </div>
                
                <div class="h-64 md:h-80 w-full bg-gray-100 relative overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center" 
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCG9p5Bfp921nqrWR4Qkh8M-zh2hXQoRlaUUi8oU6Ju90VER0wFjX8X1ygeABxy7cQNmj9tfh0A9ZfHL1LWDrFsG5h7AqF69wC-6ULbGCc0OTxskLEg6_Q_FIHMNkJa_uYOtnCSMp97REz535RnxsKMOo19O9xg6m9YvG9bMkyJdp4dbthEf3NxhjUL9DwUEoQVplUNiMN_MrkNDXIhgPz-ewKR_5bwdrL2hP0OSX35SsiSYPMqzURcgA');">
                    </div>
                </div>

                <div class="p-lg space-y-md bg-surface-container-lowest flex-1">
                    <h3 class="font-label-md text-label-md text-primary uppercase tracking-wider">Detail Alamat</h3>
                    <div class="space-y-md">
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">location_on</span>
                            <p class="font-body-md text-on-surface text-sm">Komplek Citra Niaga Blok B No. 12, Palaran, Samarinda, Kalimantan Timur 75241</p>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">schedule</span>
                            <div>
                                <p class="font-label-md text-sm">Jam Operasional</p>
                                <p class="font-body-md text-sm">09.00 - 22.00 WITA</p>
                            </div>
                        </div>
                        <div class="flex gap-md">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">call</span>
                            <div>
                                <p class="font-label-md text-sm">Hubungi Kami</p>
                                <p class="font-body-md text-sm">+62 541 5678 1234</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
    </main>
</template>