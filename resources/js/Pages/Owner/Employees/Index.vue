<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });

const props = defineProps({
    employees: Array
});

const deleteEmployee = (id) => {
    if (confirm('Yakin ingin menghapus karyawan ini?')) {
        useForm().delete(route('owner.employees.destroy', id));
    }
};
</script>

<template>
    <Head title="Manajemen Karyawan" />

    <div class="w-full">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Karyawan Admin</h1>
                <p class="text-sm text-gray-500">Kelola daftar admin yang dapat mengakses panel owner.</p>
            </div>
            <Link href="/owner/employees/create" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                + Tambah Karyawan
            </Link>
        </div>

        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 font-medium text-gray-600">Nama</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Email</th>
                        <!-- KOLOM ROLE DIHAPUS -->
                        <th class="px-6 py-3 font-medium text-gray-600 text-right">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="employee in employees" :key="employee.id" class="border-b border-gray-100 last:border-none">
                        <td class="px-6 py-4 text-gray-800 font-medium">{{ employee.name }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ employee.email }}</td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <Link :href="`/owner/employees/${employee.id}/edit`" class="text-sm text-indigo-600 hover:text-indigo-800">Edit</Link>
                            <button @click="deleteEmployee(employee.id)" class="text-sm text-red-600 hover:text-red-800">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div v-if="employees.length === 0" class="p-8 text-center text-gray-400">
                Belum ada karyawan yang terdaftar.
            </div>
        </div>
    </div>
</template>