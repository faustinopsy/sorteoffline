<?php

namespace App\Http\Controllers;

use App\Models\Lotofacil;
use Illuminate\Http\Request;

class LotofacilController extends Controller
{
    public function index()
    {
        return view('lotofacil/index');
    }
    public function api(){
        $start_from = 0;
        $limit = 2;
        $novo=array();
        $lotofacil = Lotofacil::select('B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','B11','B12','B13','B14','B15')
        ->orderBy('Concurso','DESC')
        ->skip(0)
        ->take(5)
        ->get();
      
        foreach($lotofacil as $key=> $value){
           echo $key->$value;
        }
      
        //return Response()->json($novo);
      }
      public function repetidos(){
        $start_from = 0;
        $limit = 5;
        $lotofacil = Lotofacil::orderBy('id','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
        return Response()->json($lotofacil);
      }
}
