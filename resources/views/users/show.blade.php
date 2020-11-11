@extends('layouts.admin')


@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir utilisateur</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
            <strong>Prenom:</strong>
            {{ $user->prenom }}
        </div>
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            {{ $user->roles }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Service:</strong>
            {{ $user->services->libelle}}
        </div>
    </div>


    </div>

  
</div>

@endsection