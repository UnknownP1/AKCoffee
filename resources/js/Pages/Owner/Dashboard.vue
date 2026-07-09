<script setup>
import OwnerLayout from '@/Layouts/OwnerLayout.vue'


const statistics = [
    {
        title: 'Total Menu',
        value: 25,
        description: 'Menu tersedia'
    },
    {
        title: 'Total Karyawan',
        value: 8,
        description: 'Akun aktif'
    },
    {
        title: 'Stock Menipis',
        value: 3,
        description: 'Perlu pengecekan'
    }
]


const activities = [
    {
        title: 'Menu baru ditambahkan',
        time: '10 menit yang lalu'
    },
    {
        title: 'Karyawan baru dibuat',
        time: '1 jam yang lalu'
    },
    {
        title: 'Stock kopi diperbarui',
        time: '2 jam yang lalu'
    }
]

</script>


<template>

    <OwnerLayout>


        <!-- Header Content -->
        <div class="mb-6">

            <h2 class="text-2xl font-semibold text-gray-800">
                Dashboard
            </h2>

            <p class="text-sm text-gray-500">
                Ringkasan sistem AKCoffee
            </p>

        </div>



        <!-- Statistic Card -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


            <div
                v-for="item in statistics"
                :key="item.title"
                class="bg-white rounded-lg shadow-sm border border-gray-200 p-6"
            >

                <p class="text-sm text-gray-500">
                    {{ item.title }}
                </p>


                <h3 class="mt-2 text-3xl font-bold text-gray-800">
                    {{ item.value }}
                </h3>


                <p class="mt-1 text-sm text-gray-500">
                    {{ item.description }}
                </p>


            </div>


        </div>




        <!-- Activity -->
        <div class="mt-8">


            <div class="bg-white rounded-lg shadow-sm border border-gray-200">


                <div class="px-6 py-4 border-b border-gray-200">

                    <h3 class="text-lg font-semibold text-gray-800">
                        Aktivitas Terbaru
                    </h3>

                </div>



                <div class="divide-y divide-gray-100">


                    <div
                        v-for="activity in activities"
                        :key="activity.title"
                        class="px-6 py-4 flex justify-between"
                    >

                        <p class="text-sm text-gray-700">
                            {{ activity.title }}
                        </p>


                        <span class="text-sm text-gray-400">
                            {{ activity.time }}
                        </span>


                    </div>


                </div>


            </div>


        </div>



    </OwnerLayout>


</template>