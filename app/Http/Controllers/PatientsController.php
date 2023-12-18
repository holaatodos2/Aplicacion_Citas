<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');

        $patientsFilter = User::role('Paciente')
                                ->where('name', 'LIKE', '%'.$filterValue.'%');

        $patients = $patientsFilter->simplePaginate(10);

        return view('patients.index',[
            'patients' => $patients,
            'filterValue' => $filterValue,
        ]);
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(DoctorRequest $request)
    {
        $patient = $request->all();
        $user = User::create($patient);

        $user->roles()->sync(3);

        return redirect()->action([PatientsController::class, 'index'])
            ->with('success-create', 'Paciente agregado con éxito');
    }

    public function show(User $patient)
    {
        $patient = User::find($patient->id);

        return view('patients.show', compact('patient'));
    }

    public function edit(User $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(DoctorUpdateRequest $request, User $patient)
    {

        $patient = User::find($patient->id);
        if(!$patient){
            abort('PACIENTE NO ENCONTRADO');
        } else{
            $patient->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'dni' => $request->dni,
            ]);

            return redirect()->action([PatientsController::class, 'index'])
            ->with('success-update', 'Paciente modificada con éxito');
        }
    }

    public function destroy(User $patient)
    {
        $patient->delete();

        return redirect()->action([PatientsController::class, 'index'])
            ->with('success-delete', 'Paciente eliminado con éxito');
    }
}
