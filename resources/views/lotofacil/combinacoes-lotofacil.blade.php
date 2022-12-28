@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Combinações Lotofácil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                    if($_POST){
                        $recebido=!empty($_POST['data'])?$_POST['data']:'';
                        $tamanho=$_POST['gerador'];
                        $dezenas=[];
                        if($tamanho>18 || $tamanho<15){
                            ?>
                            <script>
                               setTimeout(function() {
                                     M.toast({html: '<h4>Dezenas fora do limite estabelecido, de 15 a 18</h4>', classes: 'rounded'})
                               }, 500);
                               </script>
                             
                               <?php 
                        }else{
                        for($i=0;$i<$tamanho;$i++){
                            array_push($dezenas,$recebido[$i]);
                        }
                        
                        //$dezenas =[1,2,3,4,5,6,7,8,9,20,21,22,23,24,13,14,15,16];
                        
                        sort($dezenas);
                        function combinacoesDe($k, $dez){
                            if ($k === 0)
                                return array(array());
                            if (count($dez) === 0)
                                return array();
                            $x = $dez[0];
                        
                            $dez1 = array_slice($dez,1,count($dez)-1);
                        
                            $res1 = combinacoesDe($k-1,$dez1);
                        
                            for ($i = 0; $i < count($res1); $i++) {
                                array_splice($res1[$i], 0, 0, $x);
                            }
                            $res2 = combinacoesDe($k,$dez1);
                        
                            return array_merge($res1, $res2);
                        }
                         $resultado = combinacoesDe(15,$dezenas);
                         //var_dump( $dezenas); 
                         echo count($resultado).' Combinações<br>';
                         echo ' <table><tbody>';
                         echo '<thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>nº 1</th>
                                      <th>nº 2</th>
                                      <th>nº 3</th>
                                      <th>nº 4</th>
                                      <th>nº 5</th>
                                      <th>nº 6</th>
                                      <th>nº 7</th>
                                      <th>nº 8</th>
                                      <th>nº 9</th>
                                      <th>nº 10</th>
                                      <th>nº 11</th>
                                      <th>nº 12</th>
                                      <th>nº 13</th>
                                      <th>nº 14</th>
                                      <th>nº 15</th>
                                  </tr>
                                </thead>';
                         $id=0;
                        foreach($resultado as $value){
                            $id+=1;
                            echo '<tr>';
                            echo '<td>'. $id.'</td>';
                            echo '<td>'. $value[0].'</td>';
                            echo '<td>'. $value[1].'</td>';
                            echo '<td>'. $value[2].'</td>';
                            echo '<td>'. $value[3].'</td>';
                            echo '<td>'. $value[4].'</td>';
                            echo '<td>'. $value[5].'</td>';
                            echo '<td>'. $value[6].'</td>';
                            echo '<td>'. $value[7].'</td>';
                            echo '<td>'. $value[8].'</td>';
                            echo '<td>'. $value[9].'</td>';
                            echo '<td>'. $value[10].'</td>';
                            echo '<td>'. $value[11].'</td>';
                            echo '<td>'. $value[12].'</td>';
                            echo '<td>'. $value[13].'</td>';
                            echo '<td>'. $value[14].'</td>';
                            echo '</tr>';
                            
                        }
                        echo ' </tbody></table>';
                        
                        }
                        }
                        ?>
                    <div class="w3-container" style="width:100%; text-align: center;">
                        <p id="demo"></p>
                        <div class="w3-panel w3-card-4" >
                      <button class="btn btn-outline-info" style="width:50px" id="btn1"> 01 </button>
                      <button class="btn btn-outline-info"  style="width:50px" id="btn2"> 02 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn3"> 03 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn4"> 04 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn5"> 05 </button></div>
                        <div class="w3-panel w3-card-4">
                      <button class="btn btn-outline-info" style="width:50px" id="btn6"> 06 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn7"> 07 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn8"> 08 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn9"> 09 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn10"> 10 </button></div>
                        <div class="w3-panel w3-card-4">
                      <button class="btn btn-outline-info" style="width:50px" id="btn11"> 11 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn12"> 12 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn13"> 13 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn14"> 14 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn15"> 15 </button></div>
                         <div class="w3-panel w3-card-4">
                      <button class="btn btn-outline-info" style="width:50px" id="btn16"> 16 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn17"> 17 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn18"> 18 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn19"> 19 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn20"> 20 </button></div>
                      <div class="w3-panel w3-card-4">
                      <button class="btn btn-outline-info" style="width:50px" id="btn21"> 21 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn22"> 22 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn23"> 23 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn24"> 24 </button>
                      <button class="btn btn-outline-info" style="width:50px" id="btn25"> 25 </button></div>
                      
                   
                                      
                        
                        
                           
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" action="combinacoes-lotofacil" > 
    <div class="container">
     <button type="submit" name="submit" id="insere" >Gerar combinações</button><p>
<div class="container">
    <div class="input-field col s2">
    <input  size="3" id="num1"  name="data[0]" value=""  readonly required hidden>
    <input  size="3" id="num2" name="data[1]" value="" readonly required hidden>
    <input  size="3" id="num3" name="data[2]" value="" readonly required hidden>
    </div>
     <div class="input-field col s2">   
    <input  size="3" id="num4" name="data[3]" value="" readonly required hidden>
    <input  size="3" id="num5" name="data[4]" value="" readonly required hidden>
    <input  size="3" id="num6" name="data[5]" value="" readonly required hidden>
    </div>
     <div class="input-field col s2">   
    <input  size="3" id="num7" name="data[6]" value="" readonly required hidden>
    <input  size="3" id="num8" name="data[7]" value="" readonly required hidden>
    <input  size="3" id="num9" name="data[8]" value="" readonly required hidden>
    </div>
     <div class="input-field col s2">   
    <input  size="3" id="num10" name="data[9]" value="" readonly required hidden>
    <input  size="3" id="num11" name="data[10]" value="" readonly required hidden>
    <input  size="3" id="num12" name="data[11]" value="" readonly required hidden>
    
   </div>
   <div class="input-field col s2">   
    <input  size="3" id="num13" name="data[12]" value="" readonly required hidden>
    <input  size="3" id="num14" name="data[13]" value="" readonly required hidden>
    <input  size="3" id="num15" name="data[14]" value="" readonly required hidden>
    
    </div>
    <div class="input-field col s2">   
    <input  size="3" id="num16" name="data[15]" value="" readonly required hidden>
    <input  size="3" id="num17" name="data[16]" value="" readonly required hidden>
    <input  size="3" id="num18" name="data[17]" value="" readonly required hidden>
    <input  size="3" id="gerador" name="gerador" value="" readonly required hidden>
    </div>
    
       <input  size="3" id="b1" value="" hidden>
   <div class="form-group">
       
   </div> 
   
  </form>
</div>
<div class="input-field col s6">
    <input type="number" id="numeros" name="numeros" min="15" max="18" placeholder="selecione entre 15 e 18" required class="validate" onchange="numeros()">
    <span class="helper-text" data-error="Selecione entre 15 e 18" data-success="OK"></span>
    <label for="selecione">selecione entre 15 e 18</label>
            </div>
      <input type="range" id="slider" min="15" max="18" onchange="numeros()"/>
<script>

let gerador;
gerador= 17;
   function numeros(){
    let gerador;
       gerador= document.querySelector("#numeros").value;
       gerador= 17;
       //gerador= document.getElementById("numeros").value;
       //gerador= document.getElementById("numeros").value;
   } 
   
   
       
     $("#btn1").click(function(){
       $("#b1").val('1');
       $("#btn1").toggleClass("black");
       $("#btn1").toggleClass("x");
       verifica();
       
     });
      $("#btn2").click(function(){
     $("#b1").val('2');
     $("#btn2").toggleClass("black");
     $("#btn2").toggleClass("x");
        verifica();
     
     });
     $("#btn3").click(function(){
     $("#b1").val('3');
     $("#btn3").toggleClass("black");
     $("#btn3").toggleClass("x");
     verifica();
       
     });
      $("#btn4").click(function(){
     $("#b1").val('4');
     $("#btn4").toggleClass("black");
     $("#btn4").toggleClass("x");
     verifica();
        
     });
      $("#btn5").click(function(){
     $("#b1").val('5');
     $("#btn5").toggleClass("black");
     $("#btn5").toggleClass("x");
     verifica();
       
     });
      $("#btn6").click(function(){
     $("#b1").val('6');
     $("#btn6").toggleClass("black");
     $("#btn6").toggleClass("x");
    verifica();
       
     });
      $("#btn7").click(function(){
     $("#b1").val('7');
     $("#btn7").toggleClass("black");
     $("#btn7").toggleClass("x");
   verifica();
       
     });
      $("#btn8").click(function(){
     $("#b1").val('8');
     $("#btn8").toggleClass("black");
     $("#btn8").toggleClass("x");
    verifica();
     });
      $("#btn9").click(function(){
     $("#b1").val('9');
     $("#btn9").toggleClass("black");
     $("#btn9").toggleClass("x");
     verifica();
        
     });
      $("#btn10").click(function(){
     $("#b1").val('10');
     $("#btn10").toggleClass("black");
     $("#btn10").toggleClass("x");
     verifica();
       
     });
       $("#btn11").click(function(){
     $("#b1").val('11');
     $("#btn11").toggleClass("black");
     $("#btn11").toggleClass("x");
     verifica();
       
     });
      $("#btn12").click(function(){
     $("#b1").val('12');
     $("#btn12").toggleClass("black");
     $("#btn12").toggleClass("x");
     verifica();
       
     });
     
      $("#btn13").click(function(){
     $("#b1").val('13');
     $("#btn13").toggleClass("black");
     $("#btn13").toggleClass("x");
    verifica();
       
     });
      $("#btn14").click(function(){
     $("#b1").val('14');
     $("#btn14").toggleClass("black");
     $("#btn14").toggleClass("x");
     verifica();
      });
      
      $("#btn15").click(function(){
     $("#b1").val('15');
     $("#btn15").toggleClass("black");
     $("#btn15").toggleClass("x");
     verifica();
       
     });
      $("#btn16").click(function(){
     $("#b1").val('16');
     $("#btn16").toggleClass("black");
     $("#btn16").toggleClass("x");
     verifica();
      
     });
      $("#btn17").click(function(){
     $("#b1").val('17');
     $("#btn17").toggleClass("black");
     $("#btn17").toggleClass("x");
     verifica();
      
     });
      $("#btn18").click(function(){
     $("#b1").val('18');
     $("#btn18").toggleClass("black");
     $("#btn18").toggleClass("x");
     verifica();
       
     });
      $("#btn19").click(function(){
     $("#b1").val('19');
     $("#btn19").toggleClass("black");
     $("#btn19").toggleClass("x");
     verifica();
      
     });
      $("#btn20").click(function(){
     $("#b1").val('20');
     $("#btn20").toggleClass("black");
     $("#btn20").toggleClass("x");
     verifica();
       
     });
      $("#btn21").click(function(){
     $("#b1").val('21');
     $("#btn21").toggleClass("black");
     $("#btn21").toggleClass("x");
     verifica();
       
     });
      $("#btn22").click(function(){
     $("#b1").val('22');
     $("#btn22").toggleClass("black");
     $("#btn22").toggleClass("x");
    verifica();
       
     });
      $("#btn23").click(function(){
     $("#b1").val('23');
     $("#btn23").toggleClass("black");
     $("#btn23").toggleClass("x");
     verifica();
       
     });
      $("#btn24").click(function(){
     $("#b1").val('24');
     $("#btn24").toggleClass("black");
     $("#btn24").toggleClass("x");
     verifica();
        
     });
      $("#btn25").click(function(){
     $("#b1").val('25');
     $("#btn25").toggleClass("black");
     $("#btn25").toggleClass("x");
     verifica();
        
     });
     
    
   
   
   let jogo = [];
   
   
   function verifica() {
       if(jogo.length<=0){
           jogo.push(0);
       }
      
   const numbers1 = [document.getElementById("b1").value];
   var nomesajustado;
   var filtered = jogo.filter(function(e) {
         return this.indexOf(e) >=0 ;
       },
       numbers1
   );
   
   function posicao(pos) {
     return pos == numbers1;
   }
   if(jogo.findIndex(posicao)===-1){
     adiciona();
   }else{
     remove();
   }
   if(jogo.length<=gerador){
         //var x=document.getElementById("b1").value;   
     
      jogo.sort();
     
   //console.log(jogo.length);
     document.getElementById("demo").innerHTML = jogo.length;
     
     }else {
          jogo.sort(function(a, b) {
     return a - b;
          });
       $("#btn1").hide();
       $("#btn2").hide();
       $("#btn3").hide();
       $("#btn4").hide();
       $("#btn5").hide();
       $("#btn6").hide();
       $("#btn7").hide();
       $("#btn8").hide();
       $("#btn9").hide();
       $("#btn10").hide();
       $("#btn11").hide();
       $("#btn12").hide();
       $("#btn13").hide();
       $("#btn14").hide();
       $("#btn15").hide();
       $("#btn16").hide();
       $("#btn17").hide();
       $("#btn18").hide();
       $("#btn19").hide();
       $("#btn20").hide();
       $("#btn21").hide();
       $("#btn22").hide();
       $("#btn23").hide();
       $("#btn24").hide();
       $("#btn25").hide();
       $("#insere").show();
       $("#insere").css("background-color", "green")
       $("#num1").hide();
       $("#num2").hide();
       $("#num3").hide();
       $("#num4").hide();
       $("#num5").hide();
       $("#num6").hide();
       $("#num7").hide();
       $("#num8").hide();
       $("#num9").hide();
       $("#num10").hide();
       $("#num11").hide();
       $("#num12").hide();
       $("#num13").hide();
       $("#num14").hide();
       $("#num15").hide();
       $("#num16").hide();
       $("#num17").hide();
       $("#num18").hide();
       
     $("#demo").show();
      
       var suaString= jogo.toString();
     var array = suaString.split(',');
             var var0 = array[0];
               var var1 = array[1];
               var var2 = array[2];
               var var3 = array[3];
               var var4 = array[4];
               var var5 = array[5];
               var var6 = array[6];
               var var7 = array[7];
               var var8 = array[8];
               var var9 = array[9];
               var var10 = array[10];
               var var11 = array[11];
               var var12 = array[12];
               var var13 = array[13];
               var var14= array[14];
               var var15= array[15];
               var var16= array[16];
               var var17= array[17];
               var var18= array[18];
               
               //	document.getElementById('xxx').value=suaString;
               document.getElementById('num1').value=var1.padStart(2, '0');
               document.getElementById('num2').value=var2.padStart(2, '0');
               document.getElementById('num3').value=var3.padStart(2, '0');
               document.getElementById('num4').value=var4.padStart(2, '0');
               document.getElementById('num5').value=var5.padStart(2, '0');
               document.getElementById('num6').value=var6.padStart(2, '0');
               document.getElementById('num7').value=var7.padStart(2, '0');
               document.getElementById('num8').value=var8.padStart(2, '0');
               document.getElementById('num9').value=var9.padStart(2, '0');
               document.getElementById('num10').value=var10;
               document.getElementById('num11').value=var11;
               document.getElementById('num12').value=var12;
               document.getElementById('num13').value=var13;
               document.getElementById('num14').value=var14;
               document.getElementById('num15').value=var15;
               document.getElementById('num16').value=var16;
               document.getElementById('num17').value=var17;
               document.getElementById('num18').value=var18;
           
     }
   }
   function remove() {
   const numbers1 = [document.getElementById("b1").value];
   var nomesajustado;
   var filtered = jogo.filter(function(e) {
         return this.indexOf(e) >=0 ;
       },
       numbers1
   );
   
   function posicao(pos) {
     return pos == numbers1;
   }
   jogo.splice(jogo.findIndex(posicao), 1);
   jogo.sort();
   //document.getElementById("demo").innerHTML = jogo;
   }
   
   function adiciona() {
       
     
    tam=jogo.length;
   
   jogo.push(document.getElementById("b1").value);
   
     
   }
   
   
   </script>
   @endsection