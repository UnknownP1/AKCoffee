<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
<section class="relative overflow-hidden py-20" id="lokasi-section">
    <div class="absolute inset-0">
        <img
            src="OuterShop.jpeg"
            alt="Interior AK Coffee yang premium"
            class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 bg-slate-950/60"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-10 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Temukan Kedai AK di Samarinda
        </h2>
        <p class="mx-auto max-w-2xl text-base md:text-lg text-white/90 mb-8">
            Kunjungi ruang kreatif kami dan rasakan pengalaman kopi yang tak terlupakan.
        </p>
        <Link
            href="/lokasi"
            class="inline-flex rounded-full bg-teal-500 px-8 py-3 text-sm font-semibold text-white shadow-lg transition hover:bg-teal-600"
        >
            Temukan Lokasi Kami
        </Link>
    </div>
</section>
</template>
