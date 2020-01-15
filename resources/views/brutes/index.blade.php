@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des collectes</h2>
            <a class="btn btn-success" href="{{ route('brutes.create') }}" role="button">Ajouter une collecte Brute</a>
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


<table class="table table-striped table-bordered" style="margin-left:4%; width:100%" >
  <tr>
     <th>Id</th>
     <th>Nom Complet</th>
     <th>Lieu</th>
     <th>Quantité </th>

     <th>Prix Unitaire</th>
     <th>Montant</th>
     <th>Date</th>
     <th>Commentaire</th>

  </tr>
    @foreach ($data as $key => $collecte)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $collecte->collecteurs->nomComplet}} </td>
        <td>{{ $collecte->lieu}} </td>
        <td>{{ $collecte->quantite }} kg</td>
        <td>{{ $collecte->prix_unitaire }} frcfa</td>
        <td>{{ $collecte->montant }} frcfa</td>
        <td>{{ $collecte->created_at }}</td>
        <td>{{ $collecte->commentaire }}</td>


        
  
        <td>
            <a class="btn btn-info" href="{{ route('collectes.show',$collecte->id) }}">Voir</a>
           
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
@endsection