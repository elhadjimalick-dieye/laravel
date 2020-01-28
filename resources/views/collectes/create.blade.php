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

        <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <strong>numero collecte</strong>
              <select name="fournisseur_id" id="fournisseur_id" class="col-xs-12 col-sm-12 col-md-12">
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
            {!! Form::date('date_reception', null, array('placeholder' => 'date','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite</strong>
            {!! Form::number('quantite', null, array('placeholder' => 'quantite','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Prix Unitaire</strong>
            {!! Form::number('prix', null, array('placeholder' => 'prix','class' => 'form-control')) !!}
        </div>
    </div>
        
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Montant</strong>
            {!! Form::number('montant', null, array('placeholder' => 'montant','class' => 'form-control')) !!}
        </div>
    </div>
  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP copo</strong>
            {!! Form::number('ppcopo', null, array('placeholder' => 'PP copo','class' => 'form-control')) !!}
        </div>
    </div>    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP homo</strong>
            {!! Form::number('pphomo', null, array('placeholder' => 'PP homo','class' => 'form-control')) !!}
        </div>
    </div>    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PET</strong>
            {!! Form::number('pet', null, array('placeholder' => 'PET','class' => 'form-control')) !!}
        </div>
    </div>    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PEHD</strong>
            {!! Form::number('pehd', null, array('placeholder' => 'PEHD','class' => 'form-control')) !!}
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

@endsection