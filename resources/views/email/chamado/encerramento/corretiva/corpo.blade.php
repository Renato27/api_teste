@extends('email.chamado.encerramento.layout')

@section('corpo')
<div class="terceiro">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="linha">Número</th>
                <th scope="col" class="linha">Tipo</th>
                <th scope="col" class="linha">Modelo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($corretiva->patrimonio as $patrimonio)
                <tr>
                    <th scope="row" class="linha">{{$patrimonio->numero_patrimonio}}</th>
                    <td class="linha">{{$patrimonio->modelo->tipo_patrimonio->nome}}</td>
                    <td class="linha">{{$patrimonio->modelo->nome}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
