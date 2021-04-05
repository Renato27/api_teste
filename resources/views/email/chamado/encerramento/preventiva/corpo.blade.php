@extends('email.chamado.encerramento.layout')

@section('corpo')
<div class="terceiro">
    @if(count($chamado->preventivas) > 0)

    <p>Equipamentos em que foram realizadas as preventivas:</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="linha">Número</th>
                        <th scope="col" class="linha">Tipo</th>
                        <th scope="col" class="linha">Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($preventiva->patrimonios as $patrimonio)
                    <tr style="line-height:0px !important; margin-bottom:0px !important; text-align:center">
                        <th scope="row" class="linha">{{$patrimonio->numero_patrimonio}}</th>
                        <td class="linha">{{$patrimonio->modelo->tipo_patrimonio->nome}}</td>
                        <td class="linha">{{$patrimonio->modelo->nome}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@endif
</div>
@endsection
