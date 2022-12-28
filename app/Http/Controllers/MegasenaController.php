<?php

namespace App\Http\Controllers;

use App\Models\Megasena;
use Illuminate\Http\Request;

class MegasenaController extends Controller
{
    public function index()
    {
        return view('megasena/index');
    }
    public function repetidosmg(){
        $start_from = 0;
        $limit = 10;
        $novo=array();
        $megasena = Megasena::select('B1','B2','B3','B4','B5','B6')
        ->orderBy('Concurso','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
      foreach($megasena as $key=> $value){
        $novo[]=str_pad($megasena[$key]->B1, 1, '0', STR_PAD_LEFT);
        $novo[]=str_pad($megasena[$key]->B2, 1, '0', STR_PAD_LEFT);
        $novo[]=str_pad($megasena[$key]->B3, 1, '0', STR_PAD_LEFT);
        $novo[]=str_pad($megasena[$key]->B4, 1, '0', STR_PAD_LEFT);
        $novo[]=str_pad($megasena[$key]->B5, 1, '0', STR_PAD_LEFT);
        $novo[]=str_pad($megasena[$key]->B6, 1, '0', STR_PAD_LEFT);
      }
      arsort($novo);
        return Response()->json(array_count_values($novo));
      }
      public function sorteiosmg(Request $request){
        $start_from = 0;
        $limit = 1;
        $novo=array();
        $megasena = Megasena::select('Concurso','B1','B2','B3','B4','B5','B6')
        ->where('Data',$request->input('data'))
        ->orderBy('Concurso','DESC')
        ->skip($start_from)
        ->take($limit)
        ->get();
        foreach($megasena as $key=> $value){
          $novo[]=$megasena[$key]->Concurso;
          $novo[]=$megasena[$key]->B1;
          $novo[]=$megasena[$key]->B2;
          $novo[]=$megasena[$key]->B3;
          $novo[]=$megasena[$key]->B4;
          $novo[]=$megasena[$key]->B5;
          $novo[]=$megasena[$key]->B6;
        }
        asort($novo);
        return view('/megasena/sorteios-megasena', array('megasena' => $novo));
        //return Response()->json($lotofacil);
      }
      public function combinacoesmg(Request $request){
        
        //return view('/lotofacil/combinacoesltf', array('lotofacil' => $novo));
        return view('/megasena/combinacoesltf');
      }
}
