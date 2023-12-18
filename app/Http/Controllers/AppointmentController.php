<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(User $doctor, Request $request)
    {
        $specialties = Specialty::all();
        $doctor = User::find($doctor->id);
        $filterValue = $request->input('filterValue');
        $selectedSpecialties = $request->input('specialties') ?? [];

        $doctors = User::role('Doctor')
            ->where('name', 'LIKE', '%' . $filterValue . '%')
            ->when($selectedSpecialties, function ($query) use ($selectedSpecialties) {
                $query->whereHas('specialties', function ($query) use ($selectedSpecialties) {
                    $query->whereIn('specialties.id', $selectedSpecialties);
                });
            })
            ->get();

        return view('reservar.index', compact('doctor', 'specialties', 'doctors', 'filterValue', 'selectedSpecialties'));
    }

    public function store()
    {
    //
    }

    public function show(User $doctor)
    {
    }
}
