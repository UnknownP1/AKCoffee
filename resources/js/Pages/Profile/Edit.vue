<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

// Gunakan AdminLayout alih-alih AuthenticatedLayout
defineOptions({ layout: AdminLayout });
</script>

<template>
    <Head title="Profil Owner" />

    <div class="max-w-4xl mx-auto py-8 space-y-6">
        <!-- Kartu Update Profile Info -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 sm:p-8">
            <UpdateProfileInformationForm
                :must-verify-email="mustVerifyEmail"
                :status="status"
                class="max-w-xl"
            />
        </div>

        <!-- Kartu Update Password -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 sm:p-8">
            <UpdatePasswordForm class="max-w-xl" />
        </div>

        <!-- Kartu Delete Account -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 sm:p-8">
            <DeleteUserForm class="max-w-xl" />
        </div>
    </div>
</template>