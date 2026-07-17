<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

defineOptions({ layout: AdminLayout });

const props = defineProps({
    totalMenus: Number,
    totalAdmins: Number,
    bestSellers: Array
});

const showBestSellers = ref(false);
</script>

<template>
    <Head title="Dashboard Admin" />

    <!-- HAPUS max-w-7xl & mx-auto agar layout mepet ke kiri, gunakan w-full -->
    <div class="w-full space-y-8">
        
        <!-- Welcome Card -->
        <div class="relative overflow-hidden bg-gradient-to-r from-primary/5 via-white to-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200 group">
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/10 rounded-full blur-3xl group-hover:scale-110 transition-transform duration-700"></div>
            <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-800 mb-1 tracking-tight">Selamat Datang, Owner! ☕</h2>
                    <p class="text-gray-500 text-sm md:text-base max-w-xl">Pantau bisnis kopi Anda dari sini. Kelola menu, pantau karyawan, dan atur produk terlaris dalam satu panel.</p>
                </div>
                <Link href="/owner/menu/create" class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-xl font-medium shadow-md shadow-primary/25 hover:shadow-lg hover:scale-105 transition-all duration-200 shrink-0">
                    <span class="material-symbols-outlined" style="font-size: 20px;">add_circle</span>
                    Tambah Menu
                </Link>
            </div>
        </div>

        <!-- Interactive Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Total Menu -->
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-default group relative overflow-hidden">
                <div class="absolute -top-4 -right-4 w-16 h-16 bg-primary/5 rounded-full blur-2xl transition-transform group-hover:scale-150 duration-700"></div>
                <div class="relative z-10 w-14 h-14 shrink-0 bg-primary/10 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <span class="material-symbols-outlined text-primary" style="font-size: 28px;">local_cafe</span>
                </div>
                <div class="relative z-10 flex flex-col">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Total Menu</span>
                    <span class="text-2xl font-bold text-gray-800">{{ props.totalMenus }}</span>
                </div>
            </div>

            <!-- Admin Aktif -->
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-default group relative overflow-hidden">
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-blue-500/5 rounded-full blur-2xl transition-transform group-hover:scale-150 duration-700"></div>
                <div class="relative z-10 w-14 h-14 shrink-0 bg-blue-500/10 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:-rotate-3 transition-all duration-300">
                    <span class="material-symbols-outlined text-blue-500" style="font-size: 28px;">group</span>
                </div>
                <div class="relative z-10 flex flex-col">
                    <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Admin Aktif</span>
                    <span class="text-2xl font-bold text-gray-800">{{ props.totalAdmins }}</span>
                </div>
            </div>

            <!-- Produk Terlaris (TANPA HARGA, HANYA GAMBAR & NAMA) -->
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer group relative overflow-hidden flex flex-col">
                <div class="absolute top-0 right-0 w-24 h-24 bg-green-500/5 rounded-full blur-2xl transition-transform group-hover:scale-125 duration-700"></div>
                
                <div class="relative z-10 flex items-center justify-between mb-4" @click="showBestSellers = !showBestSellers">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 shrink-0 bg-green-500/10 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <span class="material-symbols-outlined text-green-500" style="font-size: 28px;">stars</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Produk Terlaris</span>
                            <span class="text-2xl font-bold text-gray-800">{{ props.bestSellers.length }}</span>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-gray-400 transition-transform duration-300" :class="{'rotate-180': showBestSellers}">expand_more</span>
                </div>

                <!-- SLIDE AREA DENGAN NEON BORDER -->
                <transition 
                    enter-active-class="transition-all duration-500 ease-out" 
                    enter-from-class="max-h-0 opacity-0 -translate-y-4"
                    enter-to-class="max-h-[500px] opacity-100 translate-y-0"
                    leave-active-class="transition-all duration-300 ease-in"
                    leave-from-class="max-h-[500px] opacity-100 translate-y-0"
                    leave-to-class="max-h-0 opacity-0 -translate-y-4"
                >
                    <div v-show="showBestSellers" class="relative z-10 mt-2 w-full rounded-xl neon-container p-[2px]">
                        <div class="neon-border w-full h-full rounded-xl bg-white p-4 shadow-sm border border-transparent">
                            
                            <div v-if="props.bestSellers.length === 0" class="py-4 text-center text-sm text-gray-400">
                                Belum ada produk terlaris. Atur di Menu.
                            </div>

                            <!-- Loop Item: TANPA HARGA, hanya gambar & nama -->
                            <div v-else v-for="(item, index) in props.bestSellers" :key="item.id" 
                                 class="flex items-center gap-4 p-3 bg-gray-50/50 rounded-lg hover:bg-primary/5 transition-all duration-300 border border-transparent hover:border-gray-200 relative">
                                
                                <!-- Garis warna unik di kiri -->
                                <div :class="['absolute inset-y-0 left-0 w-[4px]', ['bg-yellow-400', 'bg-blue-400', 'bg-green-400', 'bg-purple-400'][index]]"></div>
                                
                                <!-- Gambar dan Nama (Flexible dan tidak akan kepotong) -->
                                <div class="flex items-center gap-3 ml-2 flex-1 min-w-0">
                                    <img :src="item.image ? `/storage/${item.image}` : '/default-coffee.jpg'" 
                                         class="w-10 h-10 md:w-12 md:h-12 rounded-lg object-cover border border-gray-100 shrink-0 bg-white shadow-sm" />
                                    <!-- Class truncate mencegah teks panjang memecah layout -->
                                    <span class="font-medium text-gray-700 text-sm md:text-base truncate flex-1">{{ item.name }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </transition>
            </div>

            <!-- Aksi Cepat -->
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer group relative overflow-hidden flex flex-col justify-between min-h-[160px]">
                <div class="absolute top-0 right-0 w-24 h-24 bg-purple-500/5 rounded-full blur-2xl group-hover:scale-125 transition-transform duration-700"></div>
                <div class="relative z-10 flex flex-col gap-3">
                    <span class="text-xs font-bold text-purple-600 uppercase tracking-wide">AKSI CEPAT</span>
                    <div class="flex flex-wrap gap-2">
                        <Link href="/owner/menu" class="text-xs bg-gray-100 hover:bg-primary/10 text-gray-700 hover:text-primary px-3 py-1.5 rounded-full transition-colors border border-transparent hover:border-primary/20">Atur Menu</Link>
                        <Link href="/profile" class="text-xs bg-gray-100 hover:bg-primary/10 text-gray-700 hover:text-primary px-3 py-1.5 rounded-full transition-colors border border-transparent hover:border-primary/20">Edit Profil</Link>
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Akses cepat menu favorit</p>
                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
.neon-container {
    position: relative;
    background: linear-gradient(45deg, #006565, #76d6d5, #008080, #006565);
    background-size: 300% 300%;
    animation: animateBorder 4s linear infinite;
    border-radius: 0.75rem;
}
.neon-border {
    background: #ffffff; 
}
@keyframes animateBorder {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>