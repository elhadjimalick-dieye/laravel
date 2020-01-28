@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Detail de la collecte </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('payementrecuplasts.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
  
        <div class="form-group">
            <strong>Nom Complet du collecteur:</strong>
            {{ $collecteRecuplasts->fournisseurs->nomComplet }}
        </div>
        <div class="form-group">
            <strong>Date:</strong>
            {{ $collecteRecuplasts->date_reception }}
        </div>
        <div class="form-group">
            <strong>Quantite:</strong>
            {{ $collecteRecuplasts->quantite }} kg
                    </div>
        <div class="form-group">
            <strong>Prix unitaire:</strong>
            {{ $collecteRecuplasts->prix }} fcfa
            
                    </div>
        <div class="form-group">
            <strong>Montant:</strong>
            {{ $collecteRecuplasts->quantite*$collecteRecuplasts->prix }} fr        </div>
        <div class="form-group">
            <strong>Avance:</strong>
            {{ $collecteRecuplasts->avance }}        </div>
        <div class="form-group">
            <strong>Credit:</strong>
            {{ $collecteRecuplasts->quantite*$collecteRecuplasts->prix - $collecteRecuplasts->avance }} 
                   </div><div class="form-group">
            <strong>reglement definitif:</strong>
            {{ $collecteRecuplasts->regelement_definitif }}        </div>
    
        
    </div>
 
  
</div>

@endsection