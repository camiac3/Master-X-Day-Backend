@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">New flight</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('flights.store') }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        Name
                                        <div class="form-group">
                                            <input type="text" name="flight_name" id="flight_name" class="form-control input-sm" placeholder="Nombre del flight">
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            Origin
                                            <select name="origin" id="origin" class="form-control input-sm">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            Destination
                                            <select name="destination" id="destination" class="form-control input-sm">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                        DateTime
                                            <input type="datetime-local" name="date_hour" id="date_hour" class="form-control input-sm" placeholder="date/hour">
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                        Number Passangers
                                            <input type="number" name="passangers_quantity" id="passangers_quantity" class="form-control input-sm" placeholder="passangers quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit" value="Update" class="btn btn-success btn-block">
                            <a href="{{ route('flights.index') }}" class="btn btn-info btn-block">Back</a>
                        </div>

                    </div>
                    </form>
                </div>
            </div>

        </div>
</div>
</section>
@endsection
