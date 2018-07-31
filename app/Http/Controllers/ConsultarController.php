<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Session;
use Redirect;
use DB;

class ConsultarController extends Controller
{
   function index(Request $request) {  
       if($request){
             $query1=trim($request->get('searchText1'));
             $query2=trim($request->get('searchText2'));
            
                    if($query1<>""){

                        $sqlAdm=DB::table('categoria')
                        ->join('prov_cat','prov_cat.idcat','=','categoria.idcat')
                        ->join('proveedor','prov_cat.id','=','proveedor.id')
                      
                        ->select('categoria.idcat','nombre','proveedor')
                      
                         
                        ->where('proveedor.id','=',$query1)
                  
                        
                        ->paginate(10);
                       $prub="";

                    return view('consultar.index',['sqlAdm'=>$sqlAdm,"searchText1"=>$prub,"searchText2"=>$prub]); 
                    }
                    else{
                        if ($query2<>"") {
                            $sqlAdm=DB::table('categoria')
		                        ->join('prov_cat','prov_cat.idcat','=','categoria.idcat')
		                        ->join('proveedor','prov_cat.id','=','proveedor.id')
		                      
		                        ->select('categoria.idcat','nombre','proveedor')
		                      
		                        
		                        ->where('categoria.idcat','=',$query2)
		                  
		                        
		                        ->paginate(10);
		                     $prub="";  

		                    return view('consultar.index',['sqlAdm'=>$sqlAdm,"searchText1"=>$prub,"searchText2"=>$prub]); 
                        }
                        else{
                            $sqlAdm=DB::table('categoria')
		                        ->join('prov_cat','prov_cat.idcat','=','categoria.idcat')
		                        ->join('proveedor','prov_cat.id','=','proveedor.id')
		                      
		                        ->select('categoria.idcat','nombre,proveedor')
		                      
		                        
		                        ->where('proveedor.id','=',$query1)
		                  
		                        
		                        ->paginate(10);
		                       

		                    return view('consultar.index',['sqlAdm'=>$sqlAdm,"searchText1"=>$query1,"searchText2"=>$query2]); 
                        }
                    }
                }
                
        }        
  

   
}
