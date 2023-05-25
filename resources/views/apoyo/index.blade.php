@extends('layouts.app')

@section('template_title')
    Apoyo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Apoyo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('apoyos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apoyos as $apoyo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $apoyo->Nombre }}</td>
											<td>{{ $apoyo->Descripcion }}</td>
											<td>{{ $apoyo->Direccion }}</td>
											<td>{{ $apoyo->Telefono }}</td>
											<td>{{ $apoyo->Correo }}</td>

                                            <td>
                                                <form action="{{ route('apoyos.destroy',$apoyo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('apoyos.show',$apoyo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('apoyos.edit',$apoyo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $apoyos->links() !!}
            </div>
        </div>
    </div>
@endsection
