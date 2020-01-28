@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir collecte</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('brutes.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
  
        <div class="form-group">
            <strong>quantite:</strong>
            {{ $brute->quantite }}
        </div>
        <div class="form-group">
            <strong>Prix Unitaire:</strong>
            {{ $brute->prix_unitaire }}
        </div>
        <div class="form-group">
            <strong>Montant:</strong>
            {{ $brute->montant }}
        </div>
        <div class="form-group">
            <strong>Lieu:</strong>
            {{ $brute->lieu }}
        </div>
        <div class="form-group">
            <strong>Numero:</strong>
            {{ $brute->numero }}
        </div>
     
        <div class="form-group">
            <strong>Commentaire:</strong>
            {{ $brute->commentaire }}
        </div>
        <div class="form-group">
            <strong>Date:</strong>
            {{ $brute->created_at }}
        </div>
     
     
    
        
    </div>
 

  
</div>

@endsection