<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function list()
    {
        $cars = DB::table('cars')->get();
        // dd($cars[0]);

        return view('cars.list',['cars' => $cars]);        

    }
}
