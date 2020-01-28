@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir fournisseur</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('fournisseurs.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
  
        <div class="form-group">
            <strong>Nom Complet:</strong>
            {{ $fournisseur->nomComplet }}
        </div>
        <div class="form-group">
            <strong>Region:</strong>
            {{ $fournisseur->region }}
        </div>
        <div class="form-group">
            <strong>Departement:</strong>
            {{ $fournisseur->departement }}
        </div>
        <div class="form-group">
            <strong>Commune:</strong>
            {{ $fournisseur->commune }}
        </div>
        <div class="form-group">
            <strong>Quartier:</strong>
            {{ $fournisseur->quartier }}
        </div>
        <div class="form-group">
            <strong>Contact:</strong>
            {{ $fournisseur->contact }}
        </div>
        <div class="form-group">
            <strong>Solde:</strong>
            {{ $fournisseur->solde }}
        </div><div class="form-group" style="color:green">
            <strong >Numero de compte:</strong>
            {{ $fournisseur->numero }}
        </div>
        <div class="form-group" style="color:red">
            <strong>Credit:</strong>
            {{ $fournisseur->credit }}
        </div>
        
    </div>
 

  
</div>

@endsection