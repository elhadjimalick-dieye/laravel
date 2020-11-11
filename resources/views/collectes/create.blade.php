@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter une collecte entreprise</h2>
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

<div class="card col-xs-12 col-sm-12 col-md-10 " style="margin-left:10%">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('Formulaire d\'enregistrement des collectes entreprise') }}
    </div>
<br>



{!! Form::open(array('route' => 'collectes.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-5 " >

        <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <strong>Nom collecteur</strong>
              <select name="fournisseur_id" id="fournisseur_id" class="form-control col-xs-12 col-sm-12 col-md-12">
            <option value="">selectionner un collecteur</option>
            @foreach ($fournisseurs as $four)
            <option value="{{$four->id }}">{{$four->nomComplet}}  </option>
            @endforeach
            </select>
        </div>

        
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Date de reception</strong>
            {!! Form::date('date_collecte', null, array('placeholder' => 'date','class' => 'form-control')) !!}
        </div>
    </div>
  
    
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP copo</strong>
            {!! Form::number('ppcopo', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::number('prixppcopo', null, array('placeholder' => 'prix Unitaire pp copo','class' => 'form-control')) !!}
        </div>
    </div>  
    
      <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP homo</strong>
            {!! Form::number('pphomo', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::number('prixpphomo', null, array('placeholder' => 'prix Unitaire pp homo','class' => 'form-control')) !!}
        </div>
    </div> 

           
      <div class="col-xs-12 col-sm-12 col-md-5 " >
      <div class="form-group">
      <strong>PET BOUTEILLE</strong>

            {!! Form::number('petbouteille', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::number('petbouteilleprix', null, array('placeholder' => 'prix Unitaire pet bouteille','class' => 'form-control')) !!}
        </div>
        </div>   

        <div class="col-xs-12 col-sm-12 col-md-5 " >

        <div class="form-group">
        <strong>PET PREFORM</strong>

            {!! Form::number('petpreform', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::number('petpreformprix', null, array('placeholder' => 'prix Unitaire pet preform','class' => 'form-control')) !!}
        </div>
    </div>   

    
     <div class="col-xs-12 col-sm-12 col-md-5 " >

        <div class="form-group">
        <strong>PEHD CASIER</strong>

            {!! Form::number('pehdcasier', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::number('pehdcasierprix', null, array('placeholder' => 'prix Unitaire pehd casier','class' => 'form-control')) !!}
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >

    <div class="form-group">
        <strong>PEHD SOUFLAGE</strong>

            {!! Form::number('pehdsoufflage', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::number('pehdsoufflageprix', null, array('placeholder' => 'prix Unitaire pehd soufflage','class' => 'form-control')) !!}
        </div>
        </div>
   

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Dechet</strong>
            {!! Form::number('dechet', null, array('placeholder' => 'dechet','class' => 'form-control')) !!}
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
<br>
        <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}
<br>

</div>
@endsection