<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
// import BreezeTextArea from "@/Components/Textarea.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    first_name: "",
    last_name: "",
    email: "",
    gender: "",
    date_of_birth: "",
    address: "",
    phone_number: "",
});
const submit = () => {
    form.post(route("patients.store"));
};
</script>
<template>
    <Head title="Patient" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Adding Patient
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('patients.index')"
                            >
                                Back
                            </Link>
                        </div>
                        <form @submit.prevent="submit">
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2
                                        class="text-base font-semibold leading-7 text-gray-900"
                                    >
                                        Personal Information
                                    </h2>
                                    <p
                                        class="mt-1 text-sm leading-6 text-gray-600"
                                    >
                                        Fill the patient's personal information
                                        below.
                                    </p>

                                    <div
                                        class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                                    >
                                        <div class="sm:col-span-3">
                                            <label
                                                for="first-name"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >First name</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="text"
                                                    name="first-name"
                                                    id="first-name"
                                                    autocomplete="given-name"
                                                    v-model="form.first_name"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="
                                                        form.errors.first_name
                                                    "
                                                >
                                                    {{ form.errors.first_name }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label
                                                for="last-name"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Last name</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="text"
                                                    name="last-name"
                                                    id="last-name"
                                                    autocomplete="family-name"
                                                    v-model="form.last_name"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="form.errors.last_name"
                                                >
                                                    {{ form.errors.last_name }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <label
                                                for="email"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Email address</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    id="email"
                                                    name="email"
                                                    type="email"
                                                    autocomplete="email"
                                                    v-model="form.email"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="form.errors.email"
                                                >
                                                    {{ form.errors.email }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label
                                                for="country"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Gender</label
                                            >
                                            <div class="mt-2">
                                                <select
                                                    id="gender"
                                                    name="gender"
                                                    v-model="form.gender"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                                >
                                                    <option
                                                        value=""
                                                        selected
                                                        disabled
                                                    >
                                                        Choose gender
                                                    </option>
                                                    <option value="Male">
                                                        Male
                                                    </option>
                                                    <option value="Female">
                                                        Female
                                                    </option>
                                                </select>
                                                <span
                                                    className="text-red-600"
                                                    v-if="form.errors.gender"
                                                >
                                                    {{ form.errors.gender }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label
                                                for="date"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Date of Birth</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="date"
                                                    name="date"
                                                    id="date"
                                                    autocomplete="date"
                                                    v-model="form.date_of_birth"
                                                    class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="
                                                        form.errors
                                                            .date_of_birth
                                                    "
                                                >
                                                    {{
                                                        form.errors
                                                            .date_of_birth
                                                    }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label
                                                for="address"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Address</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="text"
                                                    name="address"
                                                    id="address"
                                                    autocomplete="address"
                                                    v-model="form.address"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="form.errors.address"
                                                >
                                                    {{ form.errors.address }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-span-full">
                                            <label
                                                for="phone_number"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Phone Number</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="text"
                                                    name="phone_number"
                                                    id="phone_number"
                                                    autocomplete="phone_number"
                                                    v-model="form.phone_number"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="
                                                        form.errors.phone_number
                                                    "
                                                >
                                                    {{
                                                        form.errors.phone_number
                                                    }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-6 flex items-center justify-end gap-x-6"
                            >
                                <Link
                                    type="button"
                                    class="text-sm font-semibold leading-6 text-gray-900"
                                    :href="route('patients.index')"
                                >
                                    Cancel
                                </Link>
                                <button
                                    type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
