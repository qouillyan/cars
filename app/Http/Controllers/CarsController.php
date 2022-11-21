<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()                            
    {                     
        $cars = Car::getCars();
        return view('cars', compact('cars'));
    }

    public function show($id)                           
    {
        $car = Car::find($id);                        
        return view('car', compact('car'));
    }
}
