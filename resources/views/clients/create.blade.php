@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter un client</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('clients.index') }}"> Retour</a>
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

<div class="card col-xs-12 col-sm-12 col-md-7 " style="margin-left:20%">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('Formulaire d\'ajout des clients') }}
    </div>
<br>

{!! Form::open(array('route' => 'clients.store','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
    <div class="col-xs-12 col-sm-12 col-md-10 " >
        <div class="form-group">
            <strong>Nom complet:</strong>
            {!! Form::text('nomComplet', null, array('placeholder' => 'Nom Complet','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10">
        <div class="form-group">
            <strong>Adresse:</strong>
            {!! Form::text('adresse', null, array('placeholder' => 'Adresse','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10">
        <div class="form-group">
            <strong>Contact:</strong>
            {!! Form::text('contact', null, array('placeholder' => 'Contact','class' => 'form-control')) !!}
        </div>
    </div>
 
 

    <div class="col-xs-12 col-sm-12 col-md-10 ">
        <button type="submit" class="btn btn-success">Soumettre</button>
    </div>
</div>

{!! Form::close() !!}
<br>

</div>
@endsection