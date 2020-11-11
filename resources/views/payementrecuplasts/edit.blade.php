@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Payer la collecte</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('payementrecuplasts.index') }}"> Retour</a>
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


{!! Form::model($collecteRecuplasts, ['method' => 'PATCH','route' => ['payementrecuplasts.update', $collecteRecuplasts->id]]) !!}
<div class="row" style="margin-left:5%">
<div class="col-xs-12 col-sm-12 col-md-12" >
</div>




    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Avance</strong>
            {!! Form::number('avance', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
    </div>

  
      


    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Reglement definitif</strong>
            {!! Form::number('regelement_definitif', null, array('placeholder' => 'quantite','class' => 'form-control')) !!}
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