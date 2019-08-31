{{-- Blade para select de cidades --}}

@if (isset($Model) && $Model->cidade)

<!-- Select de Cidades  -->
<div class="form-group">
    {!! Form::label('cidades', 'Cidade') !!} <br>
    {!! Form::select('cidade_id', $cidades, $Model->cidade->id, ['class' => 'form-control ']
    ) !!}
</div>

@else

<!-- Select de Cidades  -->
<div class="form-group">
    {!! Form::label('cidades', 'Cidade') !!} <br>
    {!! Form::select('cidade_id', [''=>'']+$cidades, null, ['class' => 'form-control ']
    ) !!}
</div>

@endif
