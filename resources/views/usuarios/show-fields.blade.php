<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    <p>{!! $usuario->nome !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'E-mail') !!}
    <p>{!! $usuario->email !!}</p>
</div>

<!-- Telefone Field -->
<div class="form-group">
    {!! Form::label('telefone', 'Telefone') !!}
    <p>{!! $usuario->telefone !!}</p>
</div>

<!-- Endereco Field -->
<div class="form-group">
    {!! Form::label('endereco', 'Endereço') !!}
    <p>{!! $usuario->endereco !!}</p>
</div>

<!-- Cidade Id Field -->
<div class="form-group">
    {!! Form::label('cidade_id', 'Cidade') !!}
    <p>{!! $usuario->cidade->nome !!}</p>
</div>

<!-- Cidade Id Field -->
<div class="form-group">
    {!! Form::label('estado_id', 'Estado') !!}
    <p>{!! $usuario->cidade->estado->nome !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado em') !!}
    <p>{!! $usuario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Atualizado em') !!}
    <p>{!! $usuario->updated_at !!}</p>
</div>

