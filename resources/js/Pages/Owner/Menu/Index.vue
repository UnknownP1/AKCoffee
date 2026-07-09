<script setup>

import OwnerLayout from '@/Layouts/OwnerLayout.vue'


const menus = [
    {
        id: 1,
        name: 'Caffe Latte',
        category: 'Coffee',
        price: '15.000',
        status: 'Aktif',
        image: null
    },
    {
        id: 2,
        name: 'Americano',
        category: 'Coffee',
        price: '12.000',
        status: 'Aktif',
        image: null
    },
    {
        id: 3,
        name: 'Matcha Latte',
        category: 'Non Coffee',
        price: '18.000',
        status: 'Aktif',
        image: null
    }
]


</script>


<template>

    <OwnerLayout>


        <!-- Header -->

        <div class="flex items-center justify-between mb-6">


            <div>

                <h1 class="text-2xl font-semibold text-gray-800">
                    Menu
                </h1>


                <p class="text-sm text-gray-500">
                    Kelola daftar menu AKCoffee
                </p>

            </div>



            <button
                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
            >
                Tambah Menu
            </button>


        </div>





        <!-- Table Card -->

        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">


            <table class="w-full text-sm text-left">


                <thead class="bg-gray-50 border-b border-gray-200">


                    <tr>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Gambar
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Nama Menu
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Kategori
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Harga
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Status
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600 text-right">
                            Action
                        </th>


                    </tr>


                </thead>





                <tbody>


                    <tr
                        v-for="menu in menus"
                        :key="menu.id"
                        class="border-b border-gray-100 last:border-none"
                    >



                        <!-- Image -->

                        <td class="px-6 py-4">


                            <div
                                class="w-12 h-12 rounded-md bg-gray-100 flex items-center justify-center text-gray-400"
                            >

                                No Image

                            </div>


                        </td>





                        <!-- Name -->

                        <td class="px-6 py-4 text-gray-800 font-medium">

                            {{ menu.name }}

                        </td>





                        <!-- Category -->

                        <td class="px-6 py-4 text-gray-600">

                            {{ menu.category }}

                        </td>





                        <!-- Price -->

                        <td class="px-6 py-4 text-gray-600">

                            Rp {{ menu.price }}

                        </td>





                        <!-- Status -->

                        <td class="px-6 py-4">


                            <span
                                class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700"
                            >

                                {{ menu.status }}

                            </span>


                        </td>





                        <!-- Action -->

                        <td class="px-6 py-4 text-right space-x-3">


                            <button
                                class="text-sm text-indigo-600 hover:text-indigo-800"
                            >

                                Edit

                            </button>



                            <button
                                class="text-sm text-red-600 hover:text-red-800"
                            >

                                Delete

                            </button>


                        </td>




                    </tr>



                </tbody>


            </table>


        </div>



    </OwnerLayout>


</template>