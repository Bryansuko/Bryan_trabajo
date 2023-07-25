@extends('layouts.app')

@section('template_title')
    Empleca
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleca') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('emplecas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Empleado Id</th>
										<th>Carrera Id</th>
										<th>Periodo Id</th>
										<th>Fechafin</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emplecas as $empleca)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empleca->empleado->Apellido}}</td>
											<td>{{ $empleca->carrera->nombre }}</td>
											<td>{{ $empleca->periodo->nombre }}</td>
											<td>{{ $empleca->fechafin }}</td>
											<td>{{ $empleca->estado }}</td>

                                            <td>
                                                <form action="{{ route('emplecas.destroy',$empleca->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('emplecas.show',$empleca->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('emplecas.edit',$empleca->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $emplecas->links() !!}
            </div>
        </div>
    </div>
@endsection
