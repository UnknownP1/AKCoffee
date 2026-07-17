<script setup>
import { useForm } from '@inertiajs/vue3'
<<<<<<< HEAD
import { Head } from '@inertiajs/vue3'

=======
>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e

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
<<<<<<< HEAD
    <Head title="Login"
=======

>>>>>>> bc03cc860391f658ebbe4b3cb8696c54fa2a930e
    <LoginHeader />

    <LoginForm
        :form="form"
        :canResetPassword="canResetPassword"
        @submit="submit"
    />

    <LoginFooter />

</template>