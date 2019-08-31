{{-- Blade para select de cidades --}}

@if (isset($Model) && $Model->cidade)

<!-- Select de Categorias  -->
<div class="form-group col-sm-12">
    {!! Form::label('cidades', 'Cidade') !!} <br>
    {!! Form::select('cidade_id', $cidades, $Model->cidade->id, ['class' => 'form-control ']
    ) !!}
</div>

@else

<!-- Select de Categorias  -->
<div class="form-group col-sm-12">
    {!! Form::label('cidades', 'Cidade') !!} <br>
    {!! Form::select('cidade_id', $cidades, null, ['class' => 'form-control ']
    ) !!}
</div>

@endif
