<template>
<!DOCTYPE html><html class="light" lang="id" style="width: 1280px; height: 3578px; overflow: hidden; position: relative;"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>AK Coffee | Pemanggangan Kopi Premium</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-tint": "#006a6a",
                        "error": "#ba1a1a",
                        "on-secondary-fixed-variant": "#474747",
                        "inverse-surface": "#2f3131",
                        "outline-variant": "#bdc9c8",
                        "on-error": "#ffffff",
                        "tertiary": "#5a5a5a",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#eeeeee",
                        "error-container": "#ffdad6",
                        "surface-bright": "#f9f9f9",
                        "on-tertiary-container": "#fbf8f8",
                        "secondary": "#5e5e5e",
                        "on-secondary-container": "#646464",
                        "primary-container": "#008080",
                        "surface-container-low": "#f3f3f3",
                        "surface-container-high": "#e8e8e8",
                        "on-primary-container": "#e3fffe",
                        "tertiary-container": "#737272",
                        "tertiary-fixed": "#e4e2e2",
                        "on-tertiary-fixed": "#1b1c1c",
                        "surface": "#f9f9f9",
                        "primary": "#006565",
                        "outline": "#6e7979",
                        "on-primary-fixed": "#002020",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed": "#1b1b1b",
                        "background": "#f9f9f9",
                        "inverse-primary": "#76d6d5",
                        "secondary-container": "#e2e2e2",
                        "primary-fixed-dim": "#76d6d5",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#e2e2e2",
                        "on-tertiary-fixed-variant": "#474747",
                        "surface-variant": "#e2e2e2",
                        "on-primary-fixed-variant": "#004f4f",
                        "secondary-fixed-dim": "#c6c6c6",
                        "on-background": "#1a1c1c",
                        "on-secondary": "#ffffff",
                        "on-surface": "#1a1c1c",
                        "primary-fixed": "#93f2f2",
                        "tertiary-fixed-dim": "#c8c6c6",
                        "surface-dim": "#dadada",
                        "inverse-on-surface": "#f1f1f1",
                        "secondary-fixed": "#e2e2e2",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#3e4949"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "sm": "8px",
                        "margin-desktop": "48px",
                        "xs": "4px",
                        "xl": "40px",
                        "md": "16px",
                        "base": "4px",
                        "lg": "24px",
                        "2xl": "64px"
                    },
                    "fontFamily": {
                        "body-lg": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-md": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "label-sm": ["Hanken Grotesk"],
                        "display-lg": ["Hanken Grotesk"],
                        "headline-lg": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Hanken Grotesk', sans-serif; background-color: #ffffff; color: #000000; }
        .tosca-heading { color: #008080; }
        .hero-gradient { background: linear-gradient(to right, rgba(255,255,255,1) 40%, rgba(255,255,255,0) 100%); }
    </style>
</head>
<body class="bg-surface-container-lowest pb-24">
<!-- Floating Bottom Navigation -->
<div class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 w-max">
<nav class="bg-white/80 backdrop-blur-xl border border-gray-100 shadow-[0_20px_50px_rgba(0,0,0,0.1)] rounded-full px-10 py-4 flex items-center gap-10">
<a class="flex flex-col items-center justify-center gap-1 group" href="{{DATA:SCREEN:SCREEN_42}}" title="Beranda">
<div class="w-12 h-12 rounded-full bg-[#008080] text-white flex items-center justify-center shadow-[0_0_20px_rgba(0,128,128,0.4)] transition-all duration-300">
<span class="material-symbols-outlined text-[24px]">home</span>
</div>
<span class="text-[10px] font-bold text-[#008080] uppercase tracking-wider">BERANDA</span>
</a>
<a class="flex flex-col items-center justify-center gap-1 group" href="{{DATA:SCREEN:SCREEN_58}}" title="Menu">
<div class="w-12 h-12 rounded-full text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary flex items-center justify-center transition-all duration-300">
<span class="material-symbols-outlined text-[24px]">menu_book</span>
</div>
<span class="text-[10px] font-bold text-[#6B7280] group-hover:text-primary uppercase tracking-wider">MENU</span>
</a>
<a class="flex flex-col items-center justify-center gap-1 group" href="{{DATA:SCREEN:SCREEN_22}}" title="Lokasi">
<div class="w-12 h-12 rounded-full text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary flex items-center justify-center transition-all duration-300">
<span class="material-symbols-outlined text-[24px]">location_on</span>
</div>
<span class="text-[10px] font-bold text-[#6B7280] group-hover:text-primary uppercase tracking-wider">LOKASI</span>
</a>
<a class="flex flex-col items-center justify-center gap-1 group" href="{{DATA:SCREEN:SCREEN_55}}" title="Tentang Kami">
<div class="w-12 h-12 rounded-full text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary flex items-center justify-center transition-all duration-300">
<span class="material-symbols-outlined text-[24px]">info</span>
</div>
<span class="text-[10px] font-bold text-[#6B7280] group-hover:text-primary uppercase tracking-wider">TENTANG</span>
</a>
</nav>
</div>
<main>
<!-- Hero Section -->
<section class="relative w-full h-[85vh] overflow-hidden flex items-center">
<div class="absolute inset-0 z-0">
<img alt="Interior AK Coffee yang premium dan modern" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLu1XZ0Yv8xifvlfWr52S-sJvnJsvk83vi8NvvntlGKtLPvvlsARJjhgYHTPX5qdPh8Z_fSYNZjH5YNrO0LUZHwdNSfs04AHYmSv4XY5kp2LGMTpHPlnJ7wsyZmBMy42E88tNiBkb5UvdtS7n4PzFdFJZsrZV9uR8h75ul0U2E_txDyxxM6uolcfvvzMr1SrpKC7EmmdZp7WLF1r4Zb_1qreh940sKs3gnWw3hTRH6IFIfgKUfvlkrN49ME">
<div class="absolute inset-0 hero-gradient"></div>
</div>
<div class="relative z-10 px-margin-desktop w-full max-w-7xl mx-auto">
<div class="max-w-2xl">
<div class="font-headline-md text-headline-md font-bold text-on-surface mb-lg">AK Coffee</div>
<h1 class="font-display-lg text-display-lg tosca-heading mb-md">AK Coffee: Wadah Komunitas &amp; Kreativitas</h1>
<p class="font-body-lg text-body-lg text-on-surface mb-lg max-w-lg">AK Coffee bukan sekadar kedai kopi, melainkan ruang kreatif yang didorong oleh semangat komunitas. Tempat di mana ide mengalir sebebas kopi kami, dirancang untuk menginspirasi setiap pengunjung.</p>
<div class="flex gap-md">


</div>
</div>
</div>
</section>
<!-- Best Sellers - Bento Grid -->
    <section class="py-2xl px-margin-desktop max-w-7xl mx-auto" id="menu-section">
    <div class="flex justify-between items-end mb-2xl">
    <div>
    <span class="text-primary font-label-sm uppercase tracking-widest block mb-xs">Pilihan Kurasi</span>
    <h2 class="font-headline-lg text-headline-lg tosca-heading">Produk Terlaris Kami</h2>
    </div>
    <a class="text-primary font-label-md flex items-center gap-xs hover:underline" href="#">
                        Lihat menu lengkap <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
    </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-lg">
    <!-- Large Item -->
    <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-xl bg-surface-container border border-outline-variant">
    <img alt="Seni latte yang indah di cangkir keramik" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpOlyCEFAELSHreUoQTEpvh7yi1r2xFXjSs6OF1dStfMDZuv8Syp-hhHnysYJrTniuxSG9uWKxcV5hG9noMPXsu9uNXQUc4IZUAmwW94WlwMnlSEXVfiq2qFhphuIn-dEURTVNPETUdFgaAt5T4Fw9m86QMu-KL1mrl5qUom016GfxgxQaPQ_n6MqE3CUuDDT27OZVu2UIDxr_eCiqMQjrYeCG3S1hS6uYiipaglk8YoNR4FgIFAoPvw">
    <div class="absolute bottom-0 left-0 right-0 p-lg bg-gradient-to-t from-black/80 to-transparent text-white">
    <h3 class="font-headline-md text-headline-md mb-xs">Latte Khas Kami</h3>
    <p class="font-body-md opacity-90">Lembut, berkrim, dan seimbang dengan biji kopi sangrai rumah kami.</p>
    <p class="mt-md font-bold text-headline-md">Rp 55.000</p>
    </div>
    </div>
    <!-- Small Item 1 -->
    <div class="md:col-span-2 bg-surface p-lg rounded-xl border border-outline-variant flex gap-lg items-center">
    <div class="w-1/3 aspect-square rounded-lg overflow-hidden">
    <img alt="Nitro cold brew yang menyegarkan" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2hGuOpSLfuo-GcuLifmaFP3ISa3egPHYvABQarXJW02lB3C7TWVEL0eOtcXJS0MwHYZokoOyPhbCDf8uQtRQoj69VwLWZP15ti9OWptl7Ms_yTdPVhJzPaPJfTDMHfj7YfXnKl2cAnZTK94h5PcyEsvrvtyMlRV-db35DZMQpartL-EihTsfIz1XNrT7p0XG2l0AAoF5_lw7iiVJhGZw9goPJYo8usIuoAvJqxR_CsWhZmc9_UfV0bw">
    </div>
    <div>
    <h3 class="font-headline-md text-headline-md tosca-heading mb-xs">Nitro Cold Brew</h3>
    <p class="font-body-md text-on-surface mb-md">Tekstur selembut beludru dengan sentuhan manis alami.</p>
    <span class="font-bold text-body-lg">Rp 65.000</span>
    </div>
    </div>
    <!-- Small Item 2 -->
    <div class="md:col-span-1 bg-surface p-lg rounded-xl border border-outline-variant">
    <div class="w-full aspect-square rounded-lg overflow-hidden mb-md">
    <img alt="Double espresso klasik" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_d1WGPx6bSI5QrtKzvcQkPcM4I-Qfa1K-zpF5NaeJb95x4WG4WOnoglItlojnJt9VVK5m1nWfM0MGTgB3ZY-W-uqt0NjfWepcXG-4ecEOd93x4pTVcdxYzQaNu6UKdZs9oFdBqyB2-BTBmH-uXgpAZQBB5L-n6q3iE8SWtH4y3e2qmoJYXY-Bu_ne5dSkh0duGnvjef0njiSvHBYLSyeKnShvwNM760Iy6yQ0MQRxgVq_y_TkaXxQzA">
    </div>
    <h3 class="font-label-md text-label-md font-bold tosca-heading">Double Espresso</h3>
    <p class="font-label-sm text-on-surface-variant">Rp 35.000</p>
    </div>
    <!-- Small Item 3 -->
    <div class="md:col-span-1 bg-surface p-lg rounded-xl border border-outline-variant">
    <div class="w-full aspect-square rounded-lg overflow-hidden mb-md">
    <img alt="Tartine alpukat segar" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxWwJBBC03WiMOu5UpZCQ9O2hJQW1o7GifuBga3g8fQwtQikF6UyGhbVoS_9JpO7UPsZGbePW8HKj_95Yt-ZF5l2b6NoUm_7PU7SYv73Wp9p5FRianhRxwBRZQvqCmm5Hkpix122DddZ8p5wj_2evmlHaFYhPxHfwgr4oTxuRBKEEJY-ZVCF9z2cLiWYB08tlLlxoRBy9Vr9oriXhcNILcF89ZZ7iRLMNI4ygEJDxtprl88MOHGkaGQg">
    </div>
    <h3 class="font-label-md text-label-md font-bold tosca-heading">Tartine Alpukat</h3>
    <p class="font-label-sm text-on-surface-variant">Rp 120.000</p>
    </div>
    </div>
    </section>
<!-- Coffee Origins Section -->
<section class="bg-surface-container-low py-2xl" id="tentang-kami-section">
<div class="max-w-7xl mx-auto px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 gap-2xl items-center">
<div>
<span class="text-primary font-label-sm uppercase tracking-widest block mb-xs">Warisan Kami</span>
<h2 class="font-headline-lg text-headline-lg tosca-heading mb-lg">Etika di Setiap Biji Kopi</h2>
<p class="font-body-lg text-body-lg text-on-surface mb-md">Di AK Coffee, kami percaya bahwa cita rasa luar biasa dimulai dari sumbernya. Kami bermitra langsung dengan petani skala kecil di Ethiopia, Kolombia, dan Sumatra untuk memastikan praktik berkelanjutan dan kualitas premium.</p>
<p class="font-body-lg text-body-lg text-on-surface mb-lg">Setiap panen dipilih dengan tangan dan disangrai di fasilitas lokal kami, menjaga profil unik asalnya sambil terus mengeksplorasi batasan rasa tradisional.</p>
<div class="space-y-md">
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">eco</span>
<span class="font-label-md font-bold">100% Asal Organik Bersertifikat</span>
</div>
<div class="flex items-center gap-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">handshake</span>
<span class="font-label-md font-bold">Kemitraan Perdagangan Adil Langsung</span>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-md">
<div class="rounded-xl overflow-hidden h-80 relative group">
<img alt="Biji kopi hijau mentah" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzaHujlFK7dUUZCtZdw6xJ2eVUFl9uEp6KYeW4r_ss0DAsmCnE04nPerIASwYNfnEj6fCsU3-merC_tV-2pZ5l01xAaCHVD1QcFrEp5kTVcDFC0CUIIOOEKp8CtdVRY6nq0JZl2BlPKWMiROnlwOc0KIyh9DjR4_83-MJ73wBrDyZP5mpEZdJ-_znnv1TITogFxUldRZITjKgLMoKxHmQhX3k6UgRKNkxEYEIzc_AHgg3bwFVII1rEOA">
</div>
<div class="rounded-xl overflow-hidden h-80 translate-y-lg relative group">
<img alt="Biji kopi sangrai yang mengkilap" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXBcdKjTXfTajWZ5onA7-sr9D_W0HoUp4d56CSpnfF_v05FG9M7udeRygpYjxvD-k5lwOMQ_Mt5h5VU0-pwmLrJtvgtA3eCslBFSFofLTTRgO2rG2ZuKmYQSSnvE_SySxx_l4NuOc-MjuX6r9zOpqPNg_1xqTG5AqPWzZnh7uilwdQ0jYqNoEWT28E-kjsAA5LuqgB8ZOB8JYl_D7BDCvfjj0K3h6ubuMoblPhGMQXx7cw1XhUxPzCsw">
</div>
</div>
</div>
</div>
</section>
<!-- Why Choose Us -->
<section class="py-2xl bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-margin-desktop">
<div class="text-center mb-2xl">
<span class="text-primary font-label-sm uppercase tracking-widest block mb-xs">Kelebihan Kami</span>
<h2 class="font-headline-lg text-headline-lg tosca-heading">Kenapa Harus AK Coffee?</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-xl"><div class="bg-surface p-lg rounded-2xl border border-outline-variant text-center space-y-md hover:shadow-lg transition-all">
<div class="w-16 h-16 bg-primary-container text-white rounded-full flex items-center justify-center mx-auto">
<span class="material-symbols-outlined text-[32px]">chair</span>
</div>
<h3 class="font-headline-md text-headline-md tosca-heading">Ruang Nyaman</h3>
<p class="font-body-md text-on-surface-variant">Nikmati suasana yang hangat dan tenang, cocok untuk bekerja atau bersantai.</p>
</div>
<div class="bg-surface p-lg rounded-2xl border border-outline-variant text-center space-y-md hover:shadow-lg transition-all">
<div class="w-16 h-16 bg-primary-container text-white rounded-full flex items-center justify-center mx-auto">
<span class="material-symbols-outlined text-[32px]">wifi</span>
</div>
<h3 class="font-headline-md text-headline-md tosca-heading">Koneksi WiFi Cepat</h3>
<p class="font-body-md text-on-surface-variant">Tetap terhubung dengan internet berkecepatan tinggi untuk mendukung produktivitas Anda.</p>
</div>
<div class="bg-surface p-lg rounded-2xl border border-outline-variant text-center space-y-md hover:shadow-lg transition-all">
<div class="w-16 h-16 bg-primary-container text-white rounded-full flex items-center justify-center mx-auto">
<span class="material-symbols-outlined text-[32px]">coffee</span>
</div>
<h3 class="font-headline-md text-headline-md tosca-heading">Kopi Pilihan Berkualitas</h3>
<p class="font-body-md text-on-surface-variant">Kopi yang disajikan adalah kopi pilihan kami yang dipilih dengan baik.</p>
</div></div>
</div>
</section>
<!-- Location Section -->
<section class="relative w-full h-[500px] overflow-hidden flex items-center justify-center mb-2xl" id="lokasi-section">
  <div class="absolute inset-0 z-0">
    <img alt="Interior AK Coffee yang premium" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLu1XZ0Yv8xifvlfWr52S-sJvnJsvk83vi8NvvntlGKtLPvvlsARJjhgYHTPX5qdPh8Z_fSYNZjH5YNrO0LUZHwdNSfs04AHYmSv4XY5kp2LGMTpHPlnJ7wsyZmBMy42E88tNiBkb5UvdtS7n4PzFdFJZsrZV9uR8h75ul0U2E_txDyxxM6uolcfvvzMr1SrpKC7EmmdZp7WLF1r4Zb_1qreh940sKs3gnWw3hTRH6IFIfgKUfvlkrN49ME">
    <div class="absolute inset-0 bg-black/40"></div>
  </div>
  <div class="relative z-10 text-center px-margin-desktop">
    <h2 class="font-display-lg text-display-lg text-white mb-lg">Temukan AK Coffee</h2>
    <p class="font-body-lg text-white/90 mb-xl max-w-2xl mx-auto">Kunjungi ruang kreatif kami dan rasakan pengalaman kopi yang tak terlupakan.</p>
    <a href="{{DATA:SCREEN:SCREEN_22}}" class="inline-block bg-primary-container text-white px-xl py-md rounded-full font-bold hover:shadow-lg transition-all duration-300">
      Temukan Lokasi Kami
    </a>
  </div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest border-t border-outline-variant py-2xl">
<div class="flex flex-col md:flex-row justify-between items-center px-margin-desktop gap-lg max-w-7xl mx-auto">
<div class="text-center md:text-left">
<div class="font-headline-md text-headline-md font-bold text-primary mb-xs">AK Coffee</div>
<p class="font-label-md text-label-md text-on-surface-variant">© 2024 AK Coffee. Hak cipta dilindungi undang-undang.</p>
</div>
<div class="flex flex-wrap justify-center gap-lg">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200 cursor-pointer" href="#">Instagram AK Coffee</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200 cursor-pointer" href="#">Facebook AK Coffee</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200 cursor-pointer" href="#">Twitter AK Coffee</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200 cursor-pointer" href="#">Kebijakan Privasi</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200 cursor-pointer" href="#">Syarat &amp; Ketentuan</a>
</div>
<div class="flex gap-md">
<div class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary-container hover:text-white transition-all cursor-pointer">
<span class="material-symbols-outlined text-[20px]">person</span>
</div>
</div>
</div>
</footer>
<script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    return;
                }
                const target = document.querySelector(targetId);
                if (target) {
                    const offset = 20; // Small offset for breathing room
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>






</body></html>
</template>