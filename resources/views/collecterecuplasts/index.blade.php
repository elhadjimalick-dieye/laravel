@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des collectes recuplast</h2>
            <a class="btn btn-success   " href="{{ route('collecterecuplasts.create') }}" role="button">Ajouter une collecte</a>
        </div><br>
        <div class="col-lg-12 ">

        <div class="float-right" style="margin-top:-6.7%; margin-right:10%">

        <a class="btn btn-secondary   " href="{{ route('fournisseurs.create') }}" role="button">Ajouter un fournisseur</a>
        </div>
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


<table class="table table-striped table-bordered" style="margin-left:2%; width:97%" >
  <tr>
     <th>Id</th>
     <th>Numero de Bon</th>

     <th>Nom_complet </th>
     <th>Date_reception</th>
     <th>Quantite</th>
     <th>Prix_U</th>
     <th>Montant</th>
     

     <th>Commentaire</th>


  </tr>
    @foreach ($data as $key => $collecter)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $collecter->numerobon }}</td>

        <td>{{ $collecter->fournisseurs->nomComplet }}</td>
        <td>{{ $collecter->date_reception }}</td>

        <td>{{ $collecter->quantite }} kg</td>
        <td>{{ $collecter->prix }} fr</td>
        <td>{{ $collecter->quantite*$collecter->prix }}fr</td>
        

        <td>{{ $collecter->commentaire }}</td>


       
    <td><a class="btn btn-primary" href="{{ route('collecterecuplasts.edit',$collecter->id) }}">Edit</a></td>


    <td>
        {!! Form::open(['method' => 'DELETE','route' => ['collecterecuplasts.destroy', $collecter->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Supp', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
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