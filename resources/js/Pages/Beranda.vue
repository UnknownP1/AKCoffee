<script setup>
import { Head } from '@inertiajs/vue3'

import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'

import Hero from '@/Components/Hero.vue'
import BestSeller from '@/Components/BestSeller.vue'
import CoffeeOrigin from '@/Components/CoffeeOrigin.vue'
import WhyChooseUs from '@/Components/WhyChooseUs.vue'
import Location from '@/Components/Lokasi.vue'
</script>

<template>  
    <WebsiteLayout>
    <Head title="Beranda" />

        <Hero />
        <BestSeller />
        <CoffeeOrigin />
        <WhyChooseUs />
        <Location />
    </WebsiteLayout>
</template>