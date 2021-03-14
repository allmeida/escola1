@extends('adminlte::page')

@section('title', 'Professor')

@section('content_header')

@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"> Lista de Professor</h3>
        </div>
        <div class="box-body">
            {{$dataTable->table() }}

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
{!! $dataTable->scripts() !!}
@stop
