<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function list()
    {
        $cars=[['audi','RS7','czerwone'],['opel','corsa','zielona'],['fiat','Punto','bialy'],['mercedes','gle','duzy']];
        return view('cars.list',['cars' => $cars]);
    }
}
