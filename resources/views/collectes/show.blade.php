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
            {{ $collectEntreprises->fournisseurs->nomComplet }}
        </div>
        <div class="form-group">
            <strong>quantite:</strong>
            {{ $collectEntreprises->quantite }}
        </div>
        <div class="form-group">
            <strong>Prix Unitaire:</strong>
            {{ $collectEntreprises->prix }}
        </div>
        <div class="form-group">
            <strong>Montant:</strong>
            {{ $collectEntreprises->montant }}
        </div>

        <div class="form-group">
            <strong>PP HOMO:</strong>
            {{ $collectEntreprises->pphomo }}
        </div> 
        <div class="form-group">
            <strong>PP COPO:</strong>
            {{ $collectEntreprises->ppcopo }}
        </div>
         <div class="form-group">
            <strong>PET:</strong>
            {{ $collectEntreprises->pet }}
        </div> 
        <div class="form-group">
            <strong>PEHD:</strong>
            {{ $collectEntreprises->pehd }}
        </div>
        <div class="form-group">
            <strong>Dechet:</strong>
            {{ $collectEntreprises->dechet }}
        </div>
        
        <div class="form-group">
            <strong>prix unitaire:</strong>
            {{ $collectEntreprises->prix }}
        </div><div class="form-group">
            <strong>montant:</strong>
            {{ $collectEntreprises->montant }}
        </div><div class="form-group">
            <strong>avance:</strong>
            {{ $collectEntreprises->avance }}
        </div>
        <div class="form-group">
            <strong>reglement_definitif:</strong>
            {{ $collectEntreprises->reglement_definitif }}
        </div>
        <div class="form-group">
            <strong>Date:</strong>
            {{ $collectEntreprises->date_reception }}
        </div>
     
     

        
    </div>
 

  
</div>

@endsection