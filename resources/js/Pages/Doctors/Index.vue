<template>
    <Head title="Doctor" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Doctors
            </h2>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div
                                className="flex items-center justify-between mb-6"
                            >
                                <Link
                                    className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none"
                                    :href="route('doctors.create')"
                                >
                                    Add Doctor
                                </Link>
                            </div>
                            <table className="table-fixed w-full">
                                <thead>
                                    <tr className="bg-gray-100">
                                        <th className="px-4 py-2 w-20">ID</th>
                                        <th className="px-4 py-2">Name</th>
                                        <th className="px-4 py-2">
                                            Specialization
                                        </th>
                                        <th className="px-4 py-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="doctor in doctors"
                                        :key="doctor.id"
                                    >
                                        <td className="border px-4 py-2">
                                            {{ doctor.id }}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {{ doctor.first_name }}
                                            {{ doctor.last_name }}
                                        </td>
                                        <td className="border px-4 py-2">
                                            {{ doctor.specialization }}
                                        </td>
                                        <td
                                            className="flex items-center justify-center border px-4 py-2"
                                        >
                                            <Link
                                                tabIndex="1"
                                                className="mx-1 px-2 py-[9px] text-sm text-white bg-blue-500 rounded"
                                                :href="
                                                    route(
                                                        'doctors.show',
                                                        doctor.id
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
                                                        'doctors.edit',
                                                        doctor.id
                                                    )
                                                "
                                            >
                                                Edit
                                            </Link>
                                            <button
                                                @click="deleteDoctor(doctor.id)"
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
        </template>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    doctors: Array,
    filters: Object,
});

const deletePatient = (id) => {
    Inertia.delete(route("patients.destroy", id));
};
</script>
