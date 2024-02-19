<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
// import BreezeTextArea from "@/Components/Textarea.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    patient_id: "",
    doctor_id: "",
    appointment_date: "",
    appointment_time: "",
    status: "",
});

const props = defineProps({
    patients: Object,
    doctors: Object,
});

const submit = () => {
    form.post(route("appointments.store"));
};
</script>
<template>
    <Head title="Appointment" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Making Appointment
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('appointments.index')"
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
                                                >Patient Name</label
                                            >
                                            <div class="mt-2">
                                                <select
                                                    name="patient-id"
                                                    id="patient-id"
                                                    v-model="form.patient_id"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                >
                                                    <option
                                                        v-for="patient in patients"
                                                        :key="patient.id"
                                                        :value="patient.id"
                                                    >
                                                        {{ patient.id }}
                                                        {{ patient.name }}
                                                    </option>
                                                </select>
                                                <span
                                                    class="text-red-600"
                                                    v-if="
                                                        form.errors.patient_id
                                                    "
                                                >
                                                    {{ form.errors.patient_id }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label
                                                for="first-name"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Doctor Name</label
                                            >
                                            <div class="mt-2">
                                                <select
                                                    name="doctor_id"
                                                    id="doctor_id"
                                                    v-model="form.doctor_id"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                >
                                                    <option
                                                        v-for="doctor in doctors"
                                                        :key="doctor.id"
                                                        :value="doctor.id"
                                                    >
                                                        {{ doctor.id }}
                                                        {{ doctor.name }}
                                                    </option>
                                                </select>
                                                <span
                                                    class="text-red-600"
                                                    v-if="form.errors.doctor_id"
                                                >
                                                    {{ form.errors.doctor_id }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label
                                                for="date"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Appointment Date</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="date"
                                                    name="date"
                                                    id="date"
                                                    autocomplete="date"
                                                    v-model="
                                                        form.appointment_date
                                                    "
                                                    class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="
                                                        form.errors
                                                            .appointment_date
                                                    "
                                                >
                                                    {{
                                                        form.errors
                                                            .appointment_date
                                                    }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-span-full">
                                            <label
                                                for="time"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Appointment Time</label
                                            >
                                            <div class="mt-2">
                                                <input
                                                    type="time"
                                                    name="time"
                                                    id="time"
                                                    autocomplete="time"
                                                    v-model="
                                                        form.appointment_time
                                                    "
                                                    class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                />
                                                <span
                                                    className="text-red-600"
                                                    v-if="
                                                        form.errors
                                                            .appointment_time
                                                    "
                                                >
                                                    {{
                                                        form.errors
                                                            .appointment_time
                                                    }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-1">
                                            <label
                                                for="status"
                                                class="block text-sm font-medium leading-6 text-gray-900"
                                                >Status</label
                                            >
                                            <div class="mt-2">
                                                <select
                                                    name="status"
                                                    id="status"
                                                    v-model="form.status"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                >
                                                    <option
                                                        value=""
                                                        selected
                                                        disabled
                                                    >
                                                        Choose Status
                                                    </option>
                                                    <option value="Scheduled">
                                                        Scheduled
                                                    </option>
                                                    <option value="In Progress">
                                                        In Progress
                                                    </option>
                                                    <option value="Completed">
                                                        Completed
                                                    </option>
                                                    <option value="Canceled">
                                                        Canceled
                                                    </option>
                                                </select>
                                                <span
                                                    class="text-red-600"
                                                    v-if="form.errors.status"
                                                >
                                                    {{ form.errors.status }}
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
                                    :href="route('appointments.index')"
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
