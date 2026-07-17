<script setup>
import { computed } from 'vue'
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue'

import MenuHeaderLogo from '@/Components/MenuHeaderLogo.vue'
import MenuHero from '@/Components/MenuHero.vue'
import MenuQuickNav from '@/Components/MenuQuickNav.vue'
import MenuGrid from '@/Components/MenuGrid.vue'
import MenuSignatureDrinks from '@/Components/MenuSignatureDrinks.vue'
import MenuNonCoffee from '@/Components/MenuNonCoffee.vue'
import MenuSnack from '@/Components/MenuSnack.vue'
<<<<<<< HEAD
<<<<<<< Updated upstream
import MenuFooter from '@/Components/MenuFooter.vue'
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
>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e
</script>

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
import { Head } from '@inertiajs/vue3'

</script>

<template>
<<<<<<< HEAD
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
        
        <div id="kopi">
            <MenuSignatureDrinks :items="signatureDrinks" />
        </div>
=======
    <WebsiteLayout>
        <MenuHeaderLogo />
        <MenuHero />
        <MenuQuickNav />
        <MenuGrid />
        
        <div id="signature">
            <MenuSignatureDrinks :items="signatureDrinks" />
        </div>
        <div id="classic">
            <MenuClassicCoffee :items="classicCoffee" />
        </div>
>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e
        <div id="non-coffee">
            <MenuNonCoffee :items="nonCoffee" />
        </div>
        <div id="snacks">
            <MenuSnack :items="snacks" />
        </div>
    </WebsiteLayout>
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e
</template>