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
     <th>Nom complet</th>
     <th>Date</th>

     <th>Quantité en kg</th>
     <th>Prix Unitaire</th>
     <th>Montant</th> <th>avance</th>
     <th>credit</th>
     <th>reglement definitif</th>

  </tr>
    @foreach ($data as $key => $collecte)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $collecte->fournisseurs->nomComplet}} </td>
        <td>{{ $collecte->date_reception }} </td>

        <td>{{ $collecte->quantite }} kg</td>

        
        <td>{{ $collecte->prix }} fcfa</td>
        <td>{{ $collecte->montant }} fcfa</td>
        <td>{{ $collecte->avance }}</td>
        <td>{{ $collecte->credit }}</td>

        <td>{{ $collecte->reglement_definitif }}</td>


        
  
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