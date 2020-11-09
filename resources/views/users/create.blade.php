@extends('layouts.admin')


@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Créer un utilisateur</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.index') }}"> Retour</a>
        </div>
        <br>

    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


<div class="card col-xs-12 col-sm-12 col-md-10 " style="margin-left:10%">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('Formulaire d\'ajout des utilisateurs') }}
    </div>
<br>


{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Prenom:</strong>
            {!! Form::text('prenom', null, array('placeholder' => 'Prenom','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Statut:</strong>
            {!! Form::text('statut', null, array('placeholder'=> 'actif','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-5">
    <label for="exampleFormControlSelect1">Roles</label>
    <div class="form-group" >
            <select name="roles" id="roles" class="form-control col-xs-12 col-sm-12 col-md-12" >
            <option value=""></option>

            @foreach($roles as $role)
            <option value="{{ $role->id}}">{{$role->libelle}}</option>
            @endforeach
            </select>
        </div>
  </div>
  

    <div class="col-xs-12 col-sm-12 col-md-5">
    <label for="exampleFormControlSelect1">Déparetment</label>

        <div class="form-group">
            <select name="service_id" id="service_id" class=" form-control col-xs-12 col-sm-12 col-md-12">
            <option value=""></option>

            @foreach($services as $serve)
            <option value="{{ $serve->id}}">{{$serve->libelle}}</option>
            @endforeach
            </select>
        </div>
    </div>

    
   
   
    
    <div class="col-xs-12 col-sm-12 col-md-5 ">
        <button type="submit" class="btn btn-success">Soumettre</button>
    </div>
</div>
{!! Form::close() !!}
<br>

</div>
@endsection