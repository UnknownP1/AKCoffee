<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="fixed bottom-8 left-1/2 z-50 -translate-x-1/2">
        <nav class="flex items-center gap-4 rounded-full bg-white/90 border border-slate-200 px-6 py-4 shadow-2xl backdrop-blur-xl">
            <Link href="/" class="flex flex-col items-center gap-1 text-teal-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-teal-700 text-white shadow">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <span class="text-[10px] font-semibold">BERANDA</span>
            </Link>

            <a href="#menu-section" class="flex flex-col items-center gap-1 text-slate-600 hover:text-teal-700 transition">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-700">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <span class="text-[10px] font-semibold">MENU</span>
            </a>

            <a href="#lokasi-section" class="flex flex-col items-center gap-1 text-slate-600 hover:text-teal-700 transition">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-700">
                    <span class="material-symbols-outlined">place</span>
                </div>
                <span class="text-[10px] font-semibold">LOKASI</span>
            </a>

            <a href="#tentang-kami-section" class="flex flex-col items-center gap-1 text-slate-600 hover:text-teal-700 transition">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-slate-700">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <span class="text-[10px] font-semibold">TENTANG</span>
            </a>
        </nav>
    </div>
</template>
