@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @foreach($coordenadors as $coordenador)
                    <li>{{$coordenador->id}}</li>
                    <li>{{$coordenador->nome}}</li>
                    <li>{{$coordenador->sobrenome}}</li>
                    <li>{{$coordenador->email}}</li>
                    <li>{{$coordenador->telefone}}</li>
                    <li>{{$coordenador->cursos_id}}</li>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
