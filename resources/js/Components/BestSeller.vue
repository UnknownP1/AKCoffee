<template>
<section class="py-20 px-6 md:px-10 max-w-7xl mx-auto" id="menu-section">
    <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between mb-12">
        <div>
            <span class="block text-sm font-semibold uppercase tracking-[0.3em] text-teal-700 mb-2">
                Pilihan Kurasi
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
                Produk Terlaris Kami
            </h2>
        </div>

        <a href="#" class="inline-flex items-center gap-2 text-teal-700 font-medium hover:underline">
            Lihat menu lengkap
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-[32px] bg-white border border-slate-200 shadow-sm group">
            <img
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpOlyCEFAELSHreUoQTEpvh7yi1r2xFXjSs6OF1dStfMDZuv8Syp-hhHnysYJrTniuxSG9uWKxcV5hG9noMPXsu9uNXQUc4IZUAmwW94WlwMnlSEXVfiq2qFhphuIn-dEURTVNPETUdFgaAt5T4Fw9m86QMu-KL1mrl5qUom016GfxgxQaPQ_n6MqE3CUuDDT27OZVu2UIDxr_eCiqMQjrYeCG3S1hS6uYiipaglk8YoNR4FgIFAoPvw"
                alt="Seni latte yang indah di cangkir keramik"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
            />
            <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-slate-950/90 to-transparent text-white">
                <h3 class="text-2xl font-semibold mb-3">Latte Khas Kami</h3>
                <p class="text-base opacity-90">Lembut, berkrim, dan seimbang dengan biji kopi sangrai rumah kami.</p>
                <p class="mt-5 text-lg font-bold">Rp 55.000</p>
            </div>
        </div>

        <div class="md:col-span-2 bg-white p-8 rounded-[32px] border border-slate-200 flex flex-col gap-6 justify-between">
            <div class="flex items-start gap-6">
                <div class="w-32 aspect-square rounded-3xl overflow-hidden">
                    <img
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2hGuOpSLfuo-GcuLifmaFP3ISa3egPHYvABQarXJW02lB3C7TWVEL0eOtcXJS0MwHYZokoOyPhbCDf8uQtRQoj69VwLWZP15ti9OWptl7Ms_yTdPVhJzPaPJfTDMHfj7YfXnKl2cAnZTK94h5PcyEsvrvtyMlRV-db35DZMQpartL-EihTsfIz1XNrT7p0XG2l0AAoF5_lw7iiVJhGZw9goPJYo8usIuoAvJqxR_CsWhZmc9_UfV0bw"
                        alt="Nitro cold brew yang menyegarkan"
                        class="w-full h-full object-cover"
                    />
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-slate-900 mb-3">Nitro Cold Brew</h3>
                    <p class="text-base text-slate-600 mb-4">Tekstur selembut beludru dengan sentuhan manis alami.</p>
                    <span class="text-lg font-bold text-slate-900">Rp 65.000</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[32px] border border-slate-200">
            <div class="w-full aspect-square rounded-3xl overflow-hidden mb-6">
                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_d1WGPx6bSI5QrtKzvcQkPcM4I-Qfa1K-zpF5NaeJb95x4WG4WOnoglItlojnJt9VVK5m1WfM0MGTgB3ZY-W-uqt0NjfWepcXG-4ecEOd93x4pTVcdxYzQaNu6UKdZs9oFdBqyB2-BTBmH-uXgpAZQBB5L-n6q3iE8SWtH4y3e2qmoJYXY-Bu_ne5dSkh0duGnvjef0njiSvHBYLSyeKnShvwNM760Iy6yQ0MQRxgVq_y_TkaXxQzA"
                    alt="Double espresso klasik"
                    class="w-full h-full object-cover"
                />
            </div>
            <h3 class="text-xl font-semibold text-slate-900 mb-2">Double Espresso</h3>
            <p class="text-sm text-slate-500">Rp 35.000</p>
        </div>

        <div class="bg-white p-8 rounded-[32px] border border-slate-200">
            <div class="w-full aspect-square rounded-3xl overflow-hidden mb-6">
                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxWwJBBC03WiMOu5UpZCQ9O2hJQW1o7GifuBga3g8fQwtQikF6UyGhbVoS_9JpO7UPsZGbePW8HKj_95Yt-ZF5l2b6NoUm_7PU7SYv73Wp9p5FRianhRxwBRZQvqCmm5Hkpix122DddZ8p5wj_2evmlHaFYhPxHfwgr4oTxuRBKEEJY-ZVCF9z2cLiWYB08tlLlxoRBy9Vr9oriXhcNILcF89ZZ7iRLMNI4ygEJDxtprl88MOHGkaGQg"
                    alt="Tartine alpukat segar"
                    class="w-full h-full object-cover"
                />
            </div>
            <h3 class="text-xl font-semibold text-slate-900 mb-2">Tartine Alpukat</h3>
            <p class="text-sm text-slate-500">Rp 120.000</p>
        </div>
    </div>
</section>
</template>
