<script setup>
import { computed } from "vue";
import { Head } from "@inertiajs/vue3";

import WebsiteLayout from "@/Layouts/WebsiteLayout.vue";

import MenuHeaderLogo from "@/Components/MenuHeaderLogo.vue";
import MenuHero from "@/Components/MenuHero.vue";
import MenuQuickNav from "@/Components/MenuQuickNav.vue";
import MenuGrid from "@/Components/MenuGrid.vue";
import MenuSignatureDrinks from "@/Components/MenuSignatureDrinks.vue";
    import MenuNonCoffee from "@/Components/MenuNonCoffee.vue";
import MenuSnack from "@/Components/MenuSnack.vue";

const props = defineProps({
    menus: {
        type: Array,
        default: () => [],
    },
});

// Signature Drinks
const signatureDrinks = computed(() => {
    let items = props.menus.filter(
        (m) => m.category === "Minuman Khas"
    );

    if (items.length === 0) {
        items = props.menus
            .filter((m) => m.category === "Coffee")
            .slice(0, 3);
    }

    return items;
});

// Classic Coffee
const classicCoffee = computed(() => {
    let items = props.menus.filter(
        (m) => m.category === "Kopi Klasik"
    );

    if (items.length === 0) {
        items = props.menus
            .filter((m) => m.category === "Coffee")
            .slice(3);
    }

    return items;
});

// Non Coffee
const nonCoffee = computed(() => {
    let items = props.menus.filter(
        (m) => m.category === "Non-Kopi"
    );

    if (items.length === 0) {
        items = props.menus.filter(
            (m) => m.category === "Non Coffee"
        );
    }

    return items;
});

// Snack
const snacks = computed(() => {
    let items = props.menus.filter(
        (m) => m.category === "Camilan"
    );

    if (items.length === 0) {
        items = props.menus.filter(
            (m) => m.category === "Snack"
        );
    }

    return items;
});
</script>

<template>
    <Head title="Menu" />

    <WebsiteLayout>
        <MenuHeaderLogo />

        <MenuHero />

        <MenuQuickNav />

        <MenuGrid />

        <div id="kopi">
            <MenuSignatureDrinks :items="signatureDrinks" />
        </div>

        <div id="non-coffee">
            <MenuNonCoffee :items="nonCoffee" />
        </div>

        <div id="snacks">
            <MenuSnack :items="snacks" />
        </div>
    </WebsiteLayout>
</template>