@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Stock matiere plastique  </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('depotCollectes.index') }}"> Retour</a>
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
        {{ trans('Formulaire de sortie des matieres pour la production') }}
    </div>
<br>


{!! Form::open(array('route' => 'depotCollectes.index','method'=>'POST')) !!}
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
            {!! Form::number('quantiteSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
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
            {!! Form::number('ppcopoSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere PPHOMO </strong>
            {!! Form::number('pphomoSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        
        
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere petbouteille </strong>
            {!! Form::number('petbouteilleSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pet preform </strong>
            {!! Form::number('petpreformSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
     <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pehd casier </strong>
            {!! Form::number('pehdcasierSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pehd soufflage </strong>
            {!! Form::number('pehdsoufflageSortante', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
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