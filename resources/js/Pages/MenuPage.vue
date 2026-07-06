<script setup>  
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'


import Header from '@/Components/MenuHeaderLogo.vue'
import Hero from '@/Components/MenuHero.vue'
import MenuQuickNav from '@/Components/MenuQuickNav.vue'
import MenuGrid from '@/Components/MenuGrid.vue'
import MenuSignatureDrinks from '@/Components/MenuSignatureDrinks.vue'
import MenuClassicCoffee from '@/Components/MenuClassicCoffee.vue'
import MenuNonCoffee from '@/Components/MenuNonCoffee.vue'
import MenuSnack from '@/Components/MenuSnack.vue'
import MenuFooter from '@/Components/MenuFooter.vue'
</script>

<template>
        <WebsiteLayout>
        <Header />
        <Hero />
        <MenuQuickNav />
        <MenuGrid />
        <MenuSignatureDrinks />
        <MenuClassicCoffee />
        <MenuNonCoffee />
        <MenuSnack />
        </WebsiteLayout>
</template>