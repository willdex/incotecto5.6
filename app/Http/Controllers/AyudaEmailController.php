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

class AyudaEmailController extends Controller {

  
    function index(Request $request) {

        try {

            Mail::send('emails.consulta',$request->all(), function($msj){
                $msj->subject('Consulta de Proveedor');
                $msj->to('compras@incotec.cc');
            });

            Session::flash('message','Enviado Correctamente.');
            return Redirect::to('ayuda');

        } catch (\Exception $e) {
            Session::flash('message-error','Mensaje no enviado, Intente mas tarde.');
            return Redirect::to('ayuda');
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
