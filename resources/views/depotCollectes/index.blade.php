@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Depots</h2>
            <a class="btn btn-success" href="{{ route('depotCollectes.create') }}" role="button">Ajouter un depot</a>
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


<table class="table table-striped table-bordered" style="margin-left:2%; width:95%" >
  <tr>
     <th>Id</th>
     <th>dechet</th>
     <th>quantite initiale</th>

     <th>quantite Entrante </th>
     <th>quantite Sortante</th>
     <th>quantite depot</th>
   

  </tr>
    @foreach ($data as $key => $depot)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $depot->dechet}} </td>
        <td>{{ $depot->quantiteinitiale }}   kg</td>

        <td>{{ $depot->quantiteEntrante }}  kg</td>
        <td>{{ $depot->quantiteSortante }}  kg</td>
        <td>{{ $depot->depot}}  kg </td>

        <td>
            <a class="btn btn-info" href="{{ route('depotCollectes.show',$depot->id) }}">Voir</a>
           
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