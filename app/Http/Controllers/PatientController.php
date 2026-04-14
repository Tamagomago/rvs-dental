<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    // Show lists of patients (Paginated + Infinite Scrolling + Search Bar)
    public function index()
    {
        $patients = Patient::latest()->paginate(10);

        return view('pages.patients.index', compact('patients'));
    }

    // Display patient add form
    public function create()
    {
        return view('pages.patients.create');
    }

    // Manage form submission from patient add form
    public function store(StorePatientRequest $request)
    {
        // Save record first to fetch for patient id - will be used in storing the patient photos
        $patient = Patient::create($request->safe()->except('image_filename'));
        // Create a specific patient directory, store the image, and update the patient image
        if ($request->hasFile('image_filename')) {
            $folder = "patients/{$patient->patient_id}";
            $imageFile = $request->file('image_filename')->store($folder, 'public');

            $patient->image_filename = basename($imageFile);
            $patient->save();
        }

        return redirect()
            ->route('patients.show', $patient)
            ->with('success', 'Patient added successfully.');
    }

    // Display a specific patient information
    public function show(Patient $patient)
    {
        $patientResponses = DB::table('patient_responses')
            ->join('appointments', 'appointments.appointment_id', '=', 'patient_responses.appointment_id')
            ->join('medical_questions', 'medical_questions.question_id', '=', 'patient_responses.question_id')
            ->where('appointments.patient_id', $patient->patient_id)
            ->select('patient_responses.answer', 'medical_questions.question')
            ->orderByDesc('appointments.scheduled_at')
            ->orderBy('medical_questions.question')
            ->get();

        $medicalConditions = DB::table('medical_conditions')
            ->select('id', 'condition_name')
            ->get();

        $patientConditionIds = DB::table('patient_conditions')
            ->join('appointments', 'appointments.appointment_id', '=', 'patient_conditions.appointment_id')
            ->where('appointments.patient_id', $patient->patient_id)
            ->distinct()
            ->pluck('patient_conditions.condition_id')
            ->map(fn ($id) => (int) $id)
            ->all();

        return view('pages.patients.show', compact('patient', 'patientResponses', 'medicalConditions', 'patientConditionIds'));
    }

    // Show patient edit form
    public function edit(Patient $patient)
    {
        return view('pages.patients.edit', compact('patient'));
    }

    // Manage patient update form
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $patient->update($request->safe()->except('image_filename'));
        // Delete the existing photo in the storage
        if ($request->hasFile('image_filename')) {
            if ($patient->image_filename) {
                Storage::disk('public')->delete("patients/{$patient->patient_id}/{$patient->image_filename}");
            }

            $folder = "patients/{$patient->patient_id}";
            $imageFile = $request->file('image_filename')->store($folder, 'public');

            $patient->image_filename = basename($imageFile);
            $patient->save();
        }

        return redirect()
            ->route('patients.show', $patient)
            ->with('success', 'Patient updated successfully.');
    }

    // Delete a specific patient (soft-deletes only)
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()
            ->route('patients.index')
            ->with('success', 'Patient removed successfully.');
    }

    public function certificate()
    {
        return view('components.templates.certificate');
    }
}
