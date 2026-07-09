<script setup>

import OwnerLayout from '@/Layouts/OwnerLayout.vue'

</script>



<template>

    <OwnerLayout>


        <div class="max-w-2xl">


            <div class="mb-6">

                <h1 class="text-2xl font-semibold text-gray-800">
                    Tambah Karyawan
                </h1>


                <p class="text-sm text-gray-500">
                    Buat akun baru untuk karyawan AKCoffee
                </p>

            </div>




            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">


                <form class="space-y-5">


                    <!-- Name -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Nama
                        </label>


                        <input
                            type="text"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan nama"
                        />

                    </div>




                    <!-- Email -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>


                        <input
                            type="email"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="email@akcoffee.com"
                        />

                    </div>




                    <!-- Password -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>


                        <input
                            type="password"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Password"
                        />

                    </div>




                    <!-- Role -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Role
                        </label>


                        <select
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        >

                            <option>
                                Admin
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