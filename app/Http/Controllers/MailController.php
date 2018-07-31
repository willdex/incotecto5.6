<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Mail;
use Session;
use Redirect;
use DB;
use Storage;

 
class MailController extends Controller
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

            $correo = $request['emailR'];
            $file = "files/formulario.xls";

            Mail::send('emails.requisitosproveedor',$request->all(), function($msj) use ($correo, $file){
                $msj->subject('Requisitos Incotec');
                $msj->to($correo);
                $msj->attach($file);
            });


            Mail::send('emails.plantilla',$request->all(), function($msj){
                $msj->subject('Registro de Proveedor');
                $msj->to('compras@incotec.cc');
            });


            Session::flash('message','Enviado Correctamente.');
            return Redirect::to('registrarse');

        } catch (Exception $e){

            return redirect::to('registrarse')->with("message-error","Mensaje no enviado, Intente mas tarde.");
        }

    }
 
    public function store2(Request $request)
    {
       /* $mail=DB::select('select correo from proveedor where proveedor.correo='.$request['emails']); 
        if ($mail[0] == $request['emails']) {
            Session::flash('message','Enviado Correctamente');
            return Redirect::to('log.inicio');
         } */

    }
 
 
}
