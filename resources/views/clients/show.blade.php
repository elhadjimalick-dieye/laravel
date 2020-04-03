@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<br>        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('clients.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>
<div class="card col-xs-12 col-sm-12 col-md-7 " style="margin-left:20%">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('Fiche client') }}
    </div>
<br>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-11">
    <div class="form-group"  style="color:black" id='type'>
    <div class="card">
    <center>
  <img src="{{ asset('dist/img/client.jpg') }}" alt="Avatar" style="width:20%">
  </center>
  <div class="container-fluid">
  <center>
  <div >
    <h4><b>{{ $client->nomComplet }}</b></h4>
    </div>
  </center>

<div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11" >
    <strong>Matricule:</strong>
    <p>{{ $client->matricule }}</p>
    </div>

    <div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11">
    <span><strong>Adresse:</strong><p>{{ $client->adresse }}</p></span>
    </div>

    <div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11" >
    <strong>Contact:</strong>
    <p>{{ $client->contact }}</p>
    </div>

    <div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11">
    <strong>Quantite totale acheter:</strong>
    <p>{{ $client->quantitetotale }} KG</p>
    </div>

    <div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11">
    <strong>Montant totale acheter:</strong>
    <p>{{ $client->totaleachete }} FCFA</p>
    </div>

    <div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11">
    <strong>Créance:</strong>
    <p>{{ $client->creance }} FCFA</p>
    </div>

<div style="background-color:#F0F8FF ;margin-left:5%" class="col-xs-12 col-sm-12 col-md-11">
    <strong>Restant du:</strong>
    <p>{{ $client->restant_du }} FCFA</p>
 </div>
  </div>
</div>
        </div>
      
        
    </div>
 

  
</div>
</div>
<br>
<style>
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 0 0;
}</style>
@endsection