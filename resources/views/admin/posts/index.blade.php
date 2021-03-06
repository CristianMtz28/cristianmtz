@extends('admin.layout')
@section('header')
    <h1>
        Todos los Post</h1>
        <small>Sección que muestra todos los post en el Blog</small>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Posts</li>
    </ol>
@stop
@section('content')


<div class="box">
        <div class="box-header">
          <h3 class="box-title">Listado de Posts</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="posts-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Post</th>
                    <th>Título del Post</th>
                    <th>Extracto del Post</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->excerpt }}  </td>
                    <td>
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach

            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
      </div>

@stop
