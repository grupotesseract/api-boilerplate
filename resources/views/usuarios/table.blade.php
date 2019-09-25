@section('css')
    @include('layouts.datatables-css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@section('scripts')
    @include('layouts.datatables-js')
    {!! $dataTable->scripts() !!}
@endsection
