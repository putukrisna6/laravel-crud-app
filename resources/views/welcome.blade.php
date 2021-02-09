@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container justify-content-center align-items-center d-flex flex-column">
        <h1 class="display-4">Guten Tag!</h1>
        <p class="lead">This page is dedicated to implement CRUD with the Laravel framework.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Check it out</a>
        </p>
    </div>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Make</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Data::all()->sortBy('id') as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->type}}</td>
                    <td>{{$data->make}}</td>
                    <td>{{$data->amount}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
