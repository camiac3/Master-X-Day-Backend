<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;
use App\Models\Route;
use App\Models\FlighRoutes;
use App\Models\Airport;




class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $airports = Airport::orderBy('airport_name')->get();
        return $airports; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('flight.create');
    }

    /**
        * Store a newly created resource in storage.
        * The fields it receives are:
        *
        * @return Response
        */
    public function store(Request $request)
    {
    
        # 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $airport = Airport::find($id);
        return $airport;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $flight=Airport::find($id);
        return view('flight.edit',compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $airport = Airport::find($id);
        $airport->delete();

        return redirect()->route('flights.index')->with('success','Airport Deleted!');
    }
}