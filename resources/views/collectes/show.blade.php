@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Voir une collecte Entreprise</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collectes.index') }}"> Retour</a>
        </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-12">
  
<!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>{{ $collectEntreprises->fournisseurs->nomComplet }}<sup style="font-size: 20px"></sup></h4>

                <p>Nom de Collecteur</p>
              </div>
              <div class="icon">
              <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
  
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
            <h4>{{ $collectEntreprises->date_collecte }}<sup style="font-size: 20px"></sup></h4>

                <p>Date de la collecte </p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>{{ $collectEntreprises->numerobons }}<sup style="font-size: 20px"></sup></h3>

                <p>Numero de la collecte </p>
              </div>
              <div class="icon">
              <i class="fas fa-sort-numeric-up-alt"></i>
            </div>
            </div>
          </div>
         </div>
          <!-- ./col -->
        
          <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>Quantite =   {{ $collectEntreprises->petbouteille }}<sup style="font-size: 20px"></sup> kg</h6>
                <h6>Prix unitaire  =   {{ $collectEntreprises->petbouteilleprix }}<sup style="font-size: 20px"></sup> fr</h6>
                <h6>Montant     =  {{ $collectEntreprises->petbouteilleprix*$collectEntreprises->petbouteille }}<sup style="font-size: 20px"></sup> fr</h4>

                <h4>Pet bouteille</h4>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
  
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h6>Quantite =   {{ $collectEntreprises->petpreform }}<sup style="font-size: 20px"></sup> kg</h6>
                <h6>Prix unitaire  =   {{ $collectEntreprises->petpreformprix }}<sup style="font-size: 20px"></sup> fr</h6>
                <h6>Montant     =  {{ $collectEntreprises->petpreformprix*$collectEntreprises->petpreform }}<sup style="font-size: 20px"></sup> fr</h4>

                <h4>Pet preform</h4>              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Quantite  =  {{ $collectEntreprises->petpreform+$collectEntreprises->petbouteille }}<sup style="font-size: 15px">  kg</sup></h5>
                <h5>Montant     =  {{$pet=$collectEntreprises->petpreformprix*$collectEntreprises->petpreform+$collectEntreprises->petbouteilleprix*$collectEntreprises->petbouteille }}<sup style="font-size: 15px">  fr</sup></h4>
                <h3> Total PET </h3>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
         </div>

        
         <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>Quantite =   {{ $collectEntreprises->ppcopo }}<sup style="font-size: 20px"></sup> kg</h6>
                <h6>Prix unitaire  =   {{ $collectEntreprises->prixppcopo }}<sup style="font-size: 20px"></sup> fr</h6>
                <h6>Montant     =  {{ $collectEntreprises->prixppcopo*$collectEntreprises->ppcopo }}<sup style="font-size: 20px"></sup> fr</h4>

                <h4>PP copo</h4>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
  
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h6>Quantite =   {{ $collectEntreprises->pphomo }}<sup style="font-size: 20px"></sup> kg</h6>
                <h6>Prix unitaire  =   {{ $collectEntreprises->prixpphomo }}<sup style="font-size: 20px"></sup> fr</h6>
                <h6>Montant     =  {{ $collectEntreprises->pphomo*$collectEntreprises->prixpphomo }}<sup style="font-size: 20px"></sup> fr</h4>

                <h4>PP homo</h4>              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Quantite  =  {{ $collectEntreprises->ppcopo+$collectEntreprises->pphomo }}<sup style="font-size: 15px">  kg</sup></h5>
                <h5>Montant     =  {{$pp=$collectEntreprises->ppcopo*$collectEntreprises->prixppcopo+$collectEntreprises->pphomo*$collectEntreprises->prixpphomo }}<sup style="font-size: 15px">  fr</sup></h4>
                <h3> Total PP </h3>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
         </div>

        
         <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h6>Quantite =   {{ $collectEntreprises->pehdcasier }}<sup style="font-size: 20px"></sup> kg</h6>
                <h6>Prix unitaire  =   {{ $collectEntreprises->pehdcasierprix }}<sup style="font-size: 20px"></sup> fr</h6>
                <h6>Montant     =  {{ $collectEntreprises->pehdcasier*$collectEntreprises->pehdcasierprix }}<sup style="font-size: 20px"></sup> fr</h4>

                <h4>Pehd casier</h4>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
  
          <!-- ./col -->
          <div class="col-lg-4 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h6>Quantite =   {{ $collectEntreprises->pehdsoufflage }}<sup style="font-size: 20px"></sup> kg</h6>
                <h6>Prix unitaire  =   {{ $collectEntreprises->pehdsoufflageprix }}<sup style="font-size: 20px"></sup> fr</h6>
                <h6>Montant     =  {{ $collectEntreprises->pehdsoufflage*$collectEntreprises->pehdsoufflageprix }}<sup style="font-size: 20px"></sup> fr</h4>

                <h4>Pehd soufflage</h4>              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Quantite  =  {{ $collectEntreprises->pehdsoufflage+$collectEntreprises->pehdcasier }}<sup style="font-size: 15px">  kg</sup></h5>
                <h5>Montant     =  {{$pehdprix=$collectEntreprises->pehdcasier*$collectEntreprises->pehdcasierprix+$collectEntreprises->pehdsoufflage*$collectEntreprises->pehdsoufflageprix }}<sup style="font-size: 15px">  fr</sup></h4>
                <h3> Total PEHD </h3>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
         </div>

        

       <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-11 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Quantite =  {{ $collectEntreprises->pphomo+$collectEntreprises->ppcopo+$collectEntreprises->pehdsoufflage+$collectEntreprises->pehdcasier+$collectEntreprises->petpreform+$collectEntreprises->petbouteille }}<sup style="font-size: 15px">  kg</sup></h5>
                <h5>Montant  =  {{ $pehdprix+$pet+$pp }}<sup style="font-size: 15px">  fr</sup></h5>
                <h3> Le total de la collecte </h3>
              </div>
              <div class="icon">
              <i class="fas fa-archive"></i>
              </div>
            </div>
          </div>
         </div>  
         
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>







    
















    </div>
 
  
</div>

@endsection


