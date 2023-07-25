@extends('layouts.app')

@section('template_title')
    Usuarios Rol
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios Rol') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios-rols.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Usuarios Id</th>
										<th>Rol Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuariosRols as $usuariosRol)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuariosRol->usuarios_id }}</td>
											<td>{{ $usuariosRol->rol_id }}</td>

                                            <td>
                                                <form action="{{ route('usuarios-rols.destroy',$usuariosRol->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios-rols.show',$usuariosRol->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuarios-rols.edit',$usuariosRol->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuariosRols->links() !!}
            </div>
        </div>
    </div>
@endsection
