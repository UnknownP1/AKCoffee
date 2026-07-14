<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });

const form = useForm({
    name: '',
    email: '',
    password: ''
});

const submit = () => {
    form.post(route('owner.employees.store'));
};
</script>

<template>
    <Head title="Tambah Karyawan" />
    
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Karyawan Baru</h1>

        <form @submit.prevent="submit" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input v-model="form.name" type="text" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan nama" />
                <div v-if="form.errors.name" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.name }}</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input v-model="form.email" type="email" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="email@akcoffee.com" />
                <div v-if="form.errors.email" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.email }}</div>
            </div>

            <!-- INPUT ROLE DIHAPUS -->

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input v-model="form.password" type="password" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Minimal 8 karakter" />
                <div v-if="form.errors.password" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.password }}</div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <Link href="/owner/employees" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">Batal</Link>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition" :disabled="form.processing">
                    Simpan Karyawan
                </button>
            </div>
        </form>
    </div>
</template>