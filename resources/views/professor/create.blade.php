@extends('adminlte::page')

@section('title', 'Formulário')

@section('content_header')

@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Formulário de Professor</h3>
        </div>
        <div class="box-body">
            @if (isset($professor))
                {!! Form::model($professor, ['route' => ['professor.update', $professor], 'method' => 'put']) !!}
            @else
            {!! Form::open(['url' => route('professor.store')]) !!}
            @endif
                <div class="form-group">
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('formacao', 'Formação') !!}
                    {!! Form::text('formacao', null, ['class' => 'form-control']) !!}
                    @error('formacao') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('date', 'Data de Nascimento') !!}
                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                    @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="pull-right">
                    <a href="{{ route("professor.index") }}" class="btn btn-default">Cancelar <i class="fas fa-ban"></i></a>
                    {!! Form::button('Salvar <i class="fas fa-save"></i>', ['class' => 'btn btn-primary', 'type' => "submit"]) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
