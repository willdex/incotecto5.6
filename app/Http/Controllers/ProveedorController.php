<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProveedorController extends Controller
{
   function registrarse(){
    return view('proveedor.registrarse');
   }
}
