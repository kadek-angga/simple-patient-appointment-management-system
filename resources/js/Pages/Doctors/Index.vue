<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, computed } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    doctors: Array,
});

const deleteDoctor = (id) => {
    Inertia.delete(route("doctors.destroy", id));
};

// Pagination
let currentPage = ref(1);
let itemsPerPage = ref(10);

// Computed property for paginated patients
const paginatedDoctors = computed(() => {
    const start = (currentPage.value - 1) * itemsPerPage.value;
    const end = start + itemsPerPage.value;
    return props.doctors.slice(start, end);
});

// Function to change page
const changePage = (page) => {
    currentPage.value = page;
};

const start = computed(() => (currentPage.value - 1) * itemsPerPage.value);
const end = computed(() =>
    Math.min(start.value + itemsPerPage.value, props.doctors.length)
);
</script>
<template>
    <Head title="Doctor" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Doctors
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
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
                                    <th className="px-4 py-2">Phone Number</th>
                                    <th className="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="doctor in paginatedDoctors"
                                    :key="doctor.id"
                                >
                                    <td className="border px-4 py-2">
                                        {{ doctor.id }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        <Link
                                            className="underline"
                                            :href="
                                                route('doctors.show', doctor.id)
                                            "
                                        >
                                            {{ doctor.first_name }}
                                            {{ doctor.last_name }}
                                        </Link>
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ doctor.specialization }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        {{ doctor.phone_number }}
                                    </td>
                                    <td className="border px-4 py-2">
                                        <div
                                            class="flex justify-center items-center space-x-2"
                                        >
                                            <Link
                                                tabIndex="1"
                                                type="button"
                                                className="mx-0 px-2 py-2 text-sm text-white bg-blue-500 rounded"
                                                :href="
                                                    route(
                                                        'doctors.show',
                                                        doctor.id
                                                    )
                                                "
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                    class="w-5 h-5"
                                                >
                                                    <path
                                                        d="M8 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm5 5a3 3 0 1 0 1.524 5.585l1.196 1.195a.75.75 0 1 0 1.06-1.06l-1.195-1.196A3 3 0 0 0 9.5 7Z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </Link>
                                            <Link
                                                tabIndex="1"
                                                type="button"
                                                className="mx-1 px-2 py-2 text-sm text-white bg-yellow-500 rounded"
                                                :href="
                                                    route(
                                                        'doctors.edit',
                                                        doctor.id
                                                    )
                                                "
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                    class="w-5 h-5"
                                                >
                                                    <path
                                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z"
                                                    />
                                                    <path
                                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z"
                                                    />
                                                </svg>
                                            </Link>
                                            <button
                                                @click="deleteDoctor(doctor.id)"
                                                tabIndex="-1"
                                                type="button"
                                                className="mx-1 px-2 py-2 text-sm text-white bg-red-500 rounded"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                    class="w-5 h-5"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-4">
                            <div
                                class="flex items-start justify-start text-center mt-2"
                            >
                                Showing {{ start + 1 }} to {{ end }} of
                                {{ doctors.length }} results
                            </div>
                            <div class="flex justify-center">
                                <button
                                    class="mx-1 px-4 py-2 rounded font-semibold bg-white border border-gray-500"
                                    :class="{
                                        'text-gray-400': currentPage === 1,
                                    }"
                                    :disabled="currentPage === 1"
                                    @click="changePage(currentPage - 1)"
                                >
                                    Previous
                                </button>
                                <button
                                    v-for="page in Math.ceil(
                                        doctors.length / itemsPerPage
                                    )"
                                    :key="page"
                                    :class="{
                                        'bg-blue-500 text-white':
                                            page === currentPage,
                                    }"
                                    class="mx-1 px-4 py-2 rounded"
                                    @click="changePage(page)"
                                >
                                    {{ page }}
                                </button>
                                <button
                                    class="mx-1 px-4 py-2 rounded font-semibold bg-white border border-gray-500"
                                    :class="{
                                        'text-gray-400':
                                            currentPage ===
                                            Math.ceil(
                                                doctors.length / itemsPerPage
                                            ),
                                    }"
                                    :disabled="
                                        currentPage ===
                                        Math.ceil(doctors.length / itemsPerPage)
                                    "
                                    @click="changePage(currentPage + 1)"
                                >
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
