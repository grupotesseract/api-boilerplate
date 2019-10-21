{{-- Blade para select de cidades --}}

@if (isset($Model) && $Model->cidade)

    <!-- Select de Cidades  -->
    <div class="form-group">
        {!! Form::label('cidades', 'Cidade') !!} <br>
        {!! Form::select('cidade_id', [''=>'']+$cidades, $Model->cidade->id, ['class' => 'form-control select-cidades select2']) !!}
    </div>

@else

    <!-- Select de Cidades  -->
    <div class="form-group">
        {!! Form::label('cidades', 'Cidade') !!} <br>
        {!! Form::select('cidade_id', [''=>'']+$cidades, null, ['class' => 'form-control select-cidades select2']) !!}
    </div>

@endif
