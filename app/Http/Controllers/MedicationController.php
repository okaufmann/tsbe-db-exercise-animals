<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Medication;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MedicationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $medications = Medication::paginate(15);

        return view('medication.index', compact('medications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('medication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        Medication::create($request->all());

        alert()->success('','Medication successfully added!');

        return redirect('medication');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $medication = Medication::findOrFail($id);

        return view('medication.show', compact('medication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $medication = Medication::findOrFail($id);

        return view('medication.edit', compact('medication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $medication = Medication::findOrFail($id);
        $medication->update($request->all());

        alert()->success('','Medication successfully updated!');

        return redirect('medication');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Medication::destroy($id);

        alert()->success('','Medication successfully deleted!');

        return redirect('medication');
    }

}
