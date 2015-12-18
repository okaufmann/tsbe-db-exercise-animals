<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AnimalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $animals = Animal::with(['holder', 'race'])->paginate(15);

        return view('animal.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required',]);

        Animal::create($request->all());

        alert()->success('', 'Animal successfully added!');

        return redirect('animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required',]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        alert()->success('', 'Animal successfully updated!');

        return redirect('animal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Animal::destroy($id);

        alert()->success('', 'Animal successfully deleted!');

        return redirect('animal');
    }

}
