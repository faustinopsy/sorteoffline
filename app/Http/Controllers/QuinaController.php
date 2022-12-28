<?php

namespace App\Http\Controllers;

use App\Models\Quina;
use Illuminate\Http\Request;

class QuinaController extends Controller
{
    public function index()
    {
        return view('quina/index');
    }
    public function repetidosqu(){
        $start_from = 0;
        $limit = 5;
        $novo=array();
        $quina = Quina::select('B1','B2','B3','B4','B5','B6')
        ->orderBy('Concurso','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
      foreach($quina as $key=> $value){
        $novo[]=$quina[$key]->B1;
        $novo[]=$quina[$key]->B2;
        $novo[]=$quina[$key]->B3;
        $novo[]=$quina[$key]->B4;
        $novo[]=$quina[$key]->B5;
      }
      arsort($novo);
        return Response()->json(array_count_values($novo));
      }
      public function sorteiosqu(Request $request){
        $start_from = 0;
        $limit = 1;
        $novo=array();
        $quina = Quina::select('Concurso','B1','B2','B3','B4','B5','B6')
        ->where('Data',$request->input('data'))
        ->orderBy('Concurso','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
        foreach($quina as $key=> $value){
          $novo[]=$quina[$key]->Concurso;
          $novo[]=$quina[$key]->B1;
          $novo[]=$quina[$key]->B2;
          $novo[]=$quina[$key]->B3;
          $novo[]=$quina[$key]->B4;
          $novo[]=$quina[$key]->B5;
        }
        asort($novo);
        return view('/quina/sorteios-quina', array('quina' => $novo));
        //return Response()->json($lotofacil);
      }
      public function combinacoesqu(Request $request){
        
        //return view('/lotofacil/combinacoesltf', array('lotofacil' => $novo));
        return view('/quina/combinacoesqu');
      }
}
