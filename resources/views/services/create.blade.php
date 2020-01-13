@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter un departement</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('services.index') }}"> Retour</a>
        </div>
        <br>

    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'services.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>libelle</strong>
            {!! Form::text('libelle', null, array('placeholder' => 'Libelle','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Direction:</strong>
            {!! Form::text('direction', null, array('placeholder' => 'Direction','class' => 'form-control')) !!}
        </div>
    </div>

    
    
    <div class="col-xs-12 col-sm-12 col-md-5 text-center">
        <button type="submit" class="btn btn-success">Soumettre</button>
    </div>
</div>
{!! Form::close() !!}

@endsection