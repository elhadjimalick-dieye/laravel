@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-10 ">
        <div class="pull-left">
            <h2>Formulaire de sortie de matiere pour le commercial. </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('stockproduitfinis.index') }}"> Stock produit fini</a>
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


{!! Form::open(array('route' => 'sortiepourventes.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>Date</strong>
            {!! Form::date('stock->date', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-4 " >
        <div class="form-group">
            <strong style='color:black'>Quantite totale</strong>
            {!! Form::number('$stock->totale', null, array('placeholder' => 'quantite en kg','disabled','class' => 'form-control')) !!}
        </div>
      
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-3 " >
        <div class="form-group">
            <strong style='color:black'>Sac de (25kg)</strong>
            {!! Form::number('sac', null, array('placeholder' => 'nombre de sac','disabled','class' => 'form-control')) !!}
        </div>
      
    </div> 
    
  
   
<div class="col-xs-12 col-sm-12 col-md-12 " >

<div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:#008B8B;color:white" >
        <div class="form-group">
            <strong><h3> PP COPO</h3> </strong>
        </div>
    </div>

        
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'>Couleur Bleu </strong>
            {!! Form::number('ppcoposacbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'>Couleur Blanc </strong>
            {!! Form::number('ppcoposacblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:yellow'>Couleur Jaune </strong>
            {!! Form::number('ppcoposacjaune', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'>Couleur Vert </strong>
            {!! Form::number('ppcoposacvert', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:DarkViolet'>Couleur Mauve </strong>
            {!! Form::number('ppcoposacmauve', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:red'>Couleur Rouge </strong>
            {!! Form::number('ppcoposacrouge', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'>Couleur Jadida </strong>
            {!! Form::number('ppcoposacjadida', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:GoldenRod'>Couleur Maron </strong>
            {!! Form::number('ppcoposacmaron', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'>Couleur Noire </strong>
            {!! Form::number('ppcoposacnoire', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
     <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Multicouleur </strong>
            {!! Form::number('ppcoposacmulti', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:#008B8B;color:white">
        <div class="form-group">
            <strong><h3> PP HOMO</h3> </strong>
        </div>
    </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'> Couleur Bleu</strong>
            {!! Form::number('pphomosacbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Blanc</strong>
            {!! Form::number('pphomosacblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:yellow'> Couleur Jaune </strong>
            {!! Form::number('pphomosacjaune', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'> Couleur Vert </strong>
            {!! Form::number('pphomosacvert', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Neutre</strong>
            {!! Form::number('pphomosacmauve', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:red'> Couleur Rouge</strong>
            {!! Form::number('pphomosacrouge', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Jadida </strong>
            {!! Form::number('pphomosacjadida', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:GoldenRod'> Couleur Maron </strong>
            {!! Form::number('pphomosacmaron', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Noire</strong>
            {!! Form::number('pphomosacnoire', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Multicouleur </strong>
            {!! Form::number('pphomosacmulti', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
  
    <div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:green;color:white">
        <div class="form-group">
            <strong><h3> PET PREFORME</h3> </strong>
        </div>
    </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'> Couleur Bleu</strong>
            {!! Form::number('petpreformsacbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Blanc</strong>
            {!! Form::number('petpreformsacblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>

    <div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:green;color:white">
        <div class="form-group">
            <strong><h3> PET BOUTEILLE</h3> </strong>
        </div>
    </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'> Couleur Bleu</strong>
            {!! Form::number('petbouteillesacbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Blanc</strong>
            {!! Form::number('petbouteillesacblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:skyblue;color:white">
        <div class="form-group">
            <strong><h3> PEHD CASIER</h3> </strong>
        </div>
    </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'> Couleur Bleu</strong>
            {!! Form::number('pehdcasiersacbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Blanc</strong>
            {!! Form::number('pehdcasiersacblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:yellow'> Couleur Jaune </strong>
            {!! Form::number('pehdcasiersacjaune', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'> Couleur Vert </strong>
            {!! Form::number('pehdcasiersacvert', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Neutre</strong>
            {!! Form::number('pehdcasierneutre', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:red'> Couleur Rouge</strong>
            {!! Form::number('pehdcasiersacrouge', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Jadida </strong>
            {!! Form::number('pehdcasiersacjadida', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:GoldenRod'> Couleur Maron </strong>
            {!! Form::number('pehdcasiersacmaron', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Noire</strong>
            {!! Form::number('pehdcasiersacnoire', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Multicouleur </strong>
            {!! Form::number('pehdcasiersacmulti', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 


 
    <div class="col-xs-12 col-sm-12 col-md-10 card-header" style="background-color:skyblue;color:white">
        <div class="form-group">
            <strong><h3> PEHD SOUFFLAGE</h3> </strong>
        </div>
    </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:blue'> Couleur Bleu</strong>
            {!! Form::number('pehdsouflagesacbleu', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Blanc</strong>
            {!! Form::number('pehdsouflagesacblanc', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:yellow'> Couleur Jaune </strong>
            {!! Form::number('pehdsouflagesacjaune', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:green'> Couleur Vert </strong>
            {!! Form::number('pehdsouflagesacvert', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Neutre</strong>
            {!! Form::number('pehdsouflageneutre', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:red'> Couleur Rouge</strong>
            {!! Form::number('pehdsouflagesacrouge', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Jadida </strong>
            {!! Form::number('pehdsouflagesacjadida', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:GoldenRod'> Couleur Maron </strong>
            {!! Form::number('pehdsouflagesacmaron', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Couleur Noire</strong>
            {!! Form::number('pehdsouflagesacnoire', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong style='color:black'> Multicouleur </strong>
            {!! Form::number('pehdsouflagesacmulti', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
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


