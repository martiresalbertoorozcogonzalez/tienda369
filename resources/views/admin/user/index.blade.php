@extends('plantilla.admin')


@section('titulo', 'Administración de Usuarios')

@section('breadcrumb')
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection


@section('contenido')



<div id="confirmareliminar" class="row">

  <span style="display:none;" id="urlbase">{{route('admin.category.index')}}</span>
  @include('custom.modal_eliminar')
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sección de Usuarios</h3>

          <div class="card-tools">
            
            <form>              
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="nombre" class="form-control float-right" 
                placeholder="Buscar"
                value="{{ request()->get('nombre') }}"
                >

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
                <a class=" m-2 float-right btn btn-primary"  href="{{ route('admin.user.create') }}">Crear</a>
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($user as $users)
               
                    <tr>
                        <td> {{ $users->id }} </td>
                        <td> {{ $users->name }} </td>
                        <td> {{ $users->email }} </td>
                        <td> 
                          @foreach ($users->roles as $role)
                           {{ $role->display_name }} 
                          @endforeach
                        </td>
                        <td> <a class="btn btn-default"  
                            href="">Ver</a>
                        </td>
                        <td> <a class="btn btn-info" 
                            href="">Editar</a>
                        </td>

                        <td> <a class="btn btn-danger" 
                            href="{{ route('admin.user.index') }}" 
                            v-on:click.prevent="deseas_eliminar"
                            >Eliminar</a>
                        </td>
                        
                    </tr>
                @endforeach
             
              
            </tbody>
          </table>
          {{--  {{ $user->appends($_GET)->links() }}  --}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->



 @endsection     