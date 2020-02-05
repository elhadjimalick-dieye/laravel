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
            <strong>Collecteur:</strong>
            {{ $collectEntreprises->fournisseurs->nomComplet }}
        </div>
        <div class="form-group">
            <strong>Date:</strong>
            {{ $collectEntreprises->date_collecte }}
        </div>
        <div class="form-group">
            <strong>Numero de bon:</strong>
            {{ $collectEntreprises->numerobons }}
        </div>
        <div class="form-group">
            <strong>PP HOMO:</strong><br>
            quantite = {{ $collectEntreprises->pphomo }}  kg <br>
            prix unitaire = {{ $collectEntreprises->prixpphomo }}  fr <br>
            montant = {{ $collectEntreprises->prixpphomo*$collectEntreprises->pphomo }}  fr
        </div> 
        <div class="form-group">
            <strong>PP COPO:</strong><br>
            quantite = {{ $collectEntreprises->ppcopo }}  kg <br>
            prix unitaire = {{ $collectEntreprises->prixppcopo }}  fr <br>
            montant = {{ $collectEntreprises->prixppcopo*$collectEntreprises->ppcopo }}  fr        </div>
         <div class="form-group">
            <strong>PET:</strong><br>
            quantite = {{ $collectEntreprises->pet }}  kg <br>
            prix unitaire = {{ $collectEntreprises->prixpet }}  fr <br>
            montant = {{ $collectEntreprises->prixpet*$collectEntreprises->pet }}  fr        </div> 
        <div class="form-group">
            <strong>PEHD:</strong>
            quantite = {{ $collectEntreprises->pehd }}  kg <br>
            prix unitaire = {{ $collectEntreprises->prixpehd }}  fr <br>
            montant = {{ $collectEntreprises->prixpehd*$collectEntreprises->pehd }}  fr   </div>
            <div class="form-group">
            <strong>PP:</strong>
            quantite = {{ $collectEntreprises->pp }}  kg <br>
            prix unitaire = {{ $collectEntreprises->prixpp }}  fr <br>
            montant = {{ $collectEntreprises->prixpp*$collectEntreprises->pp }}  fr   </div>
        <div class="form-group">
            <strong>Dechet:</strong>
            {{ $collectEntreprises->dechet }}
        </div>
        <div class="form-group">
            <strong>Quantite totale:</strong>
            {{ $collectEntreprises->pp+$collectEntreprises->pehd+$collectEntreprises->pet+$collectEntreprises->ppcopo+$collectEntreprises->pphomo}}  kg
        </div>
        <div class="form-group">
            <strong>Montant:</strong>
            {{ $collectEntreprises->prixpp*$collectEntreprises->pp+$collectEntreprises->prixpehd*$collectEntreprises->pehd+$collectEntreprises->prixpet*$collectEntreprises->pet+$collectEntreprises->prixppcopo*$collectEntreprises->ppcopo+$collectEntreprises->prixpphomo*$collectEntreprises->pphomo}}  fr 
        </div>
        
        <div class="form-group">
            <strong>avance:</strong>
            {{ $collectEntreprises->avance }}
        </div>
        <div class="form-group">
            <strong>reglement_definitif:</strong>
            {{ $collectEntreprises->reglement_definitif }}
        </div>
        
    </div>
 
  
</div>

@endsection