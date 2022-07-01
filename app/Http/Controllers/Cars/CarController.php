<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($id)
    {
        $cars=[['audi','RS7','czerwone'],['opel','corsa','zielona'],['fiat','Punto','bialy'],['mercedes','gle','duzy']];
        $car=$cars[$id-1];
        return view('Cars.show',['car' => $car]);
    }
}
