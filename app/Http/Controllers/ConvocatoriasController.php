<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use App\Http\Requests\ConvocatoriasRequest;
use App\Convocatoria;

use Auth;
use Session;
use Redirect;
use DB;

class ConvocatoriasController extends Controller {

  public function __construct(Request $request) {
         $this->middleware('auth');
         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']);
        
    }
  
    function index() {    

        return view('convocatorias.index');        
                
    }
   

function covocatorias($id){

    $idcategoria = DB::select ('select nombre FROM categoria WHERE idcat='.$id);

    $idc=DB::table('convocatoria')
    ->join('categoria','categoria.idcat','=','convocatoria.idcat')
    ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
    ->where('convocatoria.idcat','=',$id)
    ->where('convocatoria.estado','<>','inactiva')
    ->orderBy('fecha', 'desc')
    ->paginate(10);  

    return view('convocatorias.index',['idc'=>$idc], compact('idcategoria',$idcategoria)); 
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
    public function store(Request $request) {

        try {

            DB::beginTransaction();

            $fecha = DB::select('SELECT curdate() as fecha');

            Convocatoria::create([
                'titulo' => $request['txttitulo'],
                'descripcion' => $request['txtlink'],
                'fecha' => $fecha[0]->fecha,
                'estado' => $request['txtestado'],
                'idcat' => $request['cbocategorias'],
            ]);


            $sql = DB::select ('select proveedor,correo FROM proveedor, prov_cat WHERE proveedor.id=prov_cat.id and prov_cat.idcat='.$request['cbocategorias']);

            $cant = count($sql);
            $c = 1;
            $s = 0;

            while ($c <= $cant) {

                $correo = $sql[$s]->correo;

                Mail::send('emails.nuevaconvocatoria',$request->all(), function($msj) use ($correo){

                    $msj->subject('Nueva Convocatoria (INCOTEC)');
                    $msj->to($correo);

                });

                $s = $s + 1;
                $c = $c + 1;

            }

            Session::flash('message','CONVOCATORIA PUBLICADA.');

            DB::commit();

            return Redirect::to('/escritorio');


        } catch (\Exception $e) {

            DB::rollback();

            return redirect::to('/escritorio')->with("message-error","Error, intente nuevamente, o contáctese con el administrador.");

        }


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
