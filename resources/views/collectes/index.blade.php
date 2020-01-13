@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des collectes</h2>
            <a class="btn btn-primary" href="{{ route('collectes.create') }}" role="button">Ajouter une collecte</a>
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


<table class="table table-striped table-bordered" style="margin-left:4%; width:90%" >
  <tr>
     <th>No</th>
     <th>Prenom</th>
     <th>Nom</th>
     <th>Quantité</th>
     <th>Prix unitaire</th>
     <th>Montant</th>
     <th>Date</th>


  </tr>
    @foreach ($data as $key => $collecte)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $collecte->prenom_collecteur }}</td>
        <td>{{ $collecte->nom_collecteur }}</td>
        <td>{{ $collecte->quantite }}</td>
        <td>{{ $collecte->prix_unitaire }}</td>
        <td>{{ $collecte->montant }}</td>
        <td>{{ $collecte->created_at }}</td>
     
        <td>
            <a class="btn btn-info" href="{{ route('collectes.show',$collecte->id) }}">Voir</a>
           
        </td>
    <td><a class="btn btn-primary" href="{{ route('collectes.edit',$collecte->id) }}">Modifier</a></td>
    <td>
        {!! Form::open(['method' => 'DELETE','route' => ['collectes.destroy', $collecte->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Supp', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
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