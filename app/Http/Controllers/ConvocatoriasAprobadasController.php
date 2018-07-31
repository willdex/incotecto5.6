<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;

use Auth;
use Session;
use Redirect;
use DB;

class ConvocatoriasAprobadasController extends Controller {

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
                $sql=DB::table('convocatoria')
                ->join('prov_conv','convocatoria.idpublic','=','prov_conv.idpublic')
                ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                ->select('nombre','convocatoria.idpublic','titulo','descripcion','fecha', 'fecha_ad')
                ->where('prov_conv.id','=',Auth::user()->id)
                ->orderBy('fecha_ad', 'desc')
                ->paginate(10);        
                return view('convocatoriasaprobadas.index',['sql'=>$sql]);  
            }
            elseif ((Auth::user()->privilegio==1) || (Auth::user()->privilegio==2)) {
                if($query1<>""){
                    $sqlAdm=DB::table('categoria')
                    ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
                    ->join('prov_conv','convocatoria.idpublic','=','prov_conv.idpublic')
                    ->join('proveedor','proveedor.id','=','prov_conv.id')
                    ->select('nombre','proveedor','prov_conv.idpublic','titulo','descripcion','fecha','fecha_ad')
                    ->where('titulo','LIKE','%'.$query1.'%')
                    ->orderBy('fecha_ad', 'desc')
                    ->paginate(10);   
                     $prub="";
                     $fech= "";      
                    return view('convocatoriasaprobadas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$query1,"searchText2"=>$prub,"searchText3"=>$fech,"searchText4"=>$fech]); 
                }
                else{
                    if ($query2<>"") {
                        $sqlAdm=DB::table('categoria')
                        ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
                        ->join('prov_conv','convocatoria.idpublic','=','prov_conv.idpublic')
                        ->join('proveedor','proveedor.id','=','prov_conv.id')
                        ->select('nombre','proveedor','prov_conv.idpublic','titulo','descripcion','fecha','fecha_ad')
                        ->where('nombre','LIKE','%'.$query2.'%')
                        ->orderBy('fecha_ad', 'desc')
                        ->paginate(10);   
                         $prub="";
                         $fech= "";      
                        return view('convocatoriasaprobadas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$query2,"searchText3"=>$fech,"searchText4"=>$fech]); 
                    }
                    elseif($query3<>NULL && $query4<>NULL){
                        $sqlAdm=DB::table('categoria')
                        ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
                        ->join('prov_conv','convocatoria.idpublic','=','prov_conv.idpublic')
                        ->join('proveedor','proveedor.id','=','prov_conv.id')
                        ->select('nombre','proveedor','prov_conv.idpublic','titulo','descripcion','fecha','fecha_ad')
                         ->whereBetween('fecha', [$query3, $query4])
                        ->orderBy('fecha_ad', 'desc')
                        ->paginate(10);   
                         $prub="";
                         $fech= "";      
                        return view('convocatoriasaprobadas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$prub,"searchText3"=>$query3,"searchText4"=>$query4]);   
                    }else{ 
                         $sqlAdm=DB::table('categoria')
                        ->join('convocatoria','categoria.idcat','=','convocatoria.idcat')
                        ->join('prov_conv','convocatoria.idpublic','=','prov_conv.idpublic')
                        ->join('proveedor','proveedor.id','=','prov_conv.id')
                        ->select('nombre','proveedor','prov_conv.idpublic','titulo','descripcion','fecha','fecha_ad')
                          
                        ->orderBy('fecha_ad', 'desc')
                        ->paginate(10);   
                         $prub="";
                         $fech= "";      
                        return view('convocatoriasaprobadas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$prub,"searchText3"=>$fech,"searchText4"=>$fech]);     
                    }
                }

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
