<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    appointment: Object,
    patient: Object,
});
</script>

<template>
    <Head title="Appointment" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Appointment
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-4 py-2 ml-5 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('appointments.index')"
                            >
                                Back
                            </Link>
                        </div>
                        <div class="px-4 py-5 sm:px-6">
                            <h3
                                class="text-lg leading-6 font-medium text-gray-900"
                            >
                                Appointment Details
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                View detailed information about the appointment.
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
                                        Appointment ID
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ appointment.id }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Patient Name
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ patient }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-gray-100 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Appointment Date
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ appointment.appointment_date }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Appointment Time
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ appointment.appointment_time }}
                                    </dd>
                                </div>
                                <div
                                    class="bg-gray-100 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"
                                >
                                    <dt
                                        class="text-sm font-medium text-gray-500"
                                    >
                                        Status
                                    </dt>
                                    <dd
                                        class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
                                    >
                                        :
                                        {{ appointment.status }}
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
