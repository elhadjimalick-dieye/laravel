@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir Employé</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employes.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
            <strong>Prenom:</strong>
            {{ $employe->prenom }}
        </div>
        <div class="form-group">
            <strong>Nom:</strong>
            {{ $employe->nom }}
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date de naissance:</strong>
            {{ $employe->date_de_naissance }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Matricule:</strong>
            {{ $employe->matricule }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date de debut:</strong>
            {{ $employe->date_dentre }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date fin contrat:</strong>
            {{ $employe->date_sorti }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre de part:</strong>
            {{ $employe->nombre_de_part }}
        </div>
    </div>
  

  
</div>

@endsection