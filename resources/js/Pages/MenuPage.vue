<script setup>  
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'


import Header from '@/Components/MenuHeaderLogo.vue'
import Hero from '@/Components/MenuHero.vue'
import MenuQuickNav from '@/Components/MenuQuickNav.vue'
import MenuGrid from '@/Components/MenuGrid.vue'
import MenuSignatureDrinks from '@/Components/MenuSignatureDrinks.vue'
import MenuNonCoffee from '@/Components/MenuNonCoffee.vue'
import MenuSnack from '@/Components/MenuSnack.vue'
<<<<<<< Updated upstream
import MenuFooter from '@/Components/MenuFooter.vue'
</script>

<template>
        <WebsiteLayout>
        <Header />
        <Hero />
=======

const props = defineProps({
    menus: Array
})

// --- LOGIKA HYBRID AMAN UNTUK KATEGORI LAMA DAN BARU ---
const signatureDrinks = computed(() => {
    let items = props.menus.filter(m => m.category === 'Minuman Khas')
    if (items.length === 0) {
        items = props.menus.filter(m => m.category === 'Coffee').slice(0, 3)
    }
    return items
})

const classicCoffee = computed(() => {
    let items = props.menus.filter(m => m.category === 'Kopi Klasik')
    if (items.length === 0) {
        items = props.menus.filter(m => m.category === 'Coffee').slice(3)
    }
    return items
})

const nonCoffee = computed(() => {
    let items = props.menus.filter(m => m.category === 'Non-Kopi')
    if (items.length === 0) {
        items = props.menus.filter(m => m.category === 'Non Coffee')
    }
    return items
})

const snacks = computed(() => {
    let items = props.menus.filter(m => m.category === 'Camilan')
    if (items.length === 0) {
        items = props.menus.filter(m => m.category === 'Snack')
    }
    return items
})
<<<<<<< Updated upstream
import { Head } from '@inertiajs/vue3'
=======
import { Head } from '@inertiajs/vue3';
>>>>>>> Stashed changes

</script>

<template>
    <Head title="Menu" />
    <WebsiteLayout>
    <Head title="Menu" />
        <MenuHeaderLogo />
        <MenuHero />
>>>>>>> Stashed changes
        <MenuQuickNav />
        <MenuGrid />
<<<<<<< Updated upstream
        <MenuSignatureDrinks />
        <MenuClassicCoffee />
        <MenuNonCoffee />
        <MenuSnack />
        </WebsiteLayout>
=======
        
        <div id="k  opi">
            <MenuSignatureDrinks :items="signatureDrinks" />
        </div>
        <div id="non-coffee">
            <MenuNonCoffee :items="nonCoffee" />
        </div>
        <div id="snacks">
            <MenuSnack :items="snacks" />
        </div>
    </WebsiteLayout>
>>>>>>> Stashed changes
</template>