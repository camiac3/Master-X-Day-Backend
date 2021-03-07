<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;
use App\Models\Route;
use App\Models\FlighRoutes;
use App\Models\Airport;

use Illuminate\Support\Facades\Http;


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
        #I consume the API
        # Airport
        $request = Http::get('https://ads.humancode.com.co/api/airports');
        $airports = $request->json();
        
        # Planes   http://localhost/Master-X-Day-Backend/public/flights/create
        $request = Http::get('https://ads.humancode.com.co/api/planes');
        $planes = $request->json();

        // dd($response);
        return view('flight.create', ['airports' => $airports, 'planes' => $planes]);
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
        # Save the route first
        $route = new Route ;
        $route->aeropuerto_id_origen = $request->origin;
        $route->aeropuerto_id_destino = $request->destination; 
        $route->save();

        $route = route::find($route->plane_routes_id);

        // dd($route);


        # Then save the route with the plane
        $flighRoutes = new FlighRoutes ;
        $flighRoutes->plane_id = $request->plane_id;
        $flighRoutes->rutas_idrutas = $route->plane_routes_id; 
        $flighRoutes->save();

        # 
        $flight_name = $flighRoutes->plane_routes_id .  " " . $route->getAirportOrigin->airport_name . " to ". $route->getAirportDestination->airport_name;
        # Save Flight 
        $flight = new Flight;
        $flight->flight_name = $flight_name;
        $flight->origin = $route->getAirportOrigin->airport_name;
        $flight->destination = $route->getAirportDestination->airport_name;
        $flight->date_hour = strtotime( $request->date_hour) ;
        $flight->passengers_quantity = $request->passengers_quantity;
        $flight->boarding_gate = $request->boarding_gate;
        $flight->flight_state_id = 4;
        $flight->plane_routes_id = $flighRoutes->plane_routes_id; 
        $flight->save();

        ### Falta incluir los pasageros como tal 
        return redirect()->route('flights.index');

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
        $request = Http::get('https://ads.humancode.com.co/api/airports');
        $airports = $request->json();
        
        # Planes   http://localhost/Master-X-Day-Backend/public/flights/create
        $request = Http::get('https://ads.humancode.com.co/api/planes');
        $planes = $request->json();
        return view('flight.edit', ['flight'=> $flight,  'airports' => $airports, 'planes' => $planes]);
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