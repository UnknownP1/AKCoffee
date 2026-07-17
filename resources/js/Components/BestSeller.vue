<script setup>
defineProps({
    bestSellers: Array
})
</script>

<template>
    <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop py-2xl">
        
        <!-- Header Section -->
        <div class="flex justify-between items-end mb-lg border-b border-gray-200 pb-4">
            <div>
                <p class="text-primary font-label-sm tracking-widest uppercase mb-1">PILIHAN KURASI</p>
                <h1 class="font-headline-lg text-headline-lg font-bold text-on-surface">Produk Terlaris Kami</h1>
            </div>
            <a href="/menu" class="flex items-center gap-1 text-primary font-label-md hover:underline transition-colors">
                Lihat menu lengkap
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <!-- Grid Produk Terlaris -->
        <div v-if="bestSellers && bestSellers.length > 0" class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
            
            <!-- TERLARIS #1 (KIRI - Gambar Besar) -->
            <div v-if="bestSellers[0]" class="relative h-[400px] md:h-auto rounded-2xl overflow-hidden bg-white border border-outline-variant shadow-sm group">
                <img :src="bestSellers[0].image ? `/storage/${bestSellers[0].image}` : '/default-coffee.jpg'" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                     :alt="bestSellers[0].name" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex flex-col justify-end p-lg text-white">
                    <h2 class="text-2xl font-bold">{{ bestSellers[0].name }}</h2>
                    <!-- Deskripsi Dinamis -->
                    <p class="text-sm opacity-90 mb-2 line-clamp-2">
                        {{ bestSellers[0].description || 'Racikan spesial dari biji kopi pilihan dengan sentuhan khas AK Coffee.' }}
                    </p>
                    <div class="text-lg font-bold">Rp {{ Number(bestSellers[0].price).toLocaleString() }}</div>
                </div>
            </div>

            <!-- SISI KANAN (Stack Vertikal untuk #2, #3, #4) -->
            <div class="flex flex-col gap-gutter">
                
                <!-- TERLARIS #2 -->
                <div v-if="bestSellers[1]" class="flex-1 bg-white rounded-2xl border border-outline-variant shadow-sm p-4 flex gap-4 items-center overflow-hidden relative group hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 shrink-0 rounded-xl overflow-hidden bg-gray-100">
                        <img :src="bestSellers[1].image ? `/storage/${bestSellers[1].image}` : '/default-coffee.jpg'" 
                             class="w-full h-full object-cover" :alt="bestSellers[1].name" />
                    </div>
                    <div class="flex-1">
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">{{ bestSellers[1].name }}</h3>
                        <!-- Deskripsi Dinamis -->
                        <p class="text-body-md text-secondary line-clamp-2">
                            {{ bestSellers[1].description || 'Tekstur lembut dengan sentuhan manis alami yang memanjakan lidah.' }}
                        </p>
                        <div class="text-primary font-bold mt-1">Rp {{ Number(bestSellers[1].price).toLocaleString() }}</div>
                    </div>
                </div>

                <!-- TERLARIS #3 -->
                <div v-if="bestSellers[2]" class="flex-1 bg-white rounded-2xl border border-outline-variant shadow-sm p-4 flex gap-4 items-center overflow-hidden relative group hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 shrink-0 rounded-xl overflow-hidden bg-gray-100">
                        <img :src="bestSellers[2].image ? `/storage/${bestSellers[2].image}` : '/default-coffee.jpg'" 
                             class="w-full h-full object-cover" :alt="bestSellers[2].name" />
                    </div>
                    <div class="flex-1">
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">{{ bestSellers[2].name }}</h3>
                        <!-- Deskripsi Dinamis -->
                        <p class="text-body-md text-secondary line-clamp-2">
                            {{ bestSellers[2].description || 'Klasik dengan cita rasa yang tak lekang waktu dan kualitas premium.' }}
                        </p>
                        <div class="text-primary font-bold mt-1">Rp {{ Number(bestSellers[2].price).toLocaleString() }}</div>
                    </div>
                </div>

                <!-- TERLARIS #4 -->
                <div v-if="bestSellers[3]" class="flex-1 bg-white rounded-2xl border border-outline-variant shadow-sm p-4 flex gap-4 items-center overflow-hidden relative group hover:shadow-md transition-shadow">
                    <div class="w-24 h-24 shrink-0 rounded-xl overflow-hidden bg-gray-100">
                        <img :src="bestSellers[3].image ? `/storage/${bestSellers[3].image}` : '/default-coffee.jpg'" 
                             class="w-full h-full object-cover" :alt="bestSellers[3].name" />
                    </div>
                    <div class="flex-1">
                        <h3 class="font-headline-md text-headline-md font-bold text-on-surface">{{ bestSellers[3].name }}</h3>
                        <!-- Deskripsi Dinamis -->
                        <p class="text-body-md text-secondary line-clamp-2">
                            {{ bestSellers[3].description || 'Paduan sempurna antara tekstur renyah dan rasa yang menggugah selera.' }}
                        </p>
                        <div class="text-primary font-bold mt-1">Rp {{ Number(bestSellers[3].price).toLocaleString() }}</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Fallback jika belum ada data -->
        <div v-else class="bg-gray-50 p-12 text-center rounded-2xl border border-dashed border-gray-300">
            <p class="text-gray-500">Belum ada produk terlaris yang dipilih. Silakan atur di Dashboard Admin.</p>
        </div>
        
    </div>
</template>