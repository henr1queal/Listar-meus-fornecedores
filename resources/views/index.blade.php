@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="row justify-content-center mt-5">
                    <div class="col-6 text-center">
                        <h1 class="mb-0">Formulário</h1>
                        <h4 class="mb-0">Preencha este formulário para se tornar um fornecedor visionário.</h4>
                    </div>
                    {{-- {{ $formulario->endereco; }} --}}
                </div>
            </div>
        </div>
        <form action="{{ route('novo_formulario') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row g-3 mt-1">
                        <div class="col-2">
                            <input type="number" class="form-control form-control-sm" placeholder="Código"
                                aria-label="Codigo" name="codigo">
                        </div>
                        <div class="col-5">
                            <input required type="text" class="form-control form-control-sm" placeholder="Tipo"
                                name="tipo" aria-label="Tipo">
                        </div>
                        <div class="col-5">
                            <input required type="text" class="form-control form-control-sm" placeholder="Sub-tipo"
                                aria-label="Sub-tipo" name="subtipo">
                        </div>
                        <div class="col-3">
                            <input required type="text" class="form-control form-control-sm" placeholder="Empresa"
                                aria-label="Empresa" name="empresa">
                        </div>
                        <div class="col-4">
                            <input required type="text" class="form-control form-control-sm" placeholder="Descritivo"
                                aria-label="Descritivo" name="descritivo">
                        </div>
                        <div class="col-5">
                            <input required type="url" class="form-control form-control-sm" placeholder="Site"
                                aria-label="Site" name="site">
                        </div>
                        <div class="col-6">
                            <input required type="email" class="form-control form-control-sm" placeholder="E-mail"
                                aria-label="Email" name="email">
                        </div>
                        <div class="col-3">
                            <input required type="tel" class="form-control form-control-sm" placeholder="Contato"
                                aria-label="Contato" name="contato">
                        </div>
                        <div class="col-3">
                            <input required type="tel" class="form-control form-control-sm" placeholder="Celular"
                                aria-label="Celular" name="celular">
                        </div>
                        <div class="col-3">
                            <input required type="tel" class="form-control form-control-sm" placeholder="Telefone"
                                aria-label="Telefone" name="telefone">
                        </div>
                        <div class="col-5">
                            <input required type="text" class="form-control form-control-sm" placeholder="Endereço"
                                aria-label="Endereco" name="endereco">
                        </div>
                        <div class="col-3">
                            <input required type="text" class="form-control form-control-sm" placeholder="Bairro"
                                aria-label="Bairro" name="bairro">
                        </div>
                        <div class="col-1">
                            <input required type="number" class="form-control form-control-sm" placeholder="Nº"
                                aria-label="Numero" name="numero_casa">
                        </div>
                        <div class="col-12 text-center mt-3">
                            <input type="submit" value="Enviar" class="btn btn-success btn-sm">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
