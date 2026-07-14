<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });

const props = defineProps({
    employee: Object
});

const form = useForm({
    name: props.employee.name,
    email: props.employee.email,
    password: '' // Password dikosongkan saat edit
});

const submit = () => {
    form.put(route('owner.employees.update', props.employee.id));
};
</script>

<template>
    <Head title="Edit Karyawan" />
    
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Edit Karyawan</h1>
            <Link href="/owner/employees" class="text-sm text-gray-500 hover:text-gray-700">Kembali</Link>
        </div>

        <form @submit.prevent="submit" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input v-model="form.name" type="text" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                <div v-if="form.errors.name" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.name }}</div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input v-model="form.email" type="email" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                <div v-if="form.errors.email" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.email }}</div>
            </div>

            <!-- INPUT ROLE DIHAPUS -->

            <div class="border-t border-gray-100 pt-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Reset Password <span class="font-normal text-gray-400">(Opsional)</span></label>
                <p class="text-xs text-gray-400 mb-2">Kosongkan jika tidak ingin mengubah password.</p>
                <input v-model="form.password" type="password" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Minimal 8 karakter jika diisi" />
                <div v-if="form.errors.password" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.password }}</div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <Link href="/owner/employees" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">Batal</Link>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition" :disabled="form.processing">
                    Update Karyawan
                </button>
            </div>
        </form>
    </div>
</template>