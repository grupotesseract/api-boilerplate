@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('usuarios.index') !!}">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{!! route('usuarios.index') !!}">
                <i class="fa fa-users"></i> Usuário
            </a>
        </li>
        <li class="breadcrumb-item active">Detalhes</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Detalhes

                            <a href="{!! route('usuarios.index') !!}" class="btn btn-outline-secondary pull-right">Voltar</a>
                        </div>
                        <div class="card-body">
                            @include('usuarios.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
