@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Modifier le stock</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('depotCollectes.index') }}"> Retour</a>
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


{!! Form::model($depotCollecte, ['method' => 'PATCH','route' => ['depotCollectes.update', $depotCollecte->id]]) !!}
<div class="row" style="margin-left:5%">
<div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Total Vrac</strong>
            {!! Form::number('depot', null, array('placeholder' => 'vrac','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP COPO</strong>
            {!! Form::number('ppcopo', null, array('placeholder' => 'ppcopo','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PP HOMO</strong>
            {!! Form::number('pphomo', null, array('placeholder' => 'PP HOMO','class' => 'form-control')) !!}
        </div>
    </div><div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PET</strong>
            {!! Form::number('pet', null, array('placeholder' => 'pet','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>PEHD</strong>
            {!! Form::number('pehd', null, array('placeholder' => 'pehd','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>PP:</strong>
            {!! Form::number('pp', null, array('placeholder' => 'pp','class' => 'form-control')) !!}
        </div>
    </div>
   
   
    <div class="col-xs-12 col-sm-12 col-md-5 ">
    <div class="form-group">

        <button type="submit" class="btn btn-success">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection