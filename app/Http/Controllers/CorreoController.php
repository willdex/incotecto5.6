<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Storage;
use Session;
use Redirect;

class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {

        

    }



     public function enviar(Request $request)
    {
    
   
    }


 public function showfileupload(Request $request)
    {
        $file = $request -> file('image');

        //File Name
$file->getClientOriginalName();

//Display File Extension
$file->getClientOriginalExtension();

//Display File Real Path
$file->getRealPath();

//Display File Size
$file->getSize();

//Display File Mime Type
$file->getMimeType();


        $destinationPath = 'files';
        $file->move($destinationPath,$file->getClientOriginalName());

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
                try {
 
       
        $file = $request -> file('image');


            Mail::send('emails.propuesta',$request->all(), function($msj) use ($file) {
                $msj->subject('Propuesta Recibida');
                $msj->to('compras@incotec.cc'); // $jkl
                
                $msj->attach($file);

 
            });

              Session::flash('message','Enviado Correctamente.');
            return Redirect::to('escritorio');

        } catch (\Exception $e) {
            Session::flash('message-error','Mensaje no enviado, Intente mas tarde.');
            return Redirect::to('escritorio');
        }

    }

         
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

}
