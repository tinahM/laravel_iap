<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allcars(){
    	$cars = Car::all();
    	return view('car.allcars',['cars' => $cars]);
    }
    public function particularcar($id){

    }
    public function newcar(){

    }
}
