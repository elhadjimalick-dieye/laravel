@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter un fournisseur</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('fournisseurs.index') }}"> Retour</a>
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



{!! Form::open(array('route' => 'fournisseurs.index','method'=>'POST')) !!}
<div class="row" style="margin-left:5%">
<div class="col-xs-12 col-sm-12 col-md-5" >
<div class="col-xs-12 col-sm-12 col-md-12">
    <label for="exampleFormControlSelect1">Type de fournisseur</label>

        <div class="form-group">
            <select name="type" id="type" class="col-xs-12 col-sm-12 col-md-12">
            <option value=""></option>
            @foreach($types as $serve)
            <option value="{{ $serve->id}}">{{$serve->libelle}}</option>
            @endforeach
            </select>
        </div>
    </div>
</div>



    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Nom Complet</strong>
            {!! Form::text('nomComplet', null, array('placeholder' => 'Nom complet','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Contact</strong>
            {!! Form::text('contact', null, array('placeholder' => 'Contact','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Region</strong>
            {!! Form::text('region', null, array('placeholder' => 'Region','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Departement</strong>
            {!! Form::text('departement', null, array('placeholder' => 'Departement','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Commune</strong>
            {!! Form::text('commune', null, array('placeholder' => 'commune','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quartier</strong>
            {!! Form::text('quartier', null, array('placeholder' => 'quartier','class' => 'form-control')) !!}
        </div>
    </div>

 
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 ">
    <div class="form-group">

        <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection