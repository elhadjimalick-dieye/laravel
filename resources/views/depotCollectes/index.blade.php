@extends('layouts.admin')


@section('content')
<div class="container-fluid">

<div class="row" style="margin-left:8%">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Depots de la matiere collecter</h2>
            <a class="btn btn-success" href="{{ route('depotCollectes.create') }}" role="button"><i class="fas fa-archive"></i> Recuperer de la matiere</a>
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
     <th>DATE</th>

     <th>VRAC</th>
     <th>PPCOPO</th>
     <th>PPHOMO</th>
     <th>PET</th>
     <th>PEHD </th>
     <th>PP </th>
     <th style="background-color:;color:black">Total </th>


   

  </tr>
    @foreach ($data as $key => $depot)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $depot->date}} </td>

        <td>{{ $depot->depot}} kg</td>

        <td>{{ $depot->ppcopo}} kg </td>
        <td>{{ $depot->pphomo }}   kg</td>
        <td>{{ $depot->pet }}  kg</td>
        <td>{{ $depot->pehd }}  kg</td>
        <td>{{ $depot->pp}}  kg </td>
        <td style="background-color:white;color:black">{{ $depot->total}} kg </td>

        <td>
            <a class="btn btn-info" href="{{ route('depotCollectes.show',$depot->id) }}"><i class="far fa-eye"></i></a>
            <a class="btn btn-primary" href="{{ route('depotCollectes.edit',$depot->id) }}"><i class="far fa-edit"></i></a>

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