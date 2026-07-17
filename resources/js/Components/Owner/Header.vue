<script setup>
import { ref } from 'vue'

const dropdownOpen = ref(false)

const toggleDropdown = () => {
    dropdownOpen.value = !dropdownOpen.value
}
</script>

<template>
    <header class="bg-white border-b border-gray-200">
        <div class="flex items-center justify-between px-6 py-4">

            <!-- Brand -->
            <div>
                <h1 class="text-xl font-semibold text-gray-800">
                    AKCoffee
                </h1>

                <p class="text-sm text-gray-500">
                    Owner Dashboard
                </p>
            </div>


            <!-- Profile Dropdown -->
            <div class="relative">

                <button
                    @click="toggleDropdown"
                    class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900 focus:outline-none"
                >

                    <span>
                        Faris
                    </span>


                    <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"
                        />
                    </svg>

                </button>


                <!-- Dropdown -->
                <div
                    v-if="dropdownOpen"
                    class="absolute right-0 mt-2 w-48 rounded-md bg-white shadow-lg border border-gray-200 overflow-hidden"
                >

                    <div class="px-4 py-3 border-b border-gray-100">

                        <p class="text-sm font-medium text-gray-800">
                            Faris
                        </p>

                        <p class="text-xs text-gray-500">
                            Owner
                        </p>

                    </div>


                    <button
                        class="w-full text-left px-4 py-2 text-sm text-gray-600 hover:bg-gray-100"
                    >
                        Logout
                    </button>

                </div>

            </div>

        </div>
    </header>
</template>