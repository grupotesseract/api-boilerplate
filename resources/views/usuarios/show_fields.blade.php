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

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At') !!}
    <p>{!! $usuario->email_verified_at !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Senha') !!}
    <p>{!! $usuario->password !!}</p>
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
    {!! Form::label('cidade_id', 'Cidade Id') !!}
    <p>{!! $usuario->cidade_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At') !!}
    <p>{!! $usuario->created_at !!}</p>
</div>
