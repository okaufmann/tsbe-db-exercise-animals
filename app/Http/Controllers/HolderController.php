<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Holder;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class HolderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $holders = Holder::paginate(15);

        return view('holder.index', compact('holders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('holder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'givenname' => 'required',
            'surname'   => 'required',
            'address'   => 'required',
            'zip'       => 'required',
            'location'  => 'required',
        ]);

        Holder::create($request->all());

        alert()->success('', 'Holder successfully added!');

        return redirect('holder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $holder = Holder::findOrFail($id);

        return view('holder.show', compact('holder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $holder = Holder::findOrFail($id);

        return view('holder.edit', compact('holder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'givenname' => 'required',
            'surname'   => 'required',
            'address'   => 'required',
            'zip'       => 'required',
            'location'  => 'required',
        ]);

        $holder = Holder::findOrFail($id);
        $holder->update($request->all());

        alert()->success('', 'Holder successfully updated!');

        return redirect('holder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Holder::destroy($id);

        alert()->success('', 'Holder successfully deleted!');

        return redirect('holder');
    }

}
