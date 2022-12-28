@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ganhadores Lotofácil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="padding-left:20px">
                        <p id="demo"></p><br><br><br>
                                            <div class="column" >
                                                <div class="ui segment">
                        
                                                    <div id="chartli2" style="max-width: 500px;height:400px;"></div>
                                                </div>
                                            
                                                 <div class="ui segment">
                        
                                                    <div id="chartli3" style="max-width: 500px;height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                        
                        
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
