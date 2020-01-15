@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir collecteur</h2>
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
            <strong>Collecteur:</strong>
            {{ $collecte->collecteur_id }}
        </div>
        <div class="form-group">
            <strong>quantite:</strong>
            {{ $collecte->quantite }}
        </div>
        <div class="form-group">
            <strong>Prix Unitaire:</strong>
            {{ $collecte->prix_unitaire }}
        </div>
        <div class="form-group">
            <strong>Montant:</strong>
            {{ $collecte->montant }}
        </div>

     
        <div class="form-group">
            <strong>Commentaire:</strong>
            {{ $collecte->commentaitre }}
        </div>
        <div class="form-group">
            <strong>Date:</strong>
            {{ $collecte->created_at }}
        </div>
     
     
    
        
    </div>
 

  
</div>

@endsection