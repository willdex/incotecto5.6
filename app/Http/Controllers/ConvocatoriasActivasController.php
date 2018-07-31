<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use App\Prov_Conv;

use Auth;
use Session;
use Redirect;
use DB;

class ConvocatoriasActivasController extends Controller {

  public function __construct(Request $request) {
         $this->middleware('auth');
         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']);
        
    }
  
    function index(Request $request) {  
       if($request){
             $query1=trim($request->get('searchText'));
             $query2=trim($request->get('searchText2'));
             $query3=trim($request->get('searchText3'));
             $query4=trim($request->get('searchText4'));
            if(Auth::user()->privilegio==0)
            {

                $sql=DB::table('prov_cat')
                ->join('categoria','prov_cat.idcat','=','categoria.idcat')
                ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
                ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                ->where('prov_cat.id','=',Auth::user()->id)
                ->where('convocatoria.estado','<>','inactiva')
                
                ->orderBy('fecha', 'desc')
                ->paginate(10);  

                return view('convocatoriasactivas.index',['sql'=>$sql]);  

            }
            elseif ((Auth::user()->privilegio==1)||(Auth::user()->privilegio==2)) {
               
                    if($query1<>""){

                        $sqlAdm=DB::table('convocatoria')
                        ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                      
                        ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                      
                        ->where('convocatoria.estado','<>','inactiva')
                        ->where('titulo','LIKE','%'.$query1.'%')
                  
                        ->orderBy('fecha', 'desc')
                        ->paginate(10);
                        $prub="";  
                             $fech= ""; 

                    return view('convocatoriasactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$query1,"searchText2"=>$prub,"searchText3"=>$fech,"searchText4"=>$fech]); 
                    }
                    else{
                        if ($query2<>"") {
                            $sqlAdm=DB::table('convocatoria')
                            ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                          
                            ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                          
                            ->where('convocatoria.estado','<>','inactiva')
                            ->where('nombre','LIKE','%'.$query2.'%')
                      
                            ->orderBy('fecha', 'desc')
                            ->paginate(10);
                            $prub="";
                                 $fech= ""; 
                            return view('convocatoriasactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$query2,"searchText3"=>$fech,"searchText4"=>$fech]); 
                        }
                        elseif($query3<>NULL && $query4<>NULL){
                            $sqlAdm=DB::table('convocatoria')
                            ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                          
                            ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                          
                            ->where('convocatoria.estado','<>','inactiva')
                             ->whereBetween('fecha', [$query3, $query4])
                      
                            ->orderBy('fecha', 'desc')
                            ->paginate(10);
                            $prub="";
                            $fech= ""; 
                            return view('convocatoriasactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$prub,"searchText3"=>$query3,"searchText4"=>$query4]);   
                        }else{
                            $sqlAdm=DB::table('convocatoria')
                            ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                          
                            ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                          
                            ->where('convocatoria.estado','<>','inactiva')
                            
                      
                            ->orderBy('fecha', 'desc')
                            ->paginate(10);
                            $prub="";
                            $fech= ""; 
                            return view('convocatoriasactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$prub,"searchText3"=>$fech,"searchText4"=>$fech]);     
                        }
                    }
                }
                
        }        
    }
 

    function parciales() {

        if((Auth::user()->privilegio==1) || (Auth::user()->privilegio==2))
        {

            $sqlAdm=DB::table('categoria')
            ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
            ->join('prov_conv','convocatoria.idpublic','=','prov_conv.idpublic')
            ->join('proveedor','proveedor.id','=','prov_conv.id')
            ->select('nombre','proveedor','prov_conv.idpublic','titulo','descripcion','fecha','fecha_ad','estado')
            ->where('convocatoria.estado','=','parcial')
            ->orderBy('fecha_ad', 'desc')
            ->paginate(10);   

            return view('convocatoriasactivas.parciales',['sqlAdm'=>$sqlAdm]);  

        }
        elseif (Auth::user()->privilegio==0) {

           return view('escritorio.index');
        }
    }


 function adjudicar_convocatoria(Request $request) {

    try {

        DB::beginTransaction(); 

        DB::table('convocatoria')->where('idpublic', $request['txtidpublic'])->update(['estado' => 'inactiva' ]);

        $fecha = DB::select('SELECT curdate() as fecha');
 
       Prov_Conv::create([
            'id' => $request['cboproveedor'],
            'idpublic' => $request['txtidpublic'],
            'fecha_ad' => $fecha[0]->fecha,     
        ]);


 
        $prov = DB::select ('select correo FROM proveedor WHERE id='.$request['cboproveedor']);
        $correo = $prov[0]->correo;

        Mail::send('emails.adjudicada',$request->all(), function($msj) use ($correo){

            $msj->subject('Propuesta Adjudicada (INCOTEC)');
            $msj->to($correo);

        });

        Session::flash('message','CONVOCATORIA ADJUDICADA.');

        DB::commit();

        return Redirect::to('/convocatoriasactivas');

    } catch (\Exception $e) {

        DB::rollback();

        Session::flash('message-error','Error, intente nuevamente, o contáctese con el administrador.');
        return Redirect::to('/convocatoriasactivas');
    }

  }



function adjudicar_convocatoria_parcial(Request $request) {

    try {

        DB::beginTransaction();

        DB::table('convocatoria')->where('idpublic', $request['txtidpublic'])->update(['estado' => 'parcial' ]);


        $fecha = DB::select('SELECT curdate() as fecha');
 
       Prov_Conv::create([
            'id' => $request['cboproveedorP'],
            'idpublic' => $request['txtidpublic'],
            'fecha_ad' => $fecha[0]->fecha,     
        ]);



        $prov = DB::select ('select correo FROM proveedor WHERE id='.$request['cboproveedorP']);
        $correo = $prov[0]->correo;

        Mail::send('emails.adjudicadaParcial',$request->all(), function($msj) use ($correo){

            $msj->subject('Propuesta Adjudicada (INCOTEC)');
            $msj->to($correo);

        });


        Session::flash('message','CONVOCATORIA ADJUDICADA.');

        DB::commit();

        return Redirect::to('/convocatoriasactivas');

    } catch (\Exception $e) {

        DB::rollback();

        Session::flash('message-error','Error, intente nuevamente, o contáctese con el administrador.');
        return Redirect::to('/convocatoriasactivas');

    }

  }


function cerrar_convocatoria(Request $request){

    try {

        DB::beginTransaction();

        DB::table('convocatoria')->where('idpublic', $request['txtidpublic'])->update(['estado' => 'inactiva' ]);

        Session::flash('message','CONVOCATORIA CERRADA.');

        DB::commit();

        return Redirect::to('/convocatoriasactivas');

    } catch (\Exception $e) {

        DB::rollback();

        Session::flash('message-error','Error, intente nuevamente, o contáctese con el administrador.');
        return Redirect::to('/convocatoriasactivas');

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
    public function store(Request $request) {
        
       
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
