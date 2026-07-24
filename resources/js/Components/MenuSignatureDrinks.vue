<script setup>
defineProps({
    items: Array
})
</script>

<template>
    <div class="max-w-7xl mx-auto px-margin-desktop mb-2xl">
        <div class="flex items-center gap-md mb-lg">
            <h2 class="font-headline-lg text-headline-lg text-primary uppercase tracking-widest">
                Minuman Kopi
            </h2>
            <div class="flex-grow h-px bg-outline-variant"></div>
        </div>

        <div
            v-if="items && items.length > 0"
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg"
        >
            <div
                v-for="item in items"
                :key="item.id"
                class="menu-card-hover group bg-surface-container-lowest border border-outline-variant p-lg rounded-2xl"
            >
                <div class="aspect-square mb-md overflow-hidden rounded-xl">
                    <img
                        :src="item.image ? `/storage/${item.image}` : '/default-coffee.jpg'"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    />
                </div>

                <div class="flex justify-between items-start mb-xs">
                    <h3 class="font-headline-md text-headline-md text-on-surface">
                        {{ item.name }}
                    </h3>

                    <span class="font-label-md text-label-md text-primary font-bold">
                        Rp {{ Number(item.price).toLocaleString('id-ID') }}
                    </span>
                </div>

                <p class="font-body-md text-body-md text-secondary">
                    {{ item.description || '-' }}
                </p>
            </div>
        </div>

        <div
            v-else
            class="bg-gray-50 p-8 text-center rounded-xl border border-dashed border-gray-300 mt-md"
        >
            <p class="text-gray-400">
                Belum ada menu Minuman Kopi.
            </p>
        </div>
    </div>
</template>