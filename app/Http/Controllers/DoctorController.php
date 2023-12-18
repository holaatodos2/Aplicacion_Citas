<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Http\Request;


class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');

        $doctorsFilter = User::role('Doctor')
                                ->where('name', 'LIKE', '%'.$filterValue.'%');

        $doctors = $doctorsFilter->simplePaginate(10);

        return view('doctors.index',[
            'doctors' => $doctors,
            'filterValue' => $filterValue,
        ]);
    }

    public function create()
    {
        $specialties = Specialty::all();
        return view('doctors.create', compact('specialties'));
    }

    public function store(DoctorRequest $request)
    {
        $doctor = $request->all();
        $user = User::create($doctor);

        $user->roles()->sync(2);

        $user->Specialty()->attach($request->input('specialties'));


        return redirect()->action([DoctorController::class, 'index'])
            ->with('success-create', 'Médico agregado con éxito');
    }

    public function show(User $doctor){
        $doctor = User::find($doctor->id);

        $specialties = $doctor->Specialty()->select('name')->get();

        return view('doctors.show', compact('doctor', 'specialties'));
    }

    public function edit(User $doctor)
    {
        $specialties = Specialty::all();

        $ids_specialties = $doctor->Specialty()->pluck('specialties.id');
        return view('doctors.edit', compact('doctor', 'specialties', 'ids_specialties'));
    }

    public function update(DoctorUpdateRequest $request, User $doctor)
    {

        $doctor = User::find($doctor->id);
        if(!$doctor){
            abort('DOCTOR NO ENCONTRADO');
        } else{
            $doctor->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'dni' => $request->dni,
            ]);

            $doctor->Specialty()->sync($request->input('specialties'));

            return redirect()->action([DoctorController::class, 'index'])
            ->with('success-update', 'Médico modificada con éxito');
        }
    }

    public function destroy(User $doctor)
    {
        $doctor->delete();

        return redirect()->action([DoctorController::class, 'index'])
            ->with('success-delete', 'Médico eliminado con éxito');
    }
}
