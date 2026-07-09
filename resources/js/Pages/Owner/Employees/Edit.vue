<script setup>

import OwnerLayout from '@/Layouts/OwnerLayout.vue'


const employee = {
    name: 'Ahmad',
    email: 'ahmad@akcoffee.com',
    role: 'Admin'
}

</script>



<template>

    <OwnerLayout>


        <div class="max-w-2xl">


            <!-- Header -->

            <div class="mb-6">

                <h1 class="text-2xl font-semibold text-gray-800">
                    Edit Karyawan
                </h1>


                <p class="text-sm text-gray-500">
                    Perbarui informasi akun karyawan
                </p>

            </div>




            <!-- Form Card -->

            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">


                <form class="space-y-5">


                    <!-- Name -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Nama
                        </label>


                        <input
                            type="text"
                            v-model="employee.name"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        />

                    </div>




                    <!-- Email -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>


                        <input
                            type="email"
                            v-model="employee.email"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        />

                    </div>




                    <!-- Password -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Password Baru
                        </label>


                        <input
                            type="password"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Kosongkan jika tidak ingin mengganti password"
                        />

                    </div>




                    <!-- Role -->

                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Role
                        </label>


                        <select
                            v-model="employee.role"
                            class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        >

                            <option value="admin">
                                Admin
                            </option>


                        </select>


                    </div>




                    <!-- Action -->

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
                            Update
                        </button>


                    </div>


                </form>


            </div>


        </div>


    </OwnerLayout>


</template>