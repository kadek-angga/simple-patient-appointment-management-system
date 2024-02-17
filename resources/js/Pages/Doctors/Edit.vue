<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    doctor: Object,
});

const form = useForm({
    first_name: props.doctor.first_name,
    last_name: props.doctor.last_name,
    specialization: props.doctor.specialization,
    phone_number: props.doctor.phone_number,
    email: props.doctor.email,
});

const submit = () => {
    form.put(route("doctors.update", props.doctor.id));
};
</script>
<template>
    <Head title="Doctor" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Doctor
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('doctors.index')"
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
                                        Use a permanent address where you can
                                        receive mail.
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

                                        <div class="col-span-full">
                                            <label
                                                for="specializations"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Specialization</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="text"
                                                    name="specialization"
                                                    id="specialization"
                                                    autocomplete="specialization"
                                                    v-model="
                                                        form.specialization
                                                    "
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="
                                                        form.errors
                                                            .specialization
                                                    "
                                                >
                                                    {{
                                                        form.errors
                                                            .specialization
                                                    }}
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
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-6 flex items-center justify-end gap-x-6"
                            >
                                <button
                                    type="button"
                                    class="text-sm font-semibold leading-6 text-gray-900"
                                >
                                    Cancel
                                </button>
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
