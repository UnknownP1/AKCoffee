<script setup>
import { Head } from '@inertiajs/vue3';
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue';
import { onMounted } from 'vue';

onMounted(() => {
    // Load Elfsight platform script if not already loaded
    if (!document.querySelector('script[src="https://elfsightcdn.com/platform.js"]')) {
        const script = document.createElement('script')
        script.src = 'https://elfsightcdn.com/platform.js'
        script.async = true
        document.body.appendChild(script)
    }

    // Centering fix
    const styleId = 'elfsight-center-fix'
    if (!document.getElementById(styleId)) {
        const style = document.createElement('style')
        style.id = styleId
        style.textContent = `
            .elfsight-app-a45e183f-00cf-458b-bb88-75f2fac5822d {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .elfsight-app-a45e183f-00cf-458b-bb88-75f2fac5822d iframe {
                margin-left: auto !important;
                margin-right: auto !important;
                display: block !important;
            }
        `
        document.head.appendChild(style)
    }
})
</script>

<template>
    <Head title="Tentang AK Coffee" />
    
    <main class="flex-grow pb-32 md:pb-2xl px-margin-mobile md:px-margin-desktop max-w-7xl mx-auto">
        
        <!-- HERO SECTION -->
        <section class="flex flex-col md:flex-row gap-xl items-center mb-2xl pt-md">
            <div class="w-full md:w-1/2 space-y-md">
                <div class="inline-flex items-center gap-xs px-sm py-1 bg-secondary-container rounded-full">
                    <span class="material-symbols-outlined text-[16px] text-primary">laptop_mac</span>
                    <span class="text-label-sm font-label-sm text-secondary uppercase tracking-widest">WFC &amp; Lifestyle</span>
                </div>
                <h1 class="font-display-lg text-display-lg text-primary leading-tight">
                    Produktivitas dalam <br><span class="text-on-surface">Kenyamanan.</span>
                </h1>
                <p class="font-body-lg text-body-lg text-secondary max-w-lg">
                    AK Coffee adalah destinasi utama untuk para profesional dan kreatif di Samarinda. Kami menyediakan ruang yang dirancang khusus untuk mendukung fokus kerja, diskusi santai, dan momen istirahat yang berkualitas.
                </p>
            </div>
            <div class="w-full md:w-1/2 relative">
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-primary opacity-10 rounded-full blur-2xl"></div>
                <img 
                    alt="WFC Atmosphere at AK Coffee" 
                    class="w-full rounded-xl shadow-xl object-cover aspect-[1.1]" 
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe8dPQjj3e_OaQbK82RnP7sNpLcI5w9FyoCrroWA-qYZNRi16v6ifSVAINRD6I_o4CFbeNCGu6dhZpMeoog-qlfR6nwdHjtF7071EiEtHgbe73V1uwQ845cFSzFYL506TE3t6JUwkmz2xn6vlAYVV1jvRB2AWEuirZwjzVacxv1SAJD8c3E-Naydih7CfrSle9SBarBikfP64TzUK2mbJ42zYa8_NGniT_aDE6fUDA0LghAhkNH-5c"
                >
            </div>
        </section>

        <!-- RUANG UNTUK INSPIRASI -->
        <section class="grid grid-cols-1 md:grid-cols-12 gap-gutter mb-2xl">
            <div class="md:col-span-8 bg-surface-container-lowest/70 backdrop-blur-md p-xl rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-md">Ruang untuk Inspirasi</h2>
                    <p class="font-body-lg text-body-lg text-secondary leading-relaxed mb-lg">
                        Kami percaya bahwa lingkungan yang tepat dapat memicu ide-ide besar. Dengan fasilitas Wi-Fi yang stabil, colokan listrik yang memadai, dan atmosfer yang tenang namun hangat, AK Coffee adalah kantor kedua bagi Anda.
                    </p>
                </div>
                <div class="flex flex-wrap gap-md">
                    <div class="flex items-center gap-sm bg-surface p-md rounded-lg border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">wifi</span>
                        <span class="text-label-md font-bold">Fast Connection</span>
                    </div>
                    <div class="flex items-center gap-sm bg-surface p-md rounded-lg border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">meeting_room</span>
                        <span class="text-label-md font-bold">Quiet Zones</span>
                    </div>
                    <div class="flex items-center gap-sm bg-surface p-md rounded-lg border border-outline-variant">
                        <span class="material-symbols-outlined text-primary">coffee</span>
                        <span class="text-label-md font-bold">Premium Beans</span>
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 bg-primary text-on-primary p-xl rounded-xl flex flex-col justify-center items-center text-center">
                <span class="material-symbols-outlined text-[48px] mb-md">couch</span>
                <h3 class="font-headline-md text-headline-md mb-xs">Hangout Spot</h3>
                <p class="font-label-md opacity-80 mb-lg">Tempat ternyaman untuk berbincang</p>
                <div class="w-full h-px bg-on-primary opacity-20 mb-lg"></div>
                <p class="font-body-md italic">"Inspirasi di setiap cangkir, kenyamanan di setiap sudut."</p>
            </div>
            
            <!-- WORK MEET RELAX (Full width) -->
            <div class="md:col-span-12 relative overflow-hidden rounded-xl h-[400px] mt-lg">
                <img 
                    alt="Interior yang nyaman untuk bekerja" 
                    class="absolute inset-0 w-full h-full object-cover" 
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw-bStQVwHDY_YbWY8h3fdBj1x729utE-kCpKTWwwFqve28KO3w4_O0GZPQqxuaqlYc4owy6eGqD_TYxHVvyyin-L4XkvZMftA0OOzVxM_M8XdicFSaQz-RpifKiWzwzlGVHKFwI-_SADX6V-q0-aAwZoaZwolzUtel9btreV16gnbSMWV8tNKD_SjEvN7NmbNHcIFoiLPuYz-TUxZO7v9eArxUXuv1RRR9GGMxj3A4DaHTLM6xlXfSQyJ3LYbA7sihdfLfq0XTgU"
                >
                <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-transparent flex items-center p-xl">
                    <div class="max-w-md text-on-primary">
                        <h3 class="font-headline-lg text-headline-lg mb-md">Work, Meet, &amp; Relax.</h3>
                        <p class="font-body-md mb-lg">
                            Nikmati perpaduan antara kopi berkualitas tinggi dan suasana yang mendukung segala aktivitas Anda. Baik itu meeting profesional, mengerjakan tugas akhir, atau sekadar melepas penat bersama teman.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SUASANA KAMI (GALLERY) -->
        <section class="mb-2xl">
            <div class="flex items-end justify-between mb-lg">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Suasana Kami</h2>
                    <p class="font-body-md text-secondary">Melihat lebih dekat kenyamanan ruang kerja dan bersantai kami.</p>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
                <div class="aspect-square rounded-xl overflow-hidden bg-surface-container">
                    <img alt="Interior AK Coffee" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw-bStQVwHDY_YbWY8h3fdBj1x729utE-kCpKTWwwFqve28KO3w4_O0GZPQqxuaqlYc4owy6eGqD_TYxHVvyyin-L4XkvZMftA0OOzVxM_M8XdicFSaQz-RpifKiWzwzlGVHKFwI-_SADX6V-q0-aAwZoaZwolzUtel9btreV16gnbSMWV8tNKD_SjEvN7NmbNHcIFoiLPuYz-TUxZO7v9eArxUXuv1RRR9GGMxj3A4DaHTLM6xlXfSQyJ3LYbA7sihdfLfq0XTgU">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden bg-surface-container">
                    <img alt="Laptop on Table" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe8dPQjj3e_OaQbK82RnP7sNpLcI5w9FyoCrroWA-qYZNRi16v6ifSVAINRD6I_o4CFbeNCGu6dhZpMeoog-qlfR6nwdHjtF7071EiEtHgbe73V1uwQ845cFSzFYL506TE3t6JUwkmz2xn6vlAYVV1jvRB2AWEuirZwjzVacxv1SAJD8c3E-Naydih7CfrSle9SBarBikfP64TzUK2mbJ42zYa8_NGniT_aDE6fUDA0LghAhkNH-5c">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden bg-surface-container">
                    <img alt="Coffee Brewing" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw-bStQVwHDY_YbWY8h3fdBj1x729utE-kCpKTWwwFqve28KO3w4_O0GZPQqxuaqlYc4owy6eGqD_TYxHVvyyin-L4XkvZMftA0OOzVxM_M8XdicFSaQz-RpifKiWzwzlGVHKFwI-_SADX6V-q0-aAwZoaZwolzUtel9btreV16gnbSMWV8tNKD_SjEvN7NmbNHcIFoiLPuYz-TUxZO7v9eArxUXuv1RRR9GGMxj3A4DaHTLM6xlXfSQyJ3LYbA7sihdfLfq0XTgU">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden bg-surface-container">
                    <img alt="Casual Discussion" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe8dPQjj3e_OaQbK82RnP7sNpLcI5w9FyoCrroWA-qYZNRi16v6ifSVAINRD6I_o4CFbeNCGu6dhZpMeoog-qlfR6nwdHjtF7071EiEtHgbe73V1uwQ845cFSzFYL506TE3t6JUwkmz2xn6vlAYVV1jvRB2AWEuirZwjzVacxv1SAJD8c3E-Naydih7CfrSle9SBarBikfP64TzUK2mbJ42zYa8_NGniT_aDE6fUDA0LghAhkNH-5c">
                </div>
            </div>
        </section>

        <!-- HUBUNGI KAMI -->
        <section class="mb-2xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-xl items-center bg-surface-container-low p-xl rounded-xl border border-outline-variant">
                <div class="space-y-md">
                    <h2 class="font-headline-lg text-headline-lg text-primary">Hubungi Kami</h2>
                    <p class="font-body-lg text-body-lg text-secondary">Punya pertanyaan atau ingin berkolaborasi? Kami siap menyapa Anda.</p>
                    <div class="space-y-sm pt-md">
                        <div class="flex items-center gap-md">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">call</span>
                            </div>
                            <div>
                                <p class="text-label-sm text-secondary uppercase tracking-widest">WhatsApp</p>
                                <p class="font-body-md font-bold text-on-surface">+62 541 1234 5678</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-md">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">mail</span>
                            </div>
                            <div>
                                <p class="text-label-sm text-secondary uppercase tracking-widest">Email</p>
                                <p class="font-body-md font-bold text-on-surface">hello@akcoffee.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-md">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                            </div>
                            <div>
                                <p class="text-label-sm text-secondary uppercase tracking-widest">Alamat</p>
                                <p class="font-body-md font-bold text-on-surface">Jl. Ks Tubun Dalam No 38 B, Samarinda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-full min-h-[200px] rounded-lg overflow-hidden">
                    <img alt="AK Coffee Location" class="w-full h-full object-cover opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw-bStQVwHDY_YbWY8h3fdBj1x729utE-kCpKTWwwFqve28KO3w4_O0GZPQqxuaqlYc4owy6eGqD_TYxHVvyyin-L4XkvZMftA0OOzVxM_M8XdicFSaQz-RpifKiWzwzlGVHKFwI-_SADX6V-q0-aAwZoaZwolzUtel9btreV16gnbSMWV8tNKD_SjEvN7NmbNHcIFoiLPuYz-TUxZO7v9eArxUXuv1RRR9GGMxj3A4DaHTLM6xlXfSQyJ3LYbA7sihdfLfq0XTgU">
                </div>
            </div>
        </section>

        <!-- INSTAGRAM (WIDGET DINAMIS ELFSIGHT) -->
        <section class="py-2xl border-t border-outline-variant">
            <div class="text-center mb-xl">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-sm">Ikuti Kami di Instagram</h2>
                <p class="text-lg md:text-xl text-secondary">Dapatkan update terbaru dan keseruan harian di <span class="font-bold text-primary">@_ak_coffee</span></p>
            </div>

            <div class="w-full flex justify-center items-center">
                <div class="w-full max-w-7xl mx-auto px-4 md:px-0">
                    <div 
                        class="elfsight-app-a45e183f-00cf-458b-bb88-75f2fac5822d w-full mx-auto" 
                        data-elfsight-app-lazy 
                        style="width: 100%; display: block; margin: 0 auto;"
                    ></div>
                </div>
            </div>
        </section>

    </main>
</template>

<style>
/* NOT scoped — Elfsight injects its widget after mount,
   so scoped styles (data-v-xxxx attrs) won't match it */
.elfsight-app-a45e183f-00cf-458b-bb88-75f2fac5822d {
    margin-left: auto !important;
    margin-right: auto !important;
}

.elfsight-app-a45e183f-00cf-458b-bb88-75f2fac5822d iframe {
    margin-left: auto !important;
    margin-right: auto !important;
    display: block !important;
}
</style>