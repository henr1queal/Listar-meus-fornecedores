@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-6 text-center">
                <h1>Veja todos nossos recebimentos:</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%;">#</th>
                            <th scope="col" style="width: 30%;">Empresa</th>
                            <th scope="col" style="width: 30%;">Tipo</th>
                            <th scope="col" style="width: 20%;">Telefone</th>
                            <th scope="col" style="width: 10%;" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulario as $formularios)
                            <tr>
                                <th scope="row">{{ $formularios->id }}</th>
                                <td>{{ $formularios->empresa }}</td>
                                <td>{{ $formularios->tipo }}</td>
                                <td>{{ $formularios->telefone }}</td>
                                <td class="text-center">
                                    <a href="{{-- route('onview') --}}"><i class="bi bi-info-square-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
