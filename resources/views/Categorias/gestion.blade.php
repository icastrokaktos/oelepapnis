@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Principal
@endsection

@section('contentheader_title')
    Cuadro Resumen
@endsection

@section('contentheader_description')
    Sin Papeleo v1.0
@endsection

@section('main-content')

    <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Gestión de Categorías</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Categoría</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Nombre de la Categoría">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar</button>
                    <button class="btn btn-info pull-right" id="btn-save">Ingresar</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <button class="btn btn-info pull-right" id="btn-save">Ingresar</button>

@endsection
