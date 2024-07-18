<?php

namespace App\Http\Controllers;
use App\Models\persona;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
     //Metodos get
     public function get(){
        try{
            $data = persona::get();
            return response()->json($data, 200);
        } catch (\Throwable $th){
            return response()->json(['error' => $th ->getMessage()],500);
        }
       }

           //Metodo crear
   public function create(Request $request){
    try {
        $data['nombre'] = $request['nombre'];
        $data['edad'] = $request['edad'];
        $res = persona::create($data);
        return response()->json( $res, 200);
    } catch (\Throwable $th) {
        return response()->json([ 'error' => $th->getMessage()], 500);
    }
   }
}