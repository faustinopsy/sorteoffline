@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Quina') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="btn-group">
                        <a class="nav-link" href="ganhadores-quina">
                             <button type="button" class="btn btn-primary">Ganhadores</button>
                        </a>
                        <a class="nav-link" href="repetidos-quina">
                        <button type="button" class="btn btn-primary">Repetidos</button>
                        </a>
                        <a class="nav-link" href="sorteios-quina">
                        <button type="button" class="btn btn-primary">Sorteios</button>
                        </a>
                        <a class="nav-link" href="combinacoes-quina">
                        <button type="button" class="btn btn-primary">Combinações</button>
                        </a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
