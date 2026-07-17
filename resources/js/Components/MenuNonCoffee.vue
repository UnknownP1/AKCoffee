<script setup>
defineProps({
    items: Array
})
</script>

<template>
    <div class="max-w-7xl mx-auto px-margin-desktop mb-2xl">
        <div class="flex items-center gap-md mb-lg">
            <h2 class="font-headline-lg text-headline-lg text-primary uppercase tracking-widest">Non-Kopi</h2>
            <div class="flex-grow h-px bg-outline-variant"></div>
        </div>
        
        <div v-if="items && items.length > 0" class="grid grid-cols-1 md:grid-cols-2 gap-lg">
            <div v-for="item in items" :key="item.id" 
                 class="menu-card-hover flex bg-surface border border-outline-variant rounded-2xl overflow-hidden">
                <div class="w-1/3 overflow-hidden shrink-0">
                    <img :src="item.image ? `/storage/${item.image}` : '/default-coffee.jpg'" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                </div>
                <div class="w-2/3 p-lg flex flex-col justify-center">
                    <h3 class="font-headline-md text-headline-md text-on-surface">{{ item.name }}</h3>
                    <!-- Bagian deskripsi di bawah nama item -->
                    <!-- Hapus teks static, ganti dengan variabel -->
                    <p class="font-body-md text-body-md text-secondary">
                        {{ item.description || '-' }}
                    </p>
                    <span class="font-headline-md text-primary font-bold">Rp {{ Number(item.price).toLocaleString('id-ID') }}</span>
                </div>
            </div>
        </div>
        <div v-else class="bg-gray-50 p-8 text-center rounded-xl border border-dashed border-gray-300 mt-md">
            <p class="text-gray-400">Belum ada menu Non-Kopi.</p>
        </div>
    </div>
</template>