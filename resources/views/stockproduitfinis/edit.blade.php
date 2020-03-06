@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-12 ">
        <div class="pull-left">
            <h2>Ajouter la quantite de PEHD sur le Granule</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('sacs.index') }}"> Retour</a>
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


{!! Form::model($stock, ['method' => 'PATCH','route' => ['stockproduitfinis.update', $stock->id]]) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>Date</strong>
            {!! Form::date('date', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>La Quantite totale</strong>
            {!! Form::number('totale', null, array('placeholder' => 'quantite en kg','disabled','class' => 'form-control')) !!}
        </div>
      
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-2 " >
        <div class="form-group">
            <strong style='color:black'>Pehd Soufflage</strong>
            {!! Form::number('extrude', null, array('placeholder' => 'nombre de personne','disabled','class' => 'form-control')) !!}
        </div>
      
    </div> 
    
    <div class="col-xs-12 col-sm-12 col-md-2 " >
        <div class="form-group">
            <strong style='color:black'>Granulé</strong>
            {!! Form::number('granule', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
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


