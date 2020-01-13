@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir collecte</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collectes.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
            <strong>Prenom:</strong>
            {{ $collecte->prenom_collecteur }}
        </div>
        <div class="form-group">
            <strong>Nom:</strong>
            {{ $collecte->nom_collecteur }}
        </div>
        <div class="form-group">
            <strong>Quantité:</strong>
            {{ $collecte->quantite }}
        </div>
        <div class="form-group">
            <strong>Prix unitaire:</strong>
            {{ $collecte->prix_unitaire }}
        </div>
        <div class="form-group">
            <strong>Date de la collecte:</strong>
            {{ $collecte->created_at }}
        </div>
    
    
        
    </div>
 

  
</div>

@endsection