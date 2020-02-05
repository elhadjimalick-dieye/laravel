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

                <p>Quantite collecter (VRAC) </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $depotcollecte->quantiteSortante}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Sortie stock (VRAC) </p>
              </div>
              <div class="icon">
                <i class="ion ion-trash-a"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
            
          <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
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
          <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
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
 <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
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
          <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $depotcollecte->pet}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PET </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-3 col-2">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $depotcollecte->pehd}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite PEHD </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $depotcollecte->total}}<sup style="font-size: 20px">kg</sup></h3>

                <p>Quantite totale  (STOCK)</p>
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