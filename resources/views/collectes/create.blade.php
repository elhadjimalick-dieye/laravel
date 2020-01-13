@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter un collecteurs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collectes.index') }}"> Retour</a>
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



{!! Form::open(array('route' => 'collectes.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Prenom</strong>
            {!! Form::text('prenom_collecteur', null, array('placeholder' => 'Prenom','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Nom</strong>
            {!! Form::text('nom_collecteur', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantité</strong>
            {!! Form::text('quantite', null, array('placeholder' => 'Quantité','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Prix unitaire</strong>
            {!! Form::text('prix_unitaire', null, array('placeholder' => 'Prix Unitaire','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Montant</strong>
            {!! Form::text('montant', null, array('placeholder' => 'Montant','class' => 'form-control')) !!}
        </div>
    </div>

    
    <br>
    <div class="col-xs-12 col-sm-12 col-md-5 text-center">
    <div class="form-group">

        <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection