<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

defineOptions({ layout: AdminLayout });

const props = defineProps({
    menu: Object,
    currentBestSellers: Array
});

// Inisialisasi form dengan data dari props.menu
const form = useForm({
    name: props.menu.name,
    category: props.menu.category,
    price: props.menu.price,
    status: props.menu.status,
    description: props.menu.description || '',
    image: null,
    is_best_seller: Boolean(props.menu.is_best_seller),
    best_seller_order: props.menu.best_seller_order || ''
});

// Preview gambar awal dari database
const imagePreview = ref(props.menu.image ? `/storage/${props.menu.image}` : null);

const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        form.image = file;
        imagePreview.value = URL.createObjectURL(file);
    }
};

const submit = () => {
    // Cek konflik best seller (jika ada)
    if (form.is_best_seller && form.best_seller_order) {
        const conflict = props.currentBestSellers.find(item => 
            item.id !== props.menu.id && 
            String(item.best_seller_order) === String(form.best_seller_order)
        );
        if (conflict) {
            if (!confirm(`⚠️ Konflik Posisi Best Seller!\n\nMenu "${conflict.name}" saat ini menempati urutan ke-${form.best_seller_order}.\n\nApakah Anda yakin ingin menggantikannya? (Menu "${conflict.name}" akan dicopot dari daftar Best Seller).`)) {
                return;
            }
        }
    }
    // Gunakan PUT untuk update data
    form.put(route('owner.menu.update', props.menu.id));
};
</script>

<template>
    <Head title="Edit Menu" />
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-200">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Edit Menu</h1>
            <Link href="/owner/menu" class="text-sm text-gray-500 hover:text-gray-700">Kembali ke Daftar</Link>
        </div>

        <form @submit.prevent="submit" class="space-y-6">
            
            <!-- Nama Menu -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Menu</label>
                <input v-model="form.name" type="text" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring-primary" />
                <div v-if="form.errors.name" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.name }}</div>
            </div>

            <!-- Gambar Menu -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Menu</label>
                <div class="flex items-center gap-4 mb-2">
                    <div v-if="imagePreview" class="w-24 h-24 rounded-lg border border-gray-200 overflow-hidden shrink-0 bg-gray-100">
                        <img :src="imagePreview" class="w-full h-full object-cover" />
                    </div>
                    <input type="file" @input="handleFileChange" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary/10 file:text-primary hover:file:bg-primary/20" accept="image/*" />
                </div>
                <div v-if="form.errors.image" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.image }}</div>
            </div>

            <!-- Kategori & Harga -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kategori Menu</label>
                    <select v-model="form.category" class="w-full rounded-lg border-gray-300 shadow-sm">
                        <option value="">Pilih Kategori</option>
                        <option value="Minuman Khas">Minuman Khas</option>
                        <option value="Kopi Klasik">Kopi Klasik</option>
                        <option value="Non-Kopi">Non-Kopi</option>
                        <option value="Camilan">Camilan</option>
                    </select>
                    <div v-if="form.errors.category" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.category }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Harga (Rupiah)</label>
                    <input v-model="form.price" type="number" class="w-full rounded-lg border-gray-300 shadow-sm" placeholder="15000" />
                    <div v-if="form.errors.price" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.price }}</div>
                </div>
            </div>

            <!-- Deskripsi Opsional -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Menu <span class="text-gray-400 font-normal">(Opsional)</span></label>
                <textarea v-model="form.description" rows="3" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring-primary" placeholder="Tulis deskripsi produk yang menarik..."></textarea>
                <div v-if="form.errors.description" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.description }}</div>
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status Tampilan</label>
                <select v-model="form.status" class="w-full rounded-lg border-gray-300 shadow-sm">
                    <option value="Aktif">Aktif (Tampil di Website)</option>
                    <option value="Tidak Aktif">Tidak Aktif (Sembunyikan dari Website)</option>
                </select>
                <div v-if="form.errors.status" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.status }}</div>
            </div>

            <!-- Best Seller -->
            <div class="border-t pt-4 mt-4">
                <h3 class="font-medium text-gray-800 mb-4">Produk Terlaris (Hero Page)</h3>
                <div class="flex items-center gap-4 flex-wrap">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" v-model="form.is_best_seller" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                        <span class="text-sm text-gray-700">Jadikan Produk Terlaris</span>
                    </label>
                    <div v-if="form.is_best_seller" class="flex items-center gap-2">
                        <label class="text-sm text-gray-700">Urutan ke-</label>
                        <select v-model="form.best_seller_order" class="rounded-lg border-gray-300 shadow-sm text-sm">
                            <option value="">Pilih</option>
                            <option value="1">1 (Gambar Paling Besar)</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div v-if="form.errors.best_seller_order" class="text-sm text-red-600 mt-1 font-medium">⚠️ {{ form.errors.best_seller_order }}</div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <Link href="/owner/menu" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">Batal</Link>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700" :disabled="form.processing">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</template>