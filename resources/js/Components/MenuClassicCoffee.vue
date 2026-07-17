<script setup>
defineProps({
    items: Array
})
</script>

<template>
    <div class="max-w-7xl mx-auto px-margin-desktop mb-2xl">
        <div class="flex items-center gap-md mb-lg">
            <h2 class="font-headline-lg text-headline-lg text-primary uppercase tracking-widest">Kopi Klasik</h2>
            <div class="flex-grow h-px bg-outline-variant"></div>
        </div>
        
        <div v-if="items && items.length > 0" class="grid grid-cols-1 md:grid-cols-2 gap-x-2xl gap-y-md">
            <div v-for="item in items" :key="item.id" 
                 class="flex justify-between items-center py-4 border-b border-outline-variant hover:bg-surface-container-low px-md rounded-lg transition-colors group cursor-pointer">
                <div>
                    <h4 class="font-body-lg text-body-lg font-bold text-on-surface group-hover:text-primary transition-colors">{{ item.name }}</h4>
                    <!-- Bagian deskripsi di bawah nama item -->
                    <!-- Hapus teks static, ganti dengan variabel -->
                    <p class="font-body-md text-body-md text-secondary">
                        {{ item.description || '-' }}
                    </p>
                </div>
                <span class="font-label-md text-primary font-bold">Rp {{ Number(item.price).toLocaleString('id-ID') }}</span>
            </div>
        </div>
        <div v-else class="bg-gray-50 p-8 text-center rounded-xl border border-dashed border-gray-300 mt-md">
            <p class="text-gray-400">Belum ada menu Kopi Klasik.</p>
        </div>
    </div>
</template>