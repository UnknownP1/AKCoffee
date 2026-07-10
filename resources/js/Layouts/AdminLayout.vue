<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const user = usePage().props.auth.user;
const url = usePage().url;
const showMobileMenu = ref(false);

const isActive = (path) => url.startsWith(path);
</script>

<template>
    <div class="min-h-screen bg-gray-50 flex flex-col md:flex-row relative">
        <!-- Mobile Overlay -->
        <div v-if="showMobileMenu" @click="showMobileMenu = false" class="fixed inset-0 bg-black/50 z-40 md:hidden"></div>

        <!-- Sidebar -->
        <aside :class="['fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out', showMobileMenu ? 'translate-x-0' : '-translate-x-full', 'md:translate-x-0 md:static md:flex md:flex-col']">
            <div class="h-16 flex items-center px-6 border-b border-gray-200 shrink-0">
                <h1 class="text-xl font-bold text-primary">AK Coffee Admin</h1>
            </div>
            
            <nav class="p-4 space-y-1 flex-1 overflow-y-auto">
                <Link href="/dashboard" :class="['flex items-center gap-3 px-4 py-2.5 rounded-lg transition-colors', isActive('/dashboard') ? 'bg-primary/10 text-primary font-medium' : 'text-gray-600 hover:bg-gray-100']">
                    <!-- Kotak ikon ukuran tetap 8x8 -->
                    <div :class="['w-8 h-8 shrink-0 flex items-center justify-center rounded-lg', isActive('/dashboard') ? 'text-primary' : 'text-gray-500']">
                        <span class="material-symbols-outlined text-2xl">dashboard</span>
                    </div>
                    <span>Dashboard</span>
                </Link>

                <Link href="/owner/menu" :class="['flex items-center gap-3 px-4 py-2.5 rounded-lg transition-colors', isActive('/owner/menu') ? 'bg-primary/10 text-primary font-medium' : 'text-gray-600 hover:bg-gray-100']">
                    <div :class="['w-8 h-8 shrink-0 flex items-center justify-center rounded-lg', isActive('/owner/menu') ? 'text-primary' : 'text-gray-500']">
                        <span class="material-symbols-outlined text-2xl">local_cafe</span>
                    </div>
                    <span>Manajemen Menu</span>
                </Link>

                <Link href="/owner/employees" :class="['flex items-center gap-3 px-4 py-2.5 rounded-lg transition-colors', isActive('/owner/employees') ? 'bg-primary/10 text-primary font-medium' : 'text-gray-600 hover:bg-gray-100']">
                    <div :class="['w-8 h-8 shrink-0 flex items-center justify-center rounded-lg', isActive('/owner/employees') ? 'text-primary' : 'text-gray-500']">
                        <span class="material-symbols-outlined text-2xl">people</span>
                    </div>
                    <span>Karyawan Admin</span>
                </Link>
            </nav>

            <div class="p-4 border-t border-gray-200 shrink-0 hidden md:block">
                <div class="flex items-center gap-3 text-sm text-gray-600">
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 shrink-0">
                        <span class="material-symbols-outlined text-[16px]">person</span>
                    </div>
                    <div class="truncate">
                        <p class="font-medium text-gray-800 truncate">{{ user?.name }}</p>
                        <p class="text-xs text-gray-400">Owner</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Konten Utama -->
        <div class="flex-1 md:ml-64 flex flex-col min-h-screen">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4 md:px-8 sticky top-0 z-30 shrink-0">
                <div class="flex items-center gap-4">
                    <button @click="showMobileMenu = !showMobileMenu" class="p-2 -ml-2 rounded-md text-gray-600 hover:bg-gray-100 md:hidden">
                        <span class="material-symbols-outlined text-[24px]">menu</span>
                    </button>
                    <span class="text-lg font-semibold text-gray-800 hidden md:block">Owner Panel</span>
                </div>
                <div class="flex items-center gap-2 md:gap-4">
                    <Link href="/" class="flex items-center gap-1 px-2 py-1.5 rounded-md text-gray-600 hover:bg-gray-100 transition-colors" title="Kembali ke Beranda">
                        <span class="material-symbols-outlined text-[22px]">home</span>
                        <span class="hidden md:inline-block text-sm font-medium">Beranda</span>
                    </Link>
                    <Link href="/logout" method="post" as="button" class="text-sm font-medium text-red-500 hover:text-red-700 transition-colors px-2 py-1.5">
                        Logout
                    </Link>
                </div>
            </header>

            <main class="flex-1 p-4 md:p-8">
                <slot />
            </main>
        </div>
    </div>
</template>