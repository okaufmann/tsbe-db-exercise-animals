<?php

namespace App\Http\Controllers;

use App\Holder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $givenname = $request->input('givenname');
        $surname = $request->input('surname');

        $request->flashOnly('givenname', 'surname');

        $holderQuery = Holder::with('animals.medications')->where('givenname', 'LIKE', $givenname)->orWhere('surname',
            'LIKE',
            $surname);

        $holderSql = $holderQuery->toSql();
        $holder = $holderQuery->first();

        return view('home.index', ['holder' => $holder, 'sql' => $holderSql]);
    }
}
