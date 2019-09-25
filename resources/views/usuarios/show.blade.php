@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('usuarios.index') !!}">
                <i class="fa fa-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{!! route('usuarios.index') !!}">Usuário</a>
        </li>
        <li class="breadcrumb-item active">Detalhes</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Detalhes</strong>
                            <a href="{!! route('usuarios.index') !!}" class="btn btn-ghost-light">Voltar</a>
                        </div>
                        <div class="card-body">
                            @include('usuarios.show-fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
