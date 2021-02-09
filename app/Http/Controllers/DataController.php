<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function create() {
        return view('data.create');
    }

    public function store() {
        // dd(request()->all());
        $data = request()->validate([
            'name' => 'required',
            'type' => 'required',
            'make' => 'required',
            'amount' => 'required',
        ]);

        Data::create($data);

        return redirect('/');
    }
}
