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

class ConvocatoriasInactivasController extends Controller {

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
                ->where('convocatoria.estado','=','inactiva')
                ->orderBy('fecha', 'desc')
                ->paginate(10);  

                return view('convocatoriasinactivas.index',['sql'=>$sql]);  

            } 
            elseif ((Auth::user()->privilegio==1) || (Auth::user()->privilegio==2)) {
                if($query1<>""){
                    $sqlAdm=DB::table('convocatoria')
                    ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                  
                    ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                  
                    ->where('convocatoria.estado','=','inactiva')
                    ->where('titulo','LIKE','%'.$query1.'%')
                    ->orderBy('fecha', 'desc')
                    ->paginate(10);  
                     $prub="";
                     $fech= "";
                    return view('convocatoriasinactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$query1,"searchText2"=>$prub,"searchText3"=>$fech,"searchText4"=>$fech]); 
                } else{
                    if ($query2<>"") {
                        $sqlAdm=DB::table('convocatoria')
                        ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                      
                        ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                      
                        ->where('convocatoria.estado','=','inactiva')
                        ->where('nombre','LIKE','%'.$query2.'%')
                        ->orderBy('fecha', 'desc')
                        ->paginate(10);  
                         $prub="";
                         $fech= "";
                        return view('convocatoriasinactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$query2,"searchText3"=>$fech,"searchText4"=>$fech]); 
                    }
                    elseif($query3<>NULL && $query4<>NULL){
                        $sqlAdm=DB::table('convocatoria')
                        ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                      
                        ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                      
                        ->where('convocatoria.estado','=','inactiva')
                         ->whereBetween('fecha', [$query3, $query4])
                        ->orderBy('fecha', 'desc')
                        ->paginate(10);  
                         $prub="";
                         $fech= "";
                        return view('convocatoriasinactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$prub,"searchText3"=>$query3,"searchText4"=>$query4]);   
                    }else{
                        $sqlAdm=DB::table('convocatoria')
                        ->join('categoria','convocatoria.idcat','=','categoria.idcat')
                      
                        ->select('nombre','idpublic','titulo','descripcion','fecha','estado')
                      
                        ->where('convocatoria.estado','=','inactiva')
                         
                        ->orderBy('fecha', 'desc')
                        ->paginate(10);  
                         $prub="";
                         $fech= "";
                        return view('convocatoriasinactivas.index',['sqlAdm'=>$sqlAdm,"searchText"=>$prub,"searchText2"=>$prub,"searchText3"=>$fech,"searchText4"=>$fech]);     
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
