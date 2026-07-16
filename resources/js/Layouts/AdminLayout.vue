<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const user = usePage().props.auth.user;
const url = usePage().url;
const showMobileMenu = ref(false);

const isActive = (path) => url.startsWith(path);
</script>

<template>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white flex flex-col md:flex-row relative">
        
        <div v-if="showMobileMenu" @click="showMobileMenu = false" class="fixed inset-0 bg-black/30 backdrop-blur-sm z-40 md:hidden"></div>

        <aside :class="['fixed inset-y-0 left-0 z-50 w-72 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out shadow-xl shadow-gray-200/50', showMobileMenu ? 'translate-x-0' : '-translate-x-full', 'md:translate-x-0 md:static md:shadow-none']">
            <div class="h-16 flex items-center px-6 border-b border-gray-200/80 bg-white shrink-0">
                <h1 class="text-xl font-bold text-primary tracking-tight">☕ AK Coffee Admin</h1>
            </div>
            
            <nav class="p-4 space-y-2 flex-1 overflow-y-auto pt-6">
                <Link href="/dashboard" :class="['group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200', isActive('/dashboard') ? 'bg-primary/10 text-primary font-semibold shadow-sm shadow-primary/10' : 'text-gray-600 hover:bg-gray-100']">
                    <div :class="['w-10 h-10 shrink-0 flex items-center justify-center rounded-lg', isActive('/dashboard') ? 'bg-primary text-white shadow-md shadow-primary/30' : 'bg-gray-200 text-gray-500 group-hover:bg-gray-300']">
                        <span class="material-symbols-outlined" style="font-size: 24px;">dashboard</span>
                    </div>
                    <span>Dashboard</span>
                </Link>
                <Link href="/owner/menu" :class="['group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200', isActive('/owner/menu') ? 'bg-primary/10 text-primary font-semibold shadow-sm shadow-primary/10' : 'text-gray-600 hover:bg-gray-100']">
                    <div :class="['w-10 h-10 shrink-0 flex items-center justify-center rounded-lg', isActive('/owner/menu') ? 'bg-primary text-white shadow-md shadow-primary/30' : 'bg-gray-200 text-gray-500 group-hover:bg-gray-300']">
                        <span class="material-symbols-outlined" style="font-size: 24px;">local_cafe</span>
                    </div>
                    <span>Manajemen Menu</span>
                </Link>
                <Link href="/owner/employees" :class="['group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200', isActive('/owner/employees') ? 'bg-primary/10 text-primary font-semibold shadow-sm shadow-primary/10' : 'text-gray-600 hover:bg-gray-100']">
                    <div :class="['w-10 h-10 shrink-0 flex items-center justify-center rounded-lg', isActive('/owner/employees') ? 'bg-primary text-white shadow-md shadow-primary/30' : 'bg-gray-200 text-gray-500 group-hover:bg-gray-300']">
                        <span class="material-symbols-outlined" style="font-size: 24px;">people</span>
                    </div>
                    <span>Karyawan Admin</span>
                </Link>
                <Link href="/profile" :class="['group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200', isActive('/profile') ? 'bg-primary/10 text-primary font-semibold shadow-sm shadow-primary/10' : 'text-gray-600 hover:bg-gray-100']">
                    <div :class="['w-10 h-10 shrink-0 flex items-center justify-center rounded-lg', isActive('/profile') ? 'bg-primary text-white shadow-md shadow-primary/30' : 'bg-gray-200 text-gray-500 group-hover:bg-gray-300']">
                        <span class="material-symbols-outlined" style="font-size: 24px;">manage_accounts</span>
                    </div>
                    <span>Profil Saya</span>
                </Link>
            </nav>

            <Link href="/profile" class="p-4 border-t border-gray-200 shrink-0 hidden md:block hover:bg-primary/5 transition-colors duration-200 cursor-pointer group border-l-4 border-transparent hover:border-primary">
                <div class="flex items-center gap-3 text-sm text-gray-600">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary to-teal-500 rounded-full flex items-center justify-center text-white shrink-0 shadow-md shadow-primary/25 transition-transform duration-300 group-hover:scale-105">
                        <span class="material-symbols-outlined" style="font-size: 20px; font-weight: bold;">person</span>
                    </div>
                    <div class="truncate">
                        <p class="font-medium text-gray-800 truncate group-hover:text-primary transition-colors">{{ user?.name || 'Admin' }}</p>
                        <p class="text-xs text-gray-400">Owner Panel</p>
                    </div>
                </div>
            </Link>
        </aside>

        <div class="flex-1 flex flex-col min-h-screen relative">
            <header class="h-16 bg-white/80 backdrop-blur-md border-b border-gray-200 flex items-center justify-between px-4 md:px-8 sticky top-0 z-30 shrink-0 shadow-sm">
                <div class="flex items-center gap-2">
                    <button @click="showMobileMenu = !showMobileMenu" class="p-2 -ml-2 rounded-lg text-gray-600 hover:bg-primary/10 md:hidden transition-colors">
                        <span class="material-symbols-outlined" style="font-size: 24px;">menu</span>
                    </button>
                    <span class="text-lg font-semibold text-gray-800 hidden md:block relative pl-3 border-l-4 border-primary">Owner Panel</span>
                </div>
                <div class="flex items-center gap-2 md:gap-4">
                    <Link href="/" class="flex items-center gap-1 px-3 py-1.5 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors border border-transparent hover:border-gray-200">
                        <span class="material-symbols-outlined" style="font-size: 20px;">home</span>
                        <span class="hidden md:inline-block text-sm font-medium">Beranda</span>
                    </Link>
                    <Link href="/logout" method="post" as="button" class="text-sm font-medium bg-red-50 text-red-500 px-4 py-1.5 rounded-lg hover:bg-red-100 hover:text-red-700 transition-colors border border-red-200">
                        Logout
                    </Link>
                </div>
            </header>

            <!-- MAIN CONTENT: Padding ditambah p-8 md:p-12 agar mepetnya hilang, lega di tengah -->
            <main class="flex-1 p-8 md:p-12 w-full">
                <slot />
            </main>
        </div>
    </div>
</template>