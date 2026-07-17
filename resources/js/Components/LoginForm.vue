<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps({
    form: {
        type: Object,
        required: true,
    },
    canResetPassword: {
        type: Boolean,
        default: false,
    },
});

defineEmits(["submit"]);

const showPassword = ref(false);

const togglePassword = () => {
    showPassword.value = !showPassword.value;
};
</script>

<template>
    <main
        class="flex-grow flex items-center justify-center px-margin-mobile md:px-gutter relative overflow-hidden py-lg"
    >
        <!-- Atmospheric Background -->
        <div
            class="absolute top-0 right-0 -z-10 opacity-20 transform translate-x-1/4 -translate-y-1/4"
        >
            <svg
                fill="none"
                height="600"
                viewBox="0 0 200 200"
                width="600"
                xmlns="http://www.w3.org/2000/svg"
            >
                <circle
                    cx="100"
                    cy="100"
                    r="80"
                    stroke="#008080"
                    stroke-dasharray="4 4"
                    stroke-width="0.5"
                />
                <circle
                    cx="100"
                    cy="100"
                    r="60"
                    stroke="#008080"
                    stroke-width="0.5"
                />
            </svg>
        </div>

        <!-- Login Card -->
        <div
            class="login-card bg-surface-container-lowest rounded-lg p-lg md:p-xl w-full max-w-[440px] animate-fade-in transition-all duration-500"
        >
            <!-- Logo -->
            <div class="flex flex-col items-center mb-xl text-center">
                <img
                    src="Ak Coffee.png"
                    alt="AK Coffee Logo"
                    class="w-24 h-24 mb-md rounded-full object-cover"
                />

                <h1 class="font-headline-lg text-headline-lg text-on-surface">
                    Masuk Admin
                </h1>

                <p class="font-body-md text-body-md text-secondary mt-xs">
                    Silakan masuk untuk mengelola artisan coffee Anda.
                </p>
            </div>

            <!-- Form -->
            <form
                class="space-y-lg"
                @submit.prevent="$emit('submit')"
            >
                <!-- Email -->
                <div class="relative flex flex-col group">
                    <label
                        for="email"
                        class="font-label-sm text-label-sm text-secondary mb-xs"
                    >
                        Email
                    </label>

                    <div
                        class="relative bg-surface-container-low rounded-t px-md py-sm border-b border-outline-variant"
                    >
                        <input
                            id="email"
                            type="email"
                            name="email"
                            autocomplete="username"
                            v-model="form.email"
                            class="w-full bg-transparent border-none focus:ring-0 p-0 font-body-md text-body-md text-on-surface placeholder:text-outline"
                            placeholder="Masukkan email"
                        />
                    </div>

                    <p
                        v-if="form.errors.email"
                        class="mt-2 text-sm text-red-500"
                    >
                        {{ form.errors.email }}
                    </p>
                </div>

                <!-- Password -->
                <div class="relative flex flex-col group">
                    <label
                        for="password"
                        class="font-label-sm text-label-sm text-secondary mb-xs"
                    >
                        Password
                    </label>

                    <div
                        class="relative flex items-center bg-surface-container-low rounded-t px-md py-sm border-b border-outline-variant"
                    >
                        <input
                            id="password"
                            :type="showPassword ? 'text' : 'password'"
                            name="password"
                            autocomplete="current-password"
                            v-model="form.password"
                            class="w-full bg-transparent border-none focus:ring-0 p-0 font-body-md text-body-md text-on-surface placeholder:text-outline"
                            placeholder="Masukkan kata sandi"
                        />

                        <button
                            type="button"
                            @click="togglePassword"
                            class="ml-xs flex items-center text-secondary hover:text-primary"
                        >
                            <span class="material-symbols-outlined text-[20px]">
                                {{ showPassword ? 'visibility_off' : 'visibility' }}
                            </span>
                        </button>
                    </div>

                    <p
                        v-if="form.errors.password"
                        class="mt-2 text-sm text-red-500"
                    >
                        {{ form.errors.password }}
                    </p>
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input
                            type="checkbox"
                            v-model="form.remember"
                        />

                        <span class="text-sm text-secondary">
                            Remember Me
                        </span>
                    </label>

                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="text-sm text-primary hover:underline"
                    >
                        Lupa Password?
                    </Link>
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full bg-primary-container text-on-primary-container font-headline-md text-headline-md py-md rounded-lg flex justify-center items-center gap-sm hover:brightness-95 active:scale-[0.98] transition-all disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <span v-if="form.processing">
                        Sedang Masuk...
                    </span>

                    <span v-else>
                        Login Admin
                    </span>
                </button>
            </form>
        </div>
    </main>
</template>