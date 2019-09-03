<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Senha') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereço') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

@if (isset($usuario))

    <div class="form-group col-sm-6">
        @include('estados.select', [
            'Model' => $usuario
        ])
    </div>
    <div class="form-group col-sm-6">
        @include('cidades.select', [
            'Model' => $usuario
        ])
    </div>

@else

    <div class="form-group col-sm-6">
        @include('estados.select')
    </div>
    <div class="form-group col-sm-6">
        @include('cidades.select')
    </div>

@endif


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
