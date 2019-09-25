@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{!! route('usuarios.index') !!}">
                <i class="fa fa-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item active">Usuários</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-users"></i>
                            Usuários
                            <a class="pull-right" href="{!! route('usuarios.create') !!}">
                                <i class="fa fa-plus-square fa-lg"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            @include('usuarios.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
