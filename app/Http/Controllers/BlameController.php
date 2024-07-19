<?php

namespace App\Http\Controllers;
use App\Models\persona;

use Illuminate\Http\Request;

class BlameController extends Controller
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

   //Metodo Update
   public function update(Request $request,$id){
    try {
        $data['nombre'] = $request['nombre'];
        $data['edad'] = $request['edad'];
        persona::find($id)->update($data);
        $res = persona::find($id);
        return response()->json( $res , 200);
    } catch (\Throwable $th) {
        return response()->json([ 'error' => $th->getMessage()], 500);
    }
}

public function delete($id){
    try {
        $res = persona::find($id)->delete();
        return response()->json([ "deleted" => $res ], 200);
    } catch (\Throwable $th) {
        return response()->json([ 'error' => $th->getMessage("Deleted Tool")], 500);
    }
}
}
