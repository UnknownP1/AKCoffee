<script setup>
import { useForm } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'

import LoginHeader from '@/Components/LoginHeaderNavbar.vue'
import LoginForm from '@/Components/LoginForm.vue'
import LoginFooter from '@/Components/LoginFooter.vue'

const props = defineProps({
    canResetPassword: Boolean,
    status: String,
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    })
}
</script>

<template>
    <Head title="Login" />

    <LoginHeader />

    <LoginForm
        :form="form"
        :canResetPassword="canResetPassword"
        @submit="submit"
    />

    <LoginFooter />
</template>