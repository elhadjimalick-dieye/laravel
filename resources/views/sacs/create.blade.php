@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Formulaire de mise en sac </h2>
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


{!! Form::model($sac, ['method' => 'PATCH','route' => ['sacs.create', $sac->id]]) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>Date</strong>
            {!! Form::date('date', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>La Quantite de ce quart</strong>
            {!! Form::number('sac', null, array('placeholder' => 'quantite en kg','disabled','class' => 'form-control')) !!}
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


