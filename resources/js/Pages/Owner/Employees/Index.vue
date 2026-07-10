<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });

const employees = [
    {
        id: 1,
        name: 'Ahmad',
        email: 'ahmad@akcoffee.com',
        role: 'Admin'
    }   ,
    {
        id: 2,
        name: 'Budi',
        email: 'budi@akcoffee.com',
        role: 'Admin'
    }
]

const deleteMenu = (id) => {
    if (confirm('Apakah kamu yakin ingin menghapus menu ini?')) {
        useForm().delete(route('owner.menu.destroy', id));
    }
};

</script>


<template>
<!-- Header -->
        <div class="flex justify-between items-center mb-6">

            <div>
                <h1 class="text-2xl font-semibold text-gray-800">
                    Karyawan
                </h1>

                <p class="text-sm text-gray-500">
                    Kelola akun karyawan AKCoffee
                </p>
            </div>


            <button
                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
            >
                Tambah Karyawan
            </button>

        </div>



        <!-- Table Card -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">


            <table class="w-full text-sm text-left">


                <thead class="bg-gray-50 border-b">

                    <tr>

                        <th class="px-6 py-3 font-medium text-gray-600">
                            Nama
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Email
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600">
                            Role
                        </th>


                        <th class="px-6 py-3 font-medium text-gray-600 text-right">
                            Action
                        </th>

                    </tr>

                </thead>



                <tbody>


                    <tr
                        v-for="employee in employees"
                        :key="employee.id"
                        class="border-b last:border-none"
                    >


                        <td class="px-6 py-4 text-gray-800">
                            {{ employee.name }}
                        </td>


                        <td class="px-6 py-4 text-gray-600">
                            {{ employee.email }}
                        </td>


                        <td class="px-6 py-4">

                            <span
                                class="px-3 py-1 text-xs rounded-full bg-indigo-100 text-indigo-700"
                            >
                                {{ employee.role }}
                            </span>

                        </td>


                        <td class="px-6 py-4 text-right space-x-2">


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
</template>