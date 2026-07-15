<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref, onMounted, onUnmounted } from "vue";

const page = usePage();
const showNavbar = ref(true);
let lastScrollY = 0;

// Cek apakah url saat ini cocok dengan path yang dikasih
const isActive = (path) => {
    if (path === "/") {
        return page.url === "/";
    }
    return page.url.startsWith(path);
};

// Logika Scroll (Hide on scroll down, Show on scroll up)
const handleScroll = () => {
    const currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY) {
        // Scroll ke bawah -> Hilang
        showNavbar.value = false;
    } else {
        // Scroll ke atas -> Muncul
        showNavbar.value = true;
    }
    lastScrollY = currentScrollY;
};

onMounted(() => {
    // Simpan posisi scroll awal
    lastScrollY = window.scrollY;
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
    <!-- 
      WRAPPER ANIMASI:
      Menggunakan transition-all & ease-in-out agar gerakan muncul/hilang terasa sangat halus (meluncur).
      pointer-events-none mencegah tombol diklik saat navbar sedang dalam transisi hilang.
    -->
    <div
        class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 w-max transition-all duration-500 ease-in-out transform"
        :class="[
            showNavbar 
                ? 'translate-y-0 opacity-100' 
                : 'translate-y-24 opacity-0 pointer-events-none'
        ]"
    >
        <!-- NAVBAR UTAMA (Responsif: Gap dan padding mengecil di Mobile) -->
        <nav
            class="bg-white/90 backdrop-blur-xl border border-gray-100 shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] rounded-full px-6 md:px-10 py-4 flex items-center gap-6 md:gap-10 hover:shadow-[0_10px_50px_-10px_rgba(0,128,128,0.2)] transition-shadow duration-300"
        >
            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/"
                title="Beranda"
            >
                <div
                    :class="[
                        'w-11 h-11 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 active:scale-95 group-hover:scale-105',
                        isActive('/')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">home</span>
                </div>
                <span
                    :class="[
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
                    ]"
                    >BERANDA</span
                >
            </Link>

            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/menu"
                title="Menu"
            >
                <div
                    :class="[
                        'w-11 h-11 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 active:scale-95 group-hover:scale-105',
                        isActive('/menu')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">menu_book</span>
                </div>
                <span
                    :class="[
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/menu') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
                    ]"
                    >MENU</span
                >
            </Link>

            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/lokasi"
                title="Lokasi"
            >
                <div
                    :class="[
                        'w-11 h-11 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 active:scale-95 group-hover:scale-105',
                        isActive('/lokasi')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">location_on</span>
                </div>
                <span
                    :class="[
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
                        isActive('/lokasi') ? 'text-[#008080]' : 'text-[#6B7280] group-hover:text-primary'
                    ]"
                    >LOKASI</span
                >
            </Link>

            <Link
                class="flex flex-col items-center justify-center gap-1 group"
                href="/tentang"
                title="Tentang Kami"
            >
                <div
                    :class="[
                        'w-11 h-11 md:w-12 md:h-12 rounded-full flex items-center justify-center transition-all duration-300 active:scale-95 group-hover:scale-105',
                        isActive('/tentang')
                            ? 'bg-[#008080] text-white shadow-[0_0_20px_rgba(0,128,128,0.4)]'
                            : 'text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary'
                    ]"
                >
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">info</span>
                </div>
                <span
                    :class="[
                        'text-[10px] font-bold uppercase tracking-wider transition-colors duration-300',
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
                    class="w-11 h-11 md:w-12 md:h-12 rounded-full text-[#6B7280] group-hover:bg-primary/5 group-hover:text-primary flex items-center justify-center transition-all duration-300 active:scale-95"
                >
                    <span class="material-symbols-outlined text-[22px] md:text-[24px]">person</span>
                </div>
                <span
                    class="text-[10px] font-bold text-[#6B7280] group-hover:text-primary uppercase tracking-wider transition-colors duration-300"
                    >LOGIN</span
                >
            </Link>
        </nav>
    </div>
</template>