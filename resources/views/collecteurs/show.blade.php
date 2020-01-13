@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir collecteur</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collecteurs.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
            <strong>Prenom:</strong>
            {{ $collecteur->prenom }}
        </div>
        <div class="form-group">
            <strong>Nom:</strong>
            {{ $collecteur->nom }}
        </div>
        <div class="form-group">
            <strong>Region:</strong>
            {{ $collecteur->region }}
        </div>
        <div class="form-group">
            <strong>Departement:</strong>
            {{ $collecteur->departement }}
        </div>
        <div class="form-group">
            <strong>Ville:</strong>
            {{ $collecteur->ville }}
        </div>
        <div class="form-group">
            <strong>Quartier:</strong>
            {{ $collecteur->quartier }}
        </div>
        <div class="form-group">
            <strong>Téléphone:</strong>
            {{ $collecteur->telephone }}
        </div>
    
        
    </div>
 

  
</div>

@endsection