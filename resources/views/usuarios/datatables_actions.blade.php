{!! Form::open(['route' => ['usuarios.destroy', $id], 'method' => 'delete']) !!}
    <a href="{{ route('usuarios.show', $id) }}"
        class='btn btn-sm btn-success'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('usuarios.edit', $id) }}"
        class='btn btn-sm btn-warning'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-sm btn-danger',
        'onclick' => "return confirm('Você tem certeza que deseja excluir esse registro?')"
    ]) !!}
{!! Form::close() !!}
