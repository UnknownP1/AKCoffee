<script setup>
import { Head } from '@inertiajs/vue3'

import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'

import Hero from '@/Components/Hero.vue'
import BestSeller from '@/Components/BestSeller.vue'
import CoffeeOrigin from '@/Components/CoffeeOrigin.vue'
import WhyChooseUs from '@/Components/WhyChooseUs.vue'
import Location from '@/Components/Lokasi.vue'
<<<<<<< Updated upstream
=======
import AboutAKCoffee from '@/Components/AboutAKCoffee.vue'

// Terima data bestSellers dari web.php
defineProps({
    bestSellers: Array
})
import { Head } from '@inertiajs/vue3';

>>>>>>> Stashed changes
</script>

<template>  
    <WebsiteLayout>
<<<<<<< Updated upstream
    <Head title="Beranda" />

        <Hero />
        <BestSeller />
        <CoffeeOrigin />
=======
        <Head title="Beranda" />
        <Hero />
        <AboutAKCoffee />
        <CoffeeOrigin />
        <!-- Kirim data bestSellers ke dalam komponen BestSeller -->
        <BestSeller :bestSellers="bestSellers" />
>>>>>>> Stashed changes
        <WhyChooseUs />
        <Location />
    </WebsiteLayout>
</template>