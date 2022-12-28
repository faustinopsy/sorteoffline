@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sorteios Lotofácil {{isset($lotofacil[0])?$lotofacil[0]:''; }}</div>

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
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[1])?$lotofacil[1]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[2])?$lotofacil[2]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[3])?$lotofacil[3]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[4])?$lotofacil[4]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[5])?$lotofacil[5]:'';}}</button>
                        
                        </div>
                        <div class="w3-panel w3-card-4" style="width:100%; text-align: center;">
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[6])?$lotofacil[6]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[7])?$lotofacil[7]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[8])?$lotofacil[8]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[9])?$lotofacil[9]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[10])?$lotofacil[10]:'';}}</button>
                        </div>
                        <div class="w3-panel w3-card-4" style="width:100%; text-align: center;">
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[11])?$lotofacil[11]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[12])?$lotofacil[12]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[13])?$lotofacil[13]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[14])?$lotofacil[14]:'';}}</button>
                        <button class="bola" style="width:50px" id="btn1">{{isset($lotofacil[15])?$lotofacil[15]:'';}}</button>
                    <p id="demo"></p>
                    {{Form::open(['action'=>'App\Http\Controllers\LotofacilController@sorteiosltf','method' => 'POST'])}}
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
