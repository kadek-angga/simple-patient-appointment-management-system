<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    doctor: Object,
});
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
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-4 py-2 ml-5 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('doctors.index')"
                            >
                                Back
                            </Link>
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
