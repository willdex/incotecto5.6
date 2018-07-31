<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Mail;
use Auth;
use Session;
use Redirect;
use DB;

class ContrasenaControler extends Controller {

  
    function index(Request $request) {   

         $sql = DB::select("SELECT correo FROM proveedor WHERE correo='".$request['emails']."'");

        if (count($sql) == 0) {

            Session::flash('message-error','Su cuenta de email no es válida');
            return Redirect::to('/');
         } 
         else{

            try {

                Mail::send('emails.contrasena',$request->all(), function($msj){
                    $msj->subject('Recuperar Contraseña');
                    $msj->to('compras@incotec.cc');
                });

                Session::flash('message','Enviado exitoso, nos pondremos en contacto contigo.');
                return Redirect::to('/');

            } catch (\Exception $e) {

                return redirect::to('/')->with("message-error","Mensaje no enviado, Intente mas tarde.");

            }

         }

    }


    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request) {
        
       
    }



    public function logout() {

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
