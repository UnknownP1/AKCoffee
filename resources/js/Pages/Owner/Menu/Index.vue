<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineOptions({ layout: AdminLayout });

const props = defineProps({
    menus: Array
});

const deleteMenu = (id) => {
    if(confirm('Yakin ingin menghapus menu ini? (Gambar juga akan dihapus)')) {
        useForm().delete(route('owner.menu.destroy', id));
    }
};
</script>

<template>
    <Head title="Manajemen Menu" />

    <div>
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Menu</h1>
                <p class="text-sm text-gray-500">Kelola daftar menu AKCoffee</p>
            </div>
            <Link href="/owner/menu/create" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Tambah Menu</Link>
        </div>

        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 font-medium text-gray-600">Gambar</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Nama Menu</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Kategori</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Harga</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Status</th>
                        <th class="px-6 py-3 font-medium text-gray-600 text-right">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="menu in menus" :key="menu.id" class="border-b border-gray-100 last:border-none">
                        <td class="px-6 py-4">
                            <div class="w-12 h-12 rounded-md bg-gray-100 overflow-hidden flex items-center justify-center text-gray-400 border border-gray-200">
                                <img v-if="menu.image" :src="`/storage/${menu.image}`" class="w-full h-full object-cover" />
                                <span v-else class="material-symbols-outlined text-gray-300 text-xl">image_not_supported</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-800 font-medium">{{ menu.name }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ menu.category }}</td>
                        <td class="px-6 py-4 text-gray-600">Rp {{ Number(menu.price).toLocaleString('id-ID') }}</td>
                        <td class="px-6 py-4">
                            <span v-if="menu.status === 'Aktif'" class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full border border-green-200">
                                TAMPIL
                            </span>
                            <span v-else class="px-2 py-1 bg-gray-100 text-gray-500 text-xs font-bold rounded-full border border-gray-200">
                                SEMBUNYI
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right space-x-3">
                            <Link :href="`/owner/menu/${menu.id}/edit`" class="text-sm text-indigo-600 hover:text-indigo-800">Edit</Link>
                            <button @click="deleteMenu(menu.id)" class="text-sm text-red-600 hover:text-red-800">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>