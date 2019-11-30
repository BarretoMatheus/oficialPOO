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
                    @foreach($alunos as $aluno)
                    <li>{{$aluno->id}}</li>
                    <li>{{$aluno->nome}}</li>
                    <li>{{$aluno->sobrenome}}</li>
                    <li>{{$aluno->email}}</li>
                    <li>{{$aluno->telefone}}</li>
                    <li>{{$aluno->cursos_id}}</li>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
