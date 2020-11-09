@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-12 ">
        <div class="pull-left">
            <h2>Faire sortir de la matiere pour les ateliers  </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('depotProductions.index') }}"> Retour</a>
        </div>
        <br>

    </div>
</div>
@if(Session::has('fail'))
    <div class="alert alert-danger">
       {{Session::get('fail')}}
    </div>
@endif


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
        {{ trans('Formulaire de sortie des matieres pour es ateliers') }}
    </div>
<br>

{!! Form::open(array('route' => 'depotProductions.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-5 " >

<div class="col-xs-12 col-sm-12 col-md-12 " >
        <div class="form-group">
            <strong>Date </strong>
            {!! Form::date('date', null, array('placeholder' => 'date','class' => 'form-control')) !!}
        </div>
    </div>

        
    </div>

   
    
    
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'>Quantite matiere en VRAC </strong>
            {!! Form::number('vracSortant', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
     
    </div>  

    <div class="col-xs-12 col-sm-12 col-md-10" >
        <div class="form-group">
            <strong style='color:green'></strong>
            {!! Form::text('', null, array('disabled','class' => 'form-control')) !!}
        </div>
      
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere PPCOPO </strong>
            {!! Form::number('ppcopoSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere PPHOMO </strong>
            {!! Form::number('pphomoSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        
        
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere petbouteille </strong>
            {!! Form::number('petbouteilleSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pet preform </strong>
            {!! Form::number('petpreformSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
     <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pehd casier </strong>
            {!! Form::number('pehdcasierSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pehd soufflage </strong>
            {!! Form::number('pehdsoufflageSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
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