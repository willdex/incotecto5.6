<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Mail;
use Session;
use Redirect;
use DB;

 
class ConsultaController extends Controller
{
 
    public function __construct()
    {
 
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
 
    }
 
    /**
     * Update posisi menu
     *
     * @param  int  $id
     * @return Response
     */

    public function store(Request $request)
    {
        try {

            Mail::send('emails.consulta',$request->all(), function($msj){
                $msj->subject('Consulta de Proveedor');
                $msj->to('compras@incotec.cc');
            });

            Session::flash('message','Enviado Correctamente.');
            return Redirect::to('escritorio');

        } catch (\Exception $e) {
            Session::flash('message-error','Mensaje no enviado, Intente mas tarde.');
            return Redirect::to('escritorio');
        }

    }
 
 
}
