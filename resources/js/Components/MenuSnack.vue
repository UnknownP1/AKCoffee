<script setup>
defineProps({
    items: Array
})
</script>

<template>
    <div class="max-w-7xl mx-auto px-margin-desktop mb-2xl">
        <div class="flex items-center gap-md mb-lg">
            <h2 class="font-headline-lg text-headline-lg text-primary uppercase tracking-widest">Camilan</h2>
            <div class="flex-grow h-px bg-outline-variant"></div>
        </div>
        
        <div v-if="items && items.length > 0" class="grid grid-cols-2 md:grid-cols-4 gap-lg">
            <div v-for="item in items" :key="item.id" 
                 class="text-center group cursor-pointer">
                <div class="aspect-square rounded-full overflow-hidden mb-md border-4 border-surface-container-high shadow-sm transition-all duration-300 group-hover:border-primary group-hover:scale-105">
                    <img :src="item.image ? `/storage/${item.image}` : '/default-coffee.jpg'" 
                         class="w-full h-full object-cover" />
                </div>
                <h4 class="font-body-lg text-body-lg font-bold text-on-surface group-hover:text-primary transition-colors">{{ item.name }}</h4>
                <!-- Bagian deskripsi di bawah nama item -->
                <!-- Hapus teks static, ganti dengan variabel -->
                <p class="font-body-md text-body-md text-secondary">
                    {{ item.description || '-' }}
                </p>
                <p class="text-label-md text-primary">Rp {{ Number(item.price).toLocaleString('id-ID') }}</p>
            </div>
        </div>
        <div v-else class="bg-gray-50 p-8 text-center rounded-xl border border-dashed border-gray-300 mt-md">
            <p class="text-gray-400">Belum ada menu Camilan.</p>
        </div>
    </div>
</template>