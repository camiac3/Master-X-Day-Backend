<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;
use App\Models\Route;
use App\Models\FlighRoutes;



class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $flights=Flight::orderBy('flights_id','DESC')->paginate(25);
        return view('flight.index',compact('flights')); 
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
        * 
            origin_id :             Id Airport origin (int)
            detination_id :         Id Airport Destination (int)
            plane_id :              Id Plane (int)
            passengers_quantity :   Passengers quantity (int)
            boarding_gate :         Date boarding (datetime)
            flight_state_id :       State id of Flight
        *
        * @return Response
        */
    public function store(Request $request)
    {
        // dd($request->all());

        # Save the route first
        $route = new Route ;
        $route->aeropuerto_id_origen = $request->origin_id;
        $route->aeropuerto_id_destino = $request->detination_id; 
        $route->save();

        // dd($route);


        # Then save the route with the plane
        $flighRoutes = new FlighRoutes ;
        $flighRoutes->plane_id = $request->plane_id;
        $flighRoutes->rutas_idrutas = $route->plane_routes_id; 
        $flighRoutes->save();

        # 
        $flight_name = $flighRoutes->plane_routes_id .  " " . $route->getAirportOrigin->airpot_name . " to ". $route->getAirportDestination->airpot_name;
        # Save Flight 
        $flight = new Flight;
        $flight->flight_name = $flight_name;
        $flight->origin = $route->getAirportOrigin->airpot_name;
        $flight->destination = $route->getAirportDestination->airpot_name;
        $flight->date_hour = time();
        $flight->passengers_quantity = $request->passengers_quantity;
        $flight->boarding_gate = $request->boarding_gate;
        $flight->flight_state_id = $request->flight_state_id;
        $flight->plane_routes_id = $flighRoutes->plane_routes_id; 
        $flight->save();

        ### Falta incluir los pasageros como tal 
        return $flight;

        # save Flight with passengers
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