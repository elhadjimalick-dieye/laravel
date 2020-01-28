@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des collecte recuplast</h2>
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
     <th>Nom Complet</th>
     <th>date_reception</th>
     <th>quantite</th>
     <th>prix</th>
     <th>montant</th>
     <th>avance</th>
     <th>credit</th>

     <th>commentaire</th>


  </tr>
    @foreach ($data as $key => $collecter)
    <tr>
        <td>{{ ++$i }}</td>

        <td>{{ $collecter->fournisseurs->nomComplet }}</td>
        <td>{{ $collecter->date_reception }}</td>

        <td>{{ $collecter->quantite }} kg</td>

        
        <td>{{ $collecter->prix }} fcfa</td>
        <td>{{ $collecter->quantite*$collecter->prix }}fr</td>
        
        <td>{{ $collecter->fournisseurs->avance }}</td>
        <td>{{ $collecter->fournisseurs->restant_du }}</td>


        <td>{{ $collecter->commentaire }}</td>

        <td>
            <a class="btn btn-info" href="{{ route('payementrecuplasts.show',$collecter->id) }}">Voir</a>
        </td>
    <td><a class="btn btn-primary" href="{{ route('payementrecuplasts.edit',$collecter->id) }}">Payer</a></td>

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