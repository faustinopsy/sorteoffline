<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lotofacil extends Model
{
    protected $table='lotofacil';
    use HasFactory;
    public static function combinacoes($k, $dez){
        
        if ($k === 0)
            return array(array());
        if (count($dez) === 0)
            return array();
      
        $x = $dez[0];//armazena a primeira posição do array
        
        $dez1 = array_slice($dez,1,count($dez)-1);//novo array menos 1º elemento que ficou em $x
        
        $res1 = combinacoesDe($k-1,$dez1);//chama a funcao passando menos um elemento e o novo array, e guarda temporariamente o resultado
       
        for ($i = 0; $i < count($res1); $i++) {
            array_splice($res1[$i], 0, 0, $x);//insere o valor de x antes da posição do array res[i]
        }
    
        $res2 = combinacoesDe($k,$dez1);
       
        return array_merge($res1, $res2);
    }
}
