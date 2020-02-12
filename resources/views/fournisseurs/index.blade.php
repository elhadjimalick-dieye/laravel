@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des fournisseurs</h2>
            <a class="btn btn-success   " href="{{ route('fournisseurs.create') }}" role="button">Ajouter un fournisseur</a>
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
     <th>Categorie</th> 
     <th>Compte</th> 
     <th>Nom_Complet</th>
     <th>Contact</th>
     <th >Avance</th>
     <th >Restant_du</th>

    

  </tr>
    @foreach ($data as $key => $fournisseur )
    
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $fournisseur->type_collecteurs->libelle }}</td>
        <td>{{ $fournisseur->numero }}</td> 

        <td>{{ $fournisseur->nomComplet }}</td>
        <td>{{ $fournisseur->contact }}</td>
        <td >{{ $fournisseur->avance }}</td>
        <th >{{ $fournisseur->restant_du }}</th>

        <td>
            <a class="btn btn-info" href="{{ route('fournisseurs.show',$fournisseur->id) }}"><i class="far fa-eye"></i></a>
           
        </td>
    <td><a class="btn btn-primary" href="{{ route('fournisseurs.edit',$fournisseur->id) }}"><i class="far fa-edit"></i></a></td>
    <td>
        {!! Form::open(['method' => 'DELETE','route' => ['fournisseurs.destroy', $fournisseur->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Sup', ['class' => 'btn btn-danger']) !!}
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