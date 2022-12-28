@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sorteios Megasena {{isset($megasena[0])?$megasena[0]:''; }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- @foreach ($lotofacil as $sorte)
                    {{$sorte}}
                    @endforeach --}}
                    
                     <div class="w3-panel w3-card-4" style="width:100%; text-align: center;">
                        <button class="bola" style="width:50px" id="btn1">{{isset($megasena[1])?$megasena[1]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($megasena[2])?$megasena[2]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($megasena[3])?$megasena[3]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($megasena[4])?$megasena[4]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($megasena[5])?$megasena[5]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($megasena[6])?$megasena[6]:'';}}</button>
                        </div>
                        
                    <p id="demo"></p>
                    {{Form::open(['action'=>'App\Http\Controllers\MegasenaController@sorteiosmg','method' => 'POST'])}}
                    {{Form::label('concurso','Concurso')}}
                    {{Form::date('data','',['class'=>'form-control','required','placeholder'=>'data'])}}
                    
                    {{ Form::button('Buscar', ['type' => 'submit', 'class'=>'btn btn-light' ,'onClick' => 'buscar()']) }}
                    {{Form::close()}}
                    
                    <script>
                        const d = new Date();
                    let dia=d.getDate();
                    let mes=d.getMonth()+1;
                    let ano=d.getFullYear();
                        var dataconcurso= document.querySelector("#data").value;
                        if(dataconcurso==null){
                            dataconcurso=dia+'/'+mes+'/'+ano;
                            busca();
                        }
                        function busca(){
       
       
                        var x;
                        var dados = [];
                        var data = new FormData();
                        data.append("concurso", dataconcurso);
                    
                        var xhr = new XMLHttpRequest();
                        xhr.withCredentials = true;
                    
                        xhr.addEventListener("readystatechange", function() {
                          if(this.readyState === 4) {
                        x =JSON.parse(this.responseText);
                        console.log(x);
                        
                        for(let i=1;i<=25;i++){
                                dados.push((typeof x[i]==="undefined") ? 0 : parseInt(x[i] ));
                                
                            }
                            console.log(dados);
                    }
                    });
                            
                            xhr.open("POST", "http://localhost/sorteiosltf/");
                        
                            xhr.send(data);
                            
                }
                            </script>
     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
