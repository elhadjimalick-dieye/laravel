@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des departements</h2>
            <a class="btn btn-primary" href="{{ route('services.create') }}" role="button">Ajouter un departement</a>
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


<table class="table table-striped table-bordered" style="margin-left:8%; width:50%" >
  <tr>
     <th>Id</th>
     <th>Nom</th>
     <th >Direction</th>
  </tr>
    @foreach ($data as $key => $service)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $service->libelle }}</td>
        <td>{{ $service->direction }}</td>

        <td>
            <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Voir</a>
           
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