@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-primary text-white">
    <div class="container">
      <h1 class="display-5">Insert Data</h1>
      <p class="lead">Through the form below, you can insert some data.</p>
      <hr>
    </div>
  </div>
<div class="container">
    <form action="/data" enctype="multipart/form-data" method="post">
        @csrf
        <div>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input id="name"
                    type="text"
                    class="form-control
                    @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="name" autofocus>
                @error('name')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Product Type</label>
                <select
                    class="form-control"
                    @error('type') is-invalid @enderror
                    id="type"
                    name="type"
                    required>
                <option value="Food" >Food</option>
                <option value="Beverage">Beverage</option>
                <option value="Household Appliance">Household Appliance</option>
                <option value="Stationery">Stationery</option>
                <option value="Hobby">Hobby</option>
                </select>
            </div>
              <div class="form-group">
                  <label for="make">Product Manufacturer</label>
                  <input
                      type="text"
                      class="form-control"
                      id="make"
                      value="{{ old('make') }}"
                      placeholder="Product Manufacturer"
                      name="make"
                      required>
              </div>
              <div class="form-group">
                  <label for="amount">Amount</label>
                  <input
                      type="number"
                      class="form-control"
                      id="amount"
                      value="{{ old('amount') }}"
                      placeholder="0"
                      name="amount"
                      required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
