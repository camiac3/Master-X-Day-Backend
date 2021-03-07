<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;
use App\Models\Route;
use App\Models\FlighRoutes;
use App\Models\Airport;
use App\Models\Plane;




class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $planes = Plane::all();
        return $planes; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
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
        $plane = Plane::find($id);
        return $plane;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
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
        $plane = Plane::find($id);
        $plane->delete();

        return redirect()->route('flights.index')->with('success','Plane Deleted!');
    }
}