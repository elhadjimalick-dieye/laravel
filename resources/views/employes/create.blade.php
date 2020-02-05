@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter un employé</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employes.index') }}"> Retour</a>
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



{!! Form::open(array('route' => 'employes.store','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Prenom</strong>
            {!! Form::text('prenom', null, array('placeholder' => 'Prenom','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Nom</strong>
            {!! Form::text('nom', null, array('placeholder' => 'Nom','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Date de naissance</strong>
            {!! Form::date('date_de_naissance', null, array('placeholder' => 'Departement','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
    <label for="exampleFormControlSelect1">Déparetment</label>

        <div class="form-group">
            <select name="service_id" id="service_id" class="col-xs-12 col-sm-12 col-md-12">
            @foreach($services as $serve)
            <option value="{{ $serve->id}}">{{$serve->libelle}}</option>
            @endforeach
            </select>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Situation matrimoniale</strong>
            {!! Form::text('situation_mat', null, array('placeholder' => 'Situation matrimoniale','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Nombre de part:</strong>
            {!! Form::text('nombre_de_part', null, array('placeholder' => 'Nombre de part','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Debut de contrat:</strong>
            {!! Form::date('date_dentre', null, array('placeholder' => 'Date de debut','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Fin de contrat:</strong>
            {!! Form::date('date_sorti', null, array('placeholder' => 'Date Fin','class' => 'form-control')) !!}
        </div>
    </div>
   
    <br>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-5 ">
    <div class="form-group">

        <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection