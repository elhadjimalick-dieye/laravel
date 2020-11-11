@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
      
            <h3>{{ $depotcollecte->date}}</h3>    
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('depotCollectes.index') }}"> Retour</a>
        </div>
        <div class="pull-right">
  </div>
        <br>
    </div>
</div>


<div class="row" style="margin-left:5%">
    <div class="col-xs-12 col-sm-12 col-md-11">

     
     <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
          <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->quantiteinitiale}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite initiale (VRAC)</p>
              </div>
              <div class="icon">
                <i class="ion ion-refresh"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->quantiteEntrante}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Entree stock (VRAC)  </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-2 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->quantiteSortante}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Sortie stock </p>
              </div>
              <div class="icon">
                <i class="ion ion-trash-a"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
            
          <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $depotcollecte->depot}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite réel (VRAC) </p>
              </div>
              <div class="icon">
                <i class="ion  ion-clipboard"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->ppcopo}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PP COPO </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
 <!-- ./col -->
 <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->pphomo}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PP HOMO </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        
           <!-- ./col -->
           <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $depotcollecte->pphomo+$depotcollecte->ppcopo}}<sup style="font-size: 20px">kg</sup></h3>

                <h4>Quantite totale de PP </h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
    <div class="row">
         <!-- ./col -->
         <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->petbouteille}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PET bouteille </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
 <!-- ./col -->
 <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->petpreform}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PET Preform </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        
           <!-- ./col -->
           <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $depotcollecte->petbouteille+$depotcollecte->petpreform}}<sup style="font-size: 20px">kg</sup></h3>

                <h4>Quantite totale de PET </h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        </div>

                <!-- /.row -->
    <div class="row">
         <!-- ./col -->
         <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->pehdsoufflage}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PEHD soufflage </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
 <!-- ./col -->
 <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->pehdcasier}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PEHD casier </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        
           <!-- ./col -->
           <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $depotcollecte->pehdcasier+$depotcollecte->pehdsoufflage}}<sup style="font-size: 20px">kg</sup></h3>

                <h4>Quantite totale de PEHD </h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        </div>
        <div class="col-lg-11 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $depotcollecte->total}}<sup style="font-size: 20px">kg</sup></h3>

                <h3>Quantite totale  (STOCK)</h3>
              </div>
              <div class="icon">
                <i class="ion ion-archive"></i>
              </div>
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

        
    </div>
 

  
</div>

@endsection