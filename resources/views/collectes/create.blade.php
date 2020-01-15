@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter un collecteurs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collecteurs.index') }}"> Retour</a>
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

        <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <strong>Collecteur</strong>
              <select name="collecteur_id" id="collecteur_id" class="col-xs-12 col-sm-12 col-md-12">
            <option value="">Choisir un collecteur</option>
            @foreach ($collecteurs as $colecteur)
            <option value="{{$colecteur->id }}">{{$colecteur->nomComplet}}  </option>
            @endforeach
            </select>
        </div>

        
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite</strong>
            {!! Form::number('quantite', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Prix Unitaire</strong>
            {!! Form::number('prix_unitaire', null, array('placeholder' => 'Region','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Lieu</strong>
            {!! Form::text('lieu', null, array('placeholder' => 'Region','class' => 'form-control')) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP COPO</strong>
            {!! Form::number('pp_copo', null, array('placeholder' => 'PP COPO','class' => 'form-control')) !!}
        </div>
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP HOMO</strong>
            {!! Form::number('pp_homo', null, array('placeholder' => 'PP HOMO','class' => 'form-control')) !!}
        </div>
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PEHD</strong>
            {!! Form::number('pehd', null, array('placeholder' => 'PEHD','class' => 'form-control')) !!}
        </div>
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PET</strong>
            {!! Form::number('pet', null, array('placeholder' => 'Region','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Montant</strong>
            {!! Form::number('montant', null, array('placeholder' => 'Departement','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Dechet</strong>
            {!! Form::number('dechet', null, array('placeholder' => 'Dechet','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Commentaire</strong>
            {!! Form::text('commentaire', null, array('placeholder' => 'Commentaire','class' => 'form-control')) !!}
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