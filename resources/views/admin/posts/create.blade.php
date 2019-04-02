@extends('admin.layout')
@section('header')
    <h1>
        Crear un nuevo Post</h1>
        <small>Sección que permite crear un nuevo post para el Blog</small>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Posts</a></li>
        <li class="active">Crear Post</li>
    </ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{ route('admin.posts.store') }}">
    {{ csrf_field() }}
    <div class="col-md-8">
        <div class="box box-primary">
                <div class="box-body">
                    <!--Título del Post-->
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label>Título del Post</label>
                        <input name="title"
                        class="form-control"
                        value="{{old('title')}}"
                        placeholder="Ingresa el título del post">
                    </div>
                    <!--En caso que haya error con el título del post, imprimimos un mensaje-->
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    <!--Contenido del Post-->
                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                        <label>Contenido del Post</label>
                        <textarea name="body"
                        rows="10"
                        id="editor"
                        class="form-control"
                        placeholder="Escribe aquí el Post completo...">{{old('body')}}</textarea>
                        <!--En caso que haya error con el contenido del post, imprimimos un mensaje-->
                        {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
        </div>
    </div>
    <div class="col-md-4">
            <div class="box box-primary">
                    <div class="box-body">
                        <!--Fecha de Publicación-->
                        <div class="form-group">
                            <label>Fecha de Publicación</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="published_at"
                                type="text"
                                class="form-control pull-right"
                                value {{old('published_at')}}
                                id="datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!--Categoría a la que pertenece el Post-->
                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label>Categorías</label>
                            <select name="category" class="form-control">
                                <option value="">Selecciona una categoría</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                    {{old('category') == $category->id ? 'selected' : ''}}
                                    >{{ $category->id }}.- {{ $category->name }}</option>
                                @endforeach
                            </select>
                            <!--En caso que haya error con la selección de la categoría del post, imprimimos un mensaje-->
                            {!! $errors->first('category', '<span class="help-block">:message</span>') !!}
                        </div>
                        <!--Extracto del Post-->
                        <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                            <label>Extracto del Post</label>
                            <textarea name="excerpt"
                            class="form-control"
                            value="{{ old('excerpt') }}"
                            placeholder="Ingresa el extracto del post...">{{old('excerpt')}}</textarea>
                            <!--En caso que haya error con el extracto del post, imprimimos un mensaje-->
                            {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
                        </div>
                        <!--Botón para Guardar el Post-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Publicar Post en el Blog</button>
                        </div>
                    </div>
            </div>
        </div>
    </form>
</div>


@stop

@push('style')
<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
@endpush

@push('scripts')
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<!--Date Picker-->
<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
//Date picker
    $('#datepicker').datepicker({
    autoclose: true
    });

    CKEDITOR.replace('editor')
</script>
@endpush
<!-- bootstrap datepicker -->

