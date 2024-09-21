<?php

namespace App\Http\Controllers;
use App\Models\ContactInformation;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\AppointmentInformation;
use Str;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{

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

        // Store contact information
        $contact = ContactInformation::firstOrCreate([
            'patient_id' => $patient->id,
            'number' => $validated['number'],
            'email' => $validated['email'],
        ]);

        // Create the appointment
        $appointment = Appointment::create([
            'patient_id' => $patient->id,
            'date' => $validated['date'],
            'time' => $validated['time'],
        ]);

        // Redirect or return a response after success
        return redirect()->back()->with('success', 'Appointment has been successfully booked!');
    }

    private function generateRandomCode($length = 5)
    {
        return strtoupper(Str::random($length)); // Generates a random alphanumeric string and converts it to uppercase
    }


}
