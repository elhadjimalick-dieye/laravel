@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Ajouter une collecte recuplast</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collecterecuplasts.index') }}"> Retour</a>
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



{!! Form::open(array('route' => 'collecterecuplasts.index','method'=>'POST')) !!}
<div class="row" style="margin-left:5%">
<div class="col-xs-12 col-sm-12 col-md-12" >
</div>




    <div class="col-xs-12 col-sm-12 col-md-5">
    <label for="exampleFormControlSelect1">Nom du Fournisseur</label>

        <div class="form-group">
            <select name="fournisseur" id="fournisseur" class="col-xs-12 col-sm-12 col-md-12">
            <option value="" >selectionner un fournisseur</option>
            <option value=""></option>
            @foreach($fournisseurs as $f)
            <option value="{{ $f->id}}">{{$f->nomComplet}}</option>
            @endforeach
            </select>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Date reception</strong>
            {!! Form::date('date_reception', null, array('placeholder' => '','class' => 'form-control')) !!}
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
            <strong>Prix unitaire</strong>
            {!! Form::number('prix', null, array('placeholder' => 'prix unitaire','class' => 'form-control')) !!}
        </div>
    </div>
    
  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Commentaire</strong>
            {!! Form::text('commentaire', null, array('placeholder' => 'commentaire','class' => 'form-control')) !!}
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