@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Faire un depot </h2>
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




{!! Form::open(array('route' => 'depotCollectes.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-10 " >
<div class="col-xs-12 col-sm-12 col-md-12 " >
        <div class="form-group">
            <strong>quantite Entrante</strong>
            {!! Form::number('quantiteEntrante', null, array('placeholder' => 'quantite Entrante','class' => 'form-control')) !!}
        </div>
    </div>
</div>

  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>quantite Sortante</strong>
            {!! Form::number('quantiteSortante', null, array('placeholder' => 'quantite Sortante','class' => 'form-control')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>dechet</strong>
            {!! Form::number('dechet', null, array('placeholder' => 'dechet','class' => 'form-control')) !!}
        </div>
    </div>

    
    <br>
    <br>

    <div class="col-xs-12 col-sm-12 col-md-5 text-center">
    <div class="form-group">

        <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection