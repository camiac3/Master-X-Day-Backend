@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left">
            <h3>Lista Flights</h3>
          </div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('flights.create') }}" class="btn btn-info">New Flight</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
              <thead>
                <th>Name</th>
                <th>Origin</th>
                <th>destination</th>
                <th>date_hour</th>
                <th>Autor</th>
                <th>passengers_quantity</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                @if($flights->count())
                @foreach($flights as $flight)
                <tr>
                  <td>{{$flight->flights_id}}</td>
                  <td>{{$flight->flight_name}}</td>
                  <td>{{$flight->origin}}</td>
                  <td>{{$flight->destination}}</td>
                  <td>{{$flight->date_hour}}</td>
                  <td>{{$flight->passengers_quantity}}</td>
                  <td>
                    <a href="{{ route('flights.edit',$flight->flights_id)}}" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <form action="{{ route('flights.destroy', $flight->flights_id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach

                @else
                <tr>
                  <td colspan="8">No hay registro !!</td>
                </tr>
                @endif
              </tbody>
                <tfoot>
                  <tr>
                    <td>TOTAL</td>
                    <td> {{ $flights->count()}}</td>
                  </tr>
                </tfoot>
            </table>
          </div>

        </div>

      </div>
    </div>
  </section>

  @endsection