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
    public function repetidosltf(){
        $start_from = 0;
        $limit = 5;
        $novo=array();
        $lotofacil = Lotofacil::select('B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','B11','B12','B13','B14','B15')
        ->orderBy('Concurso','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
      foreach($lotofacil as $key=> $value){
        $novo[]=$lotofacil[$key]->B1;
        $novo[]=$lotofacil[$key]->B2;
        $novo[]=$lotofacil[$key]->B3;
        $novo[]=$lotofacil[$key]->B4;
        $novo[]=$lotofacil[$key]->B5;
        $novo[]=$lotofacil[$key]->B6;
        $novo[]=$lotofacil[$key]->B7;
        $novo[]=$lotofacil[$key]->B8;
        $novo[]=$lotofacil[$key]->B9;
        $novo[]=$lotofacil[$key]->B10;
        $novo[]=$lotofacil[$key]->B11;
        $novo[]=$lotofacil[$key]->B12;
        $novo[]=$lotofacil[$key]->B13;
        $novo[]=$lotofacil[$key]->B14;
        $novo[]=$lotofacil[$key]->B15;
      }
      arsort($novo);
        return Response()->json(array_count_values($novo));
      }
      public function sorteiosltf(Request $request){
        $start_from = 0;
        $limit = 1;
        $novo=array();
        $lotofacil = Lotofacil::select('Concurso','B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','B11','B12','B13','B14','B15')
        ->where('Data',$request->input('data'))
        ->orderBy('Concurso','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
        foreach($lotofacil as $key=> $value){
          $novo[]=$lotofacil[$key]->Concurso;
          $novo[]=$lotofacil[$key]->B1;
          $novo[]=$lotofacil[$key]->B2;
          $novo[]=$lotofacil[$key]->B3;
          $novo[]=$lotofacil[$key]->B4;
          $novo[]=$lotofacil[$key]->B5;
          $novo[]=$lotofacil[$key]->B6;
          $novo[]=$lotofacil[$key]->B7;
          $novo[]=$lotofacil[$key]->B8;
          $novo[]=$lotofacil[$key]->B9;
          $novo[]=$lotofacil[$key]->B10;
          $novo[]=$lotofacil[$key]->B11;
          $novo[]=$lotofacil[$key]->B12;
          $novo[]=$lotofacil[$key]->B13;
          $novo[]=$lotofacil[$key]->B14;
          $novo[]=$lotofacil[$key]->B15;
        }
        asort($novo);
        return view('/lotofacil/sorteios-lotofacil', array('lotofacil' => $novo));
        //return Response()->json($lotofacil);
      }
      public function combinacoesltf(Request $request){
        
        //return view('/lotofacil/combinacoesltf', array('lotofacil' => $novo));
        return view('/lotofacil/combinacoesltf');
      }
}
