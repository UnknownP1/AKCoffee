<template>
    <header
        class="w-full top-0 border-b border-outline-variant bg-surface sticky z-50"
    >
        <nav
            class="flex justify-between items-center px-lg py-md w-full max-w-7xl mx-auto"
        >
            <div class="flex items-center gap-xs">
                <div
                    class="font-headline-md text-headline-md font-bold text-primary"
                >
                    AK Coffee
                </div>
            </div>
            <div class="hidden md:flex items-center gap-lg">
                <a
                    class="text-secondary hover:text-primary transition-colors cursor-pointer font-label-md text-label-md"
                    href="/"
                    >Beranda</a
                >
                <a
                    class="text-secondary hover:text-primary transition-colors cursor-pointer font-label-md text-label-md"
                    href="/menu"
                    >Menu</a
                >
                <a
                    class="text-primary font-bold border-b-2 border-primary cursor-pointer font-label-md text-label-md"
                    href="#"
                    >Admin</a
                >
            </div>
            <div class="flex items-center gap-md">
                <span
                    class="material-symbols-outlined text-secondary cursor-pointer hover:text-primary transition-colors"
                    data-icon="help"
                    >help</span
                >
                <span
                    class="material-symbols-outlined text-secondary cursor-pointer hover:text-primary transition-colors"
                    data-icon="info"
                    >info</span
                >
            </div>
        </nav>
    </header>
</template>
