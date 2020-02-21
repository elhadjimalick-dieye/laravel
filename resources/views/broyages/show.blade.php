@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left:5%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
      
            <h3>{{ $triage->date}}</h3>    
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('triages.index') }}"> Retour</a>
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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->vracinitialetr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->vracEntranttr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->vracSortanttr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $triage->vractr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->ppcopotr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->pphomotr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $triage->pptr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->petbouteilletr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->petpreformtr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $triage->pettr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->pehdsoufflagetr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $triage->pehdcasiertr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $triage->pehdtr}}<sup style="font-size: 20px">kg</sup></h3>

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
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $triage->pehdtr+$triage->pettr+$triage->pptr+$triage->vractr}}<sup style="font-size: 20px">kg</sup></h3>

                <h4>Quantite de matiere qui se trouve dans l'atelier du tri</h4>
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