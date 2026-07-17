<script setup>
import { Head } from '@inertiajs/vue3'

import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'

import Hero from '@/Components/Hero.vue'
import BestSeller from '@/Components/BestSeller.vue'
import CoffeeOrigin from '@/Components/CoffeeOrigin.vue'
import WhyChooseUs from '@/Components/WhyChooseUs.vue'
import Location from '@/Components/Lokasi.vue'
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
import AboutAKCoffee from '@/Components/AboutAKCoffee.vue'
=======
>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e

// Terima data bestSellers dari web.php
defineProps({
    bestSellers: Array
})
<<<<<<< HEAD
import { Head } from '@inertiajs/vue3';

>>>>>>> Stashed changes
=======
>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e
</script>

<template>  
    <WebsiteLayout>
<<<<<<< Updated upstream
    <Head title="Beranda" />

        <Hero />
        <!-- Kirim data bestSellers ke dalam komponen BestSeller -->
        <BestSeller :bestSellers="bestSellers" />
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