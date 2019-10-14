@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">
                <i class="fa fa-home"></i>
                Home
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{!! route('usuarios.index') !!}">
                <i class="fa fa-users"></i>
                Usuários
            </a>
        </li>
        <li class="breadcrumb-item active">Editar</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        @include('coreui-templates::common.errors')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Editar Usuário</div>

                    <div class="card-body">
                        {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'patch']) !!}
                            @include('usuarios.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
