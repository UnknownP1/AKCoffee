<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();

// cek apakah url saat ini cocok dengan path yang dikasih
const isActive = (path) => {
    if (path === "/") {
        return page.url === "/";
    }
    return page.url.startsWith(path);
};
</script>

<template>
<<<<<<< Updated upstream
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 w-max">
=======
    <!-- Wrapper Animasi -->
    <div
        class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 w-max transition-all duration-500 ease-in-out transform"
        :class="[
            showNavbar
                ? 'translate-y-0 opacity-100'
                : 'translate-y-24 opacity-0 pointer-events-none'
        ]"
    >
        <!-- Navbar -->
>>>>>>> Stashed changes
        <nav
            class="bg-white/80 backdrop-blur-xl border border-gray-100 shadow-[0_20px_50px_rgba(0,0,0,0.1)] rounded-full px-10 py-4 flex items-center gap-10"
        >
            <!-- Logo -->
        <div
            class="flex items-center justify-center shrink-0"
            aria-label="AK Coffee"
        >
            <img
                src="Ak Coffee.png"
                alt="AK Coffee Logo"
                class="h-12 md:h-14 w-auto object-contain select-none"
                draggable="false"
            />
        </div>

            <!-- Beranda -->
            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/"
                title="Beranda"
            >
                <div
                    :class="[
                        'w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300',
                        isActive('/')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
<<<<<<< Updated upstream
                    <span class="material-symbols-outlined text-[24px]">home</span>
=======
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">
                        home
                    </span>
>>>>>>> Stashed changes
                </div>

                <span
                    :class="[
<<<<<<< Updated upstream
                        'text-[10px] font-bold uppercase tracking-wider',
                        isActive('/') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
=======
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/')
                            ? 'text-[#008080]'
                            : 'text-[#6B7280] group-hover:text-primary'
>>>>>>> Stashed changes
                    ]"
                >
                    BERANDA
                </span>
            </Link>

            <!-- Menu -->
            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/menu"
                title="Menu"
            >
                <div
                    :class="[
                        'w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300',
                        isActive('/menu')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
<<<<<<< Updated upstream
                    <span class="material-symbols-outlined text-[24px]">menu_book</span>
=======
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">
                        menu_book
                    </span>
>>>>>>> Stashed changes
                </div>

                <span
                    :class="[
<<<<<<< Updated upstream
                        'text-[10px] font-bold uppercase tracking-wider',
                        isActive('/menu') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
=======
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/menu')
                            ? 'text-[#008080]'
                            : 'text-[#6B7280] group-hover:text-primary'
>>>>>>> Stashed changes
                    ]"
                >
                    MENU
                </span>
            </Link>

            <!-- Lokasi -->
            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/lokasi"
                title="Lokasi"
            >
                <div
                    :class="[
                        'w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300',
                        isActive('/lokasi')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
<<<<<<< Updated upstream
                    <span class="material-symbols-outlined text-[24px]">location_on</span>
=======
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">
                        location_on
                    </span>
>>>>>>> Stashed changes
                </div>

                <span
                    :class="[
<<<<<<< Updated upstream
                        'text-[10px] font-bold uppercase tracking-wider',
                        isActive('/lokasi') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
=======
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/lokasi')
                            ? 'text-[#008080]'
                            : 'text-[#6B7280] group-hover:text-primary'
>>>>>>> Stashed changes
                    ]"
                >
                    LOKASI
                </span>
            </Link>

            <!-- Tentang -->
            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/tentang"
                title="Tentang Kami"
            >
                <div
                    :class="[
                        'w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300',
                        isActive('/tentang')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
<<<<<<< Updated upstream
                    <span class="material-symbols-outlined text-[24px]">info</span>
=======
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">
                        info
                    </span>
>>>>>>> Stashed changes
                </div>

                <span
                    :class="[
<<<<<<< Updated upstream
                        'text-[10px] font-bold uppercase tracking-wider',
                        isActive('/tentang') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
                    ]"
                    >TENTANG</span
                >
            </Link>

            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/login"
                title="Login Admin"
            >
                <div
                    class="w-12 h-12 rounded-full text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary flex items-center justify-center transition-all duration-300"
                >
                    <span class="material-symbols-outlined text-[24px]">person</span>
                </div>
                <span
                    class="text-[10px] font-bold text-[#6B7280] group-hover:text-primary uppercase tracking-wider"
                    >LOGIN</span
=======
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/tentang')
                            ? 'text-[#008080]'
                            : 'text-[#6B7280] group-hover:text-primary'
                    ]"
>>>>>>> Stashed changes
                >
                    TENTANG
                </span>
            </Link>
        </nav>
    </div>
</template>