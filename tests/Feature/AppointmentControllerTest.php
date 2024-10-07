<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ContactInformation;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\AppointmentInformation;
use Str;

class AppointmentControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;

    public function test_add_appointment_information()
    {
        // Prepare the data
        $data = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'number' => '1234567890',
            'email' => 'john.doe@example.com',
            'date' => '2024-09-21',
            'time' => '10:30 AM',
        ];

        // Call the add method with the correct endpoint
        $response = $this->post('/appointments/add', $data); // Ensure this matches your route

        // Assert that the response is a redirect
        $response->assertRedirect();

        // Assert that the patient was created in the correct table
        $this->assertDatabaseHas('patient', [
            'firstname' => 'John',
            'lastname' => 'Doe',
        ]);

        // // Assert that the contact information was created
        // $this->assertDatabaseHas('contactinformation', [
        //     'number' => '1234567890',
        //     'email' => 'john.doe@example.com',
        // ]);

        // // Assert that the appointment was created
        // $this->assertDatabaseHas('appointment', [
        //     'patient_id' => Patient::where('firstname', 'John')->first()->id,
        //     'date' => '2024-09-21',
        //     'time' => '10:30:00', // Ensure the time format is correct
        // ]);

        // // Assert that the appointment confirmation was created with a code
        // $this->assertDatabaseHas('appointmentconfirmation', [
        //     'appointment_id' => Appointment::where('patient_id', Patient::where('firstname', 'John')->first()->id)->first()->id,
        // ]);
    }
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
