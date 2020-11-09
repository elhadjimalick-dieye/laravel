@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Modifier client</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('fournisseurs.index') }}"> Retour</a>
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

@if(Session::has('fail'))
    <div class="alert alert-success">
       {{Session::get('fail')}}
    </div>
@endif

<br>
<div class="card col-xs-12 col-sm-12 col-md-10 " style="margin-left:8%">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('Formulaire pour modifier les informations d\'un client') }}
    </div>
<br>
{!! Form::model($client, ['method' => 'PATCH','route' => ['clients.update', $client->id]]) !!}

<div class="row" style="margin-left:12%">

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Nom complet:</strong>
            {!! Form::text('nomComplet', null, array('placeholder' => 'Nom Complet','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Adresse:</strong>
            {!! Form::text('adresse', null, array('placeholder' => 'Adresse','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Contact:</strong>
            {!! Form::text('contact', null, array('placeholder' => 'Contact','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Montant totale acheter:</strong>
            {!! Form::number('totaleachete', null, array('placeholder' => 'Montant totale acheter','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Quantite totale acheter:</strong>
            {!! Form::number('quantitetotale', null, array('placeholder' => 'Quantite totale acheter','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Créance:</strong>
            {!! Form::number('creance', null, array('placeholder' => 'Créance','class' => 'form-control')) !!}
        </div>
    </div>
 
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Restant du:</strong>
            {!! Form::number('restant_du', null, array('placeholder' => 'Restant du','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 ">
        <button type="submit" class="btn btn-success">Soumettre</button>
    </div>
</div>

{!! Form::close() !!}
<br>

</div>

@endsection