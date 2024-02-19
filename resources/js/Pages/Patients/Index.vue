<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, watchEffect, watch } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    patients: Array,
    filters: Object,
});

let search = ref(props.filters.search);

const searchPatients = () => {
    Inertia.get(
        "/patients",
        { search: search.value },
        { preserveState: true, replace: true }
    );
};

const deletePatient = (id) => {
    Inertia.delete(route("patients.destroy", id));
};
</script>
<template>
    <Head title="Patient" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Patients
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="relative max-w-sm mt-4 mb-3">
                            <input
                                class="w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                type="search"
                                placeholder="Search"
                                v-model="search"
                                v-on:input="searchPatients"
                            />
                            <button
                                v-on:click="searchPatients"
                                class="absolute inset-y-0 right-0 flex items-center px-4 text-gray-700 bg-gray-100 border border-gray-300 rounded-r-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M14.795 13.408l5.204 5.204a1 1 0 01-1.414 1.414l-5.204-5.204a7.5 7.5 0 111.414-1.414zM8.5 14A5.5 5.5 0 103 8.5 5.506 5.506 0 008.5 14z"
                                    />
                                </svg>
                            </button>
                        </div>
                        <!-- <input
                            v-model="search"
                            type="text"
                            placeholder="Search by ID or name..."
                            className="mr-4 px-4 py-2 border rounded"
                        />
                        <button
                            v-on:click="searchPatients"
                            className="px-4 py-2 bg-blue-500 text-white rounded-r"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button> -->

                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none"
                                :href="route('patients.create')"
                            >
                                Add Patient
                            </Link>
                        </div>
                        <table className="table-fixed w-full">
                            <thead>
                                <tr className="bg-gray-100">
                                    <th className="px-4 py-2 w-20">ID</th>
                                    <th className="px-4 py-2">Name</th>
                                    <th className="px-4 py-2">Gender</th>
                                    <th className="px-4 py-2">Phone Number</th>
                                    <th className="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="patient in patients"
                                    :key="patient.id"
                                >
                                    <td className="border px-4 py-2">
                                        {{ patient.id }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        <Link
                                            className="underline"
                                            :href="
                                                route(
                                                    'patients.show',
                                                    patient.id
                                                )
                                            "
                                        >
                                            {{ patient.first_name }}
                                            {{ patient.last_name }}
                                        </Link>
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ patient.gender }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ patient.phone_number }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        <Link
                                            tabIndex="1"
                                            className="mx-1 px-2 py-[9px] text-sm text-white bg-blue-500 rounded"
                                            :href="
                                                route(
                                                    'patients.show',
                                                    patient.id
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
                                                    'patients.edit',
                                                    patient.id
                                                )
                                            "
                                        >
                                            Edit
                                        </Link>
                                        <button
                                            @click="deletePatient(patient.id)"
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
