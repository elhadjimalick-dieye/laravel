@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des collectes Entreprise</h2>
            <a class="btn btn-success" href="{{ route('collectes.create') }}" role="button">Ajouter une collecte</a>
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


<table class="table table-striped table-bordered" style="margin-left:2%; width:98%" >
  <tr>
     <th>Id</th>
     <th>Numero </th>
     <th>Nom complet</th>
     <th>Date</th>
     <th>Quantite </th>
     <th>Montant</th>
     
     <th>Commentaire</th>

  </tr>
    @foreach ($data as $key => $collecte)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $collecte->numerobons}} </td>
        <td>{{ $collecte->fournisseurs->nomComplet}} </td>
        <td>{{ $collecte->date_collecte }} </td>
        <td>{{ $collecte->pp+$collecte->pehd+$collecte->pet+$collecte->ppcopo+$collecte->pphomo}} kg</td>
        <td>{{ $collecte->prixpp*$collecte->pp+$collecte->prixpehd*$collecte->pehd+$collecte->prixpet*$collecte->pet+$collecte->prixppcopo*$collecte->ppcopo+$collecte->prixpphomo*$collecte->pphomo}} fr</td>
       
        <th>{{ $collecte->commentaire }}</th>


        
  
        <td>
            <a class="btn btn-info" href="{{ route('collectes.show',$collecte->id) }}"><i class="far fa-eye"></i></a>
           
        </td>
    
    </tr>
    @endforeach
</table>

{!! $data->render() !!}

</div>
<script >

$(document).ready(function() {
    $('collect_entreprises').DataTable({});
} );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
@endsection