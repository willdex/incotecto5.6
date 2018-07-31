<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use App\RegProveedor;

use Illuminate\Support\Facades\Crypt;

use Mail;
use Session;
use Redirect;
use DB;
use Storage;



 
class EnvioController extends Controller
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
      // try {
             $correo = $request->get('correo');
             $id = $request->get('id');
            // $password = Crypt::decrypt($request->get('password'));
                $password = substr(MD5(rand(5, 100)), 0, 8);
                $pass = bcrypt($password);
                $proveedor=RegProveedor::findOrFail($id);
                $proveedor->password=$pass;
                $proveedor->update();
                
             //$password = substr(MD5(rand(5, 100)), 0, 8);
            Mail::send('emails.acceso',['correo'=> $correo , 'password' => $password], function($msj) use ($correo){
                $msj->subject('Consulta de Proveedor');
                //$msj->to('dalanismolina@gmail.com');
                $msj->to($correo);

            });

            Session::flash('message','Enviado Correctamente.');
            return Redirect::to('accesos');

        //} catch (\Exception $e) {
            Session::flash('message-error','Mensaje no enviado, Intente mas tarde.');
            return Redirect::to('accesos');
       // }

    }
}