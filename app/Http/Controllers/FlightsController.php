<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;

class FlightsController extends Controller
{
    public function getAll()
    {
        $vuelos = array('hola' => "primerVuelo", "este" => "Prueba...");
        return $vuelos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $flights=Flight::orderBy('flights_id','DESC')->paginate(25);
        return view('Flight.index',compact('flights')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Flight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $flight = Flight::find($id);
        return $flight;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $flight=Flight::find($id);
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
        $flight = Flight::find($id);
        $flight->delete();

        return redirect()->route('flights.index')->with('success','Flight Deleted!');
    }
}