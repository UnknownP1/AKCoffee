<script setup>
import { Head } from '@inertiajs/vue3'

import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'

import Hero from '@/Components/Hero.vue'
import BestSeller from '@/Components/BestSeller.vue'
import AboutAKCoffee from '@/Components/AboutAKCoffee.vue'
import CoffeeOrigin from '@/Components/CoffeeOrigin.vue'
import WhyChooseUs from '@/Components/WhyChooseUs.vue'
import Location from '@/Components/Lokasi.vue'

// Terima data bestSellers dari web.php
defineProps({
    bestSellers: Array
})
</script>

<template>
    <Head title="Beranda" />

    <WebsiteLayout>
        <Hero />

        <AboutAKCoffee />

        <!-- Kirim data bestSellers ke dalam komponen BestSeller -->
        <BestSeller :bestSellers="bestSellers" />

        <CoffeeOrigin />

        <WhyChooseUs />

        <Location />
    </WebsiteLayout>
</template>