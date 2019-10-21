@extends('layouts.app')

@endsection

@section('content')
    <div class="container-fluid">
        @include('coreui-templates::common.errors')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-square-o fa-lg"></i>
                        <strong>Criar Usuário</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'usuarios.store']) !!}
                            @include('usuarios.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
