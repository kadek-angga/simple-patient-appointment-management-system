<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

defineProps({
    doctor: Object,
});

const deleteDoctor = (id) => {
    Inertia.delete(route("doctors.destroy", id));
};
</script>

<template>
    <Head title="Doctor" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Doctor
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex justify-between mb-6">
                            <div class="flex justify-start">
                                <Link
                                    className="px-4 py-2 ml-5 text-white bg-blue-500 rounded-md focus:outline-none"
                                    :href="route('doctors.index')"
                                >
                                    Back
                                </Link>
                            </div>
                            <div class="flex justify-end">
                                <Link
                                    className="px-4 py-2 text-white bg-yellow-500 rounded-md focus:outline-none"
                                    :href="route('doctors.edit', doctor.id)"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"
                                        />
                                    </svg>
                                </Link>
                                <button
                                    className="px-4 py-2 mx-2 text-white bg-red-500 rounded-md focus:outline-none"
                                    @click="deleteDoctor(doctor.id)"
                                    tabIndex="-1"
                                    type="button"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-4 py-5 sm:px-6">
                            <h3
                                class="text-lg leading-6 font-medium text-gray-900"
                            >
                                Doctor Details
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                View detailed information about the doctor.
                            </p>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div
                                    class="bg-gray-100 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        ID
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ doctor.id }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        First Name
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ doctor.first_name }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-gray-100 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Last Name
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ doctor.last_name }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Specialization
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ doctor.specialization }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-gray-100 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Phone Number
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ doctor.phone_number }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Email Address
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ doctor.email }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
