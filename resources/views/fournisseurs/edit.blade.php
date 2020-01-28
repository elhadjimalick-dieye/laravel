@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Modifier utilisateur</h2>
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


{!! Form::model($fournisseur, ['method' => 'PATCH','route' => ['fournisseurs.update', $fournisseur->id]]) !!}
<div class="row" style="margin-left:5%">
<div class="col-xs-12 col-sm-12 col-md-12" >
</div>






    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Nom Complet</strong>
            {!! Form::text('nomComplet', null, array('placeholder' => 'Nom complet','class' => 'form-control')) !!}
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
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Contact</strong>
            {!! Form::text('contact', null, array('placeholder' => 'Contact','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Numero de compte</strong>
            {!! Form::number('numero', null, array('placeholder' => 'Nom complet','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Avance</strong>
            {!! Form::number('avance', null, array('placeholder' => 'Solde','class' => 'form-control')) !!}
        </div>
    </div> 
    
   
 
   
   
    
    <div class="col-xs-12 col-sm-12 col-md-10 ">
        <button type="submit" class="btn btn-success">Soumettre</button>
    </div>
</div>
{!! Form::close() !!}

@endsection