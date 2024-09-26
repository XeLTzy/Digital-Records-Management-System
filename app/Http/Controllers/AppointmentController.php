<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\AppointmentConfirmation;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    //Retrieval functions
    public function index()
    {
        return view('client.appointment');
    }

    public function getAppointments()
    {
        // Fetch appointments with patient details
        $appointments = Appointment::with('patient')
            ->get(['id', 'patient_id', 'date', 'time'])
            ->map(function ($appointment) {
                return [
                    'id' => $appointment->id,
                    'title' => $appointment->patient->firstname . ' ' . $appointment->patient->lastname,
                    'start' => $appointment->date . 'T' . $appointment->time, // FullCalendar uses ISO8601 format
                    //'end' => $appointment->date . 'T' . date('H:i:s', strtotime($appointment->time) + 3600), // Example: adding 1 hour to time
                ];
            });

        // Pass appointments to the view
        return view('admin.dashboard', compact('appointments'));
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
        ]);

        // Create or find the patient
        $patient = Patient::firstOrCreate([
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
        ]);
        $patient->save();

        // Store contact information
        $contact = ContactInformation::firstOrCreate([
            'patient_id' => $patient->id,
            'number' => $validated['number'],
            'email' => $validated['email'],
        ]);

        $contact->save();

        // Create the appointment
        $appointment = Appointment::create([
            'patient_id' => $patient->id,
            'date' => $validated['date'],
            'time' => $validated['time'],
        ]);
        $appointment->save();

        // Generate a random code for the appointment confirmation
        $code = $this->generateRandomCode();

        $appointmentconfirmation = AppointmentConfirmation::create([
            'appointment_id' => $appointment->id,
            'code' => $code,
        ]);

        $appointmentconfirmation->save();

        //Debug insert
        // return response()->json([
        //     'message' => 'Appointment successfully!',
        //     'patient' => $patient,
        //     'contact' => $contact,
        //     'appointment' => $appointment,
        //     'appointmentconfirmation' => $appointmentconfirmation,
        // ], 201);
    
        //return redirect()->back()->with('success', 'Appointment has been successfully booked!');
    }

    private function generateRandomCode($length = 5)
    {
        return strtoupper(Str::random($length)); // Generates a random alphanumeric string and converts it to uppercase
    }
}
