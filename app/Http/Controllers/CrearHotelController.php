<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CrearHotelController extends Controller
{
    public function index(){


        if(is_null(Auth::user())){
                      return view('auth.login');
        }
        

              //dd($hotels);
              return view('vistas_auxiliares.crearHotel');
          }
}
