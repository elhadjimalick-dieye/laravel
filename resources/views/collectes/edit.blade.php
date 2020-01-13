@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Modifier collecte</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collectes.index') }}"> Retour</a>
        </div>
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


{!! Form::model($collecte, ['method' => 'PATCH','route' => ['collectes.update', $collecte->id]]) !!}
<div class="row" style="margin-left:5%">
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
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

@endsection