<script setup>
import Header from '@/Components/Owner/Header.vue'
import Sidebar from '@/Components/Owner/Sidebar.vue'
</script>


<template>

    <div class="min-h-screen bg-gray-100">

        <!-- Header -->
        <Header />


        <div class="flex">


            <!-- Sidebar -->
            <Sidebar />


            <!-- Content -->
            <main class="flex-1 p-6">

                <slot />

            </main>


        </div>


    </div>

</template>