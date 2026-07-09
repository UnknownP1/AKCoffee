<script setup>

import OwnerLayout from '@/Layouts/OwnerLayout.vue'

</script>


<template>

    <OwnerLayout>


        <div class="max-w-3xl">


            <!-- Header -->

            <div class="mb-6">

                <h1 class="text-2xl font-semibold text-gray-800">
                    Tambah Menu
                </h1>


                <p class="text-sm text-gray-500">
                    Tambahkan menu baru untuk AKCoffee
                </p>

            </div>




            <!-- Form Card -->

            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">


                <form class="space-y-6">



                    <!-- Image -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Gambar Menu
                        </label>


                        <input
                            type="file"
                            class="block w-full text-sm text-gray-600
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-md file:border-0
                            file:text-sm file:font-medium
                            file:bg-gray-100 file:text-gray-700
                            hover:file:bg-gray-200"
                        />


                    </div>





                    <!-- Name -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Nama Menu
                        </label>


                        <input
                            type="text"
                            placeholder="Contoh: Caffe Latte"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        />


                    </div>





                    <!-- Category -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Kategori
                        </label>


                        <select
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        >

                            <option>
                                Coffee
                            </option>


                            <option>
                                Non Coffee
                            </option>


                            <option>
                                Snack
                            </option>


                        </select>


                    </div>





                    <!-- Price -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Harga
                        </label>


                        <input
                            type="number"
                            placeholder="15000"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        />


                    </div>





                    <!-- Description -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Deskripsi
                        </label>


                        <textarea
                            rows="4"
                            placeholder="Deskripsi menu..."
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        ></textarea>


                    </div>





                    <!-- Status -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Status
                        </label>


                        <select
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        >

                            <option>
                                Aktif
                            </option>


                            <option>
                                Tidak Aktif
                            </option>


                        </select>


                    </div>





                    <!-- Button -->

                    <div class="flex justify-end gap-3 pt-4">


                        <button
                            type="button"
                            class="px-4 py-2 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50"
                        >

                            Cancel

                        </button>



                        <button
                            type="submit"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
                        >

                            Simpan

                        </button>


                    </div>




                </form>


            </div>



        </div>



    </OwnerLayout>


</template>