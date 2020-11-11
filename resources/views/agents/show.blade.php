@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir l'agent</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('agents.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
            <strong>Nom:</strong>
            {{ $agents->users->prenom }}   {{ $agents->users->name }}

        </div>
        <div class="form-group">
            <strong>Direction:</strong>
            {{ $agents->direction }}
        </div>
        
    </div>
 

  
</div>

@endsection