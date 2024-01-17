<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    appointments: Object,
});

const deleteAppointment = (id) => {
    Inertia.delete(route("appointments.destroy", id));
};
</script>
<template>
    <Head title="Appointment" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Appointments
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="relative max-w-sm mt-4 mb-3"></div>

                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none"
                                :href="route('appointments.create')"
                            >
                                Make Appointment
                            </Link>
                        </div>
                        <table className="table-fixed w-full">
                            <thead>
                                <tr className="bg-gray-100">
                                    <!-- <th className="px-4 py-2 w-20">No.</th> -->
                                    <th className="px-4 py-2 w-20">ID</th>
                                    <th className="px-4 py-2">Patient Name</th>
                                    <th className="px-4 py-2">
                                        Appointment Date
                                    </th>
                                    <th className="px-4 py-2">
                                        Appointment Time
                                    </th>
                                    <th className="px-4 py-2">Status</th>
                                    <th className="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="appointment in appointments"
                                    :key="appointment.id"
                                >
                                    <td className="border px-4 py-2">
                                        {{ appointment.id }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        <div v-if="appointment.patient">
                                            {{ appointment.patient.first_name }}
                                            {{ appointment.patient.last_name }}
                                        </div>
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ appointment.appointment_date }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ appointment.appointment_time }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ appointment.status }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        <Link
                                            tabIndex="1"
                                            className="mx-1 px-2 py-[9px] text-sm text-white bg-blue-500 rounded"
                                            :href="
                                                route(
                                                    'appointments.show',
                                                    appointment.id
                                                )
                                            "
                                        >
                                            Detail
                                        </Link>
                                        <Link
                                            tabIndex="1"
                                            className="mx-1 px-2 py-[9px] text-sm text-white bg-blue-500 rounded"
                                            :href="
                                                route(
                                                    'appointments.edit',
                                                    appointment.id
                                                )
                                            "
                                        >
                                            Edit
                                        </Link>
                                        <button
                                            @click="
                                                deleteAppointment(
                                                    appointment.id
                                                )
                                            "
                                            tabIndex="-1"
                                            type="button"
                                            className="mx-1 px-2 py-2 text-sm text-white bg-red-500 rounded"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
