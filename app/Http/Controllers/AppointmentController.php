<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Inertia::render('Appointments/Index', [
        //     'appointments' => Appointment::all(),
        // ]);

        $appointments = Appointment::with('patient')->get();

        return Inertia::render('Appointments/Index', [
            'appointments' => $appointments->map(function ($appointment) {
                return [
                    'id' => $appointment->id,
                    'appointment_date' => $appointment->appointment_date,
                    'appointment_time' => $appointment->appointment_time,
                    'status' => $appointment->status,
                    'patient' => $appointment->patient ? [
                        'first_name' => $appointment->patient->first_name,
                        'last_name' => $appointment->patient->last_name,
                    ] : null,
                ];
            }),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::all();

        return Inertia::render('Appointments/Create', [
            'patients' => $patients->map(function ($patient) {
                return [
                    'id' => $patient->id,
                    'name' => $patient->first_name . ' ' . $patient->last_name,
                ];
            }),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'patient_id' => ['required', 'integer'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['nullable', 'date_format:H:i'],
            'status' => ['required', 'string', 'max:255'],
        ])->validate();

        Appointment::create($request->all());

        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $appointment = Appointment::with('patient')->find($id);

        return Inertia::render('Appointments/Show', [
            'appointment' => $appointment,
            'patient' => $appointment->patient->first_name . ' ' . $appointment->patient->last_name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $appointment = Appointment::with('patient')->find($id);

        return Inertia::render('Appointments/Edit', [
            'appointment' => $appointment,
            'patient' => $appointment->patient->first_name . ' ' . $appointment->patient->last_name,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        // $appointment->update($request->all());
        Validator::make($request->all(), [
            'patient_id' => ['required', 'integer'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required', 'date_format:H:i'],
            'status' => ['required', 'string', 'max:255'],
        ])->validate();

        Appointment::find($id)->update($request->all());

        return redirect()->route('appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index');
    }
}
