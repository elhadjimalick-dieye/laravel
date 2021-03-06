@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Formulaire de Lavage </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('lavages.index') }}"> Retour</a>
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




{!! Form::open(array('route' => 'triages.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>Date</strong>
            {!! Form::date('date', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-4 " >
        <div class="form-group">
            <strong style='color:black'>Effectifs</strong>
            {!! Form::number('effectiflav', null, array('placeholder' => 'nombre de personne','class' => 'form-control')) !!}
        </div>
      
    </div> 
    
    <div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>Dechets</strong>
            {!! Form::number('dechelavage', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
   
<div class="col-xs-12 col-sm-12 col-md-12 " >

<div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:#008B8B;color:white" >
        <div class="form-group">
            <strong><h3> PP</h3> </strong>
        </div>
    </div>

        
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'>Couleur Bleu </strong>
            {!! Form::number('ppbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'>Couleur Blanc </strong>
            {!! Form::number('ppblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:yellow'>Couleur Jaune </strong>
            {!! Form::number('ppjaune', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'>Couleur Vert </strong>
            {!! Form::number('ppvert', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:DarkViolet'>Couleur Mauve </strong>
            {!! Form::number('ppmauve', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:red'>Couleur Rouge </strong>
            {!! Form::number('pprouge', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'>Couleur Jadida </strong>
            {!! Form::number('ppjadida', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:GoldenRod'>Couleur Maron </strong>
            {!! Form::number('ppmaron', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'>Couleur Noire </strong>
            {!! Form::number('ppnoire', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
     <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Multicouleur </strong>
            {!! Form::number('ppmulti', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  
    
  
    <div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:skyblue;color:white">
        <div class="form-group">
            <strong><h3> PEHD</h3> </strong>
        </div>
    </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'> Couleur Bleu</strong>
            {!! Form::number('pehdbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Blanc</strong>
            {!! Form::number('pehdblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:yellow'> Couleur Jaune </strong>
            {!! Form::number('pehdjaune', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'> Couleur Vert </strong>
            {!! Form::number('pehdvert', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Neutre</strong>
            {!! Form::number('pehdneutre', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:red'> Couleur Rouge</strong>
            {!! Form::number('pehdrouge', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Jadida </strong>
            {!! Form::number('pehdjadida', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:GoldenRod'> Couleur Maron </strong>
            {!! Form::number('pehdmaron', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Noire</strong>
            {!! Form::number('pehdnoire', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Multicouleur </strong>
            {!! Form::number('pehdmulti', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
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