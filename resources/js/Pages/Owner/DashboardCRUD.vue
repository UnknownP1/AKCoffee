<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });
</script>

<template>
    <Head title="Dashboard Admin" />

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-1">Selamat Datang di Panel Owner AK Coffee!</h2>
        <p class="text-gray-500">Gunakan menu sidebar di sebelah kiri untuk mengelola Menu Kopi dan Karyawan Admin.</p>
    </div>

    <!-- Grid Flexbox Responsif -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        
        <!-- Card Menu -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center gap-4">
            <!-- Ikon dipaksa kotak 14x14, shrink-0 mencegahnya melebar -->
            <div class="w-14 h-14 shrink-0 bg-primary/10 rounded-xl flex items-center justify-center">
                <span class="material-symbols-outlined text-3xl text-primary">local_cafe</span>
            </div>
            <div class="flex flex-col">
                <p class="text-sm text-gray-500 font-medium">Total Menu</p>
                <p class="text-2xl font-bold text-gray-800">0</p>
            </div>
        </div>

        <!-- Card Karyawan -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center gap-4">
            <div class="w-14 h-14 shrink-0 bg-blue-500/10 rounded-xl flex items-center justify-center">
                <span class="material-symbols-outlined text-3xl text-blue-500">group</span>
            </div>
            <div class="flex flex-col">
                <p class="text-sm text-gray-500 font-medium">Admin Aktif</p>
                <p class="text-2xl font-bold text-gray-800">0</p>
            </div>
        </div>

        <!-- Card Status -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center gap-4">
            <div class="w-14 h-14 shrink-0 bg-green-500/10 rounded-xl flex items-center justify-center">
                <span class="material-symbols-outlined text-3xl text-green-500">check_circle</span>
            </div>
            <div class="flex flex-col">
                <p class="text-sm text-gray-500 font-medium">Status Sistem</p>
                <p class="text-2xl font-bold text-gray-800">Online</p>
            </div>
        </div>

    </div>
</template>