@extends('layouts.admin')


@section('content')

<div class="row " style="margin-left:8%">
    <div class="col-lg-12 ">
        <div class="pull-left">
            <h2>Trier de la matiere </h2>
        </div>
        <div class="pull-right">
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


<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('services.create') }}"> Create New Role</a>
            @endcan
        </div>
        <br>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


 <!-- Main content -->
<table class="table table-striped table-bordered" style="margin-left:2%; width:95%" >
  <tr>
     <th>Id</th>
     <th>Date </th>
        <th>Vrac</th>
        <th>PP</th>
        <th>PET</th>
        <th>PEHD </th>
       
     <th style="background-color:;color:black">Total </th>

    

  </tr>
    @foreach ($data as $key => $triage)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $triage->date}} </td>
        <td>{{ $triage->vractr}} kg</td>
        <td>{{ $pptr=$triage->ppcopotr+$triage->pphomotr }} kg </td>
        <td>{{ $pettr=$triage->petbouteilletr+$triage->petpreformtr }}  kg</td>
        <td>{{ $pehdtr=$triage->pehdcasiertr+$triage->pehdsoufflagetr}}  kg </td>

        <td style="background-color:white;color:black">{{ $triage->vractr+$pptr+$pettr+$pehdtr}} kg </td>

        <td>
            <a class="btn btn-info" href="{{ route('triages.show',$triage->id) }}"><i class="far fa-eye"></i></a>
        </td>
        <td>
            <a class="btn btn-success" href="{{ route('triages.edit',$triage->id) }}"><i class="far fa-edit"></i></a>
        </td>
    
    </tr>
    @endforeach
</table>

{!! $data->render() !!}

</div>
<script >

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>



{!! Form::open(array('route' => 'depotProductions.index','method'=>'POST')) !!}
<div class="row" style="margin-left:10%">
<div class="col-xs-12 col-sm-12 col-md-5 " >

<div class="col-xs-12 col-sm-12 col-md-12 " >
        <div class="form-group">
            <strong>Date </strong>
            {!! Form::date('date', null, array('placeholder' => 'date','class' => 'form-control')) !!}
        </div>
    </div>

        
    </div>

   
    
    
    <div class="col-xs-12 col-sm-5 col-md-10 " >
        <div class="form-group">

            <div class="small-box bg-info">
              <div class="inner">
                <h4>  pp copo est  {{ $ppcopotr}}<sup style="font-size: 20px">  kg </sup></h4>
                <h4>  vrac est  {{ $vractr}}<sup style="font-size: 20px">  kg </sup></h4>
                <h4>  pet bouteill est  {{ $petbouteilletr}}<sup style="font-size: 20px">  kg </sup></h4>
                <h4>  pet preform est  {{ $petpreformtr}}<sup style="font-size: 20px">  kg </sup></h4>
                <h4>  pehd casier est  {{ $pehdcasiertr}}<sup style="font-size: 20px">  kg </sup></h4>
                <h4>  pehd soufflage  est  {{ $pehdsoufflagetr}}<sup style="font-size: 20px">  kg </sup></h4>
                <h4>  dechet est  {{ $dechettr}}<sup style="font-size: 20px">  kg </sup></h4>
               
              </div>
              <div class="icon">
              </div>
            </div>      
              </div>
      
    </div>  

    <div class="col-xs-12 col-sm-12 col-md-10" >
        <div class="form-group">
            <strong style='color:green'></strong>
            {!! Form::text('', null, array('disabled','class' => 'form-control')) !!}
        </div>
      
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere PPCOPO </strong>
            {!! Form::number('ppcopoSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere PPHOMO </strong>
            {!! Form::number('pphomoSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
        
        
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere petbouteille </strong>
            {!! Form::number('petbouteilleSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div>  <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pet preform </strong>
            {!! Form::number('petpreformSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 
     <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pehd casier </strong>
            {!! Form::number('pehdcasierSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-5 " >
        <div class="form-group">
            <strong>Quantite matiere Pehd soufflage </strong>
            {!! Form::number('pehdsoufflageSortantepro', null, array('placeholder' => 'quantite en kg','class' => 'form-control')) !!}
        </div>
      
    </div> 

    
    <br>
    <div class="col-xs-12 col-sm-12 col-md-5 text-center">
    <div class="form-group">
        <br>
        <button type="submit" class="btn btn-info">Soumettre</button>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection