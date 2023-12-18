<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialtyRequest;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');

        $specialtiesFilter = Specialty::where('name', 'LIKE', '%'.$filterValue.'%');

        $specialties = $specialtiesFilter->simplePaginate(10);

        return view('specialties.index',[
            'specialties' => $specialties,
            'filterValue' => $filterValue,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('specialties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialtyRequest $request)
    {
        $specialty = $request->all();
        Specialty::create($specialty);

        return redirect()->action([SpecialtyController::class, 'index'])
            ->with('success-create', 'Especialidad agregada con éxito');
    }

    public function edit(Specialty $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialtyRequest $request, Specialty $specialty)
    {
        $specialty->update([
            'name' => $request->name,
        ]);

        return redirect()->action([SpecialtyController::class, 'index'])
            ->with('success-update', 'Especialidad modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();

        return redirect()->action([SpecialtyController::class, 'index'])
            ->with('success-delete', 'Especialidad eliminada con éxito');
    }
}
