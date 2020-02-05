@extends('layouts.admin')


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"><div class="row">
    <div class="row" style="margin-left:5%">
    <div class="col-lg-12 ">
        <div class="pull-left">
            <h2>Liste des employés</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employes.create') }}"> Ajouter un nouveau employé</a>
        </div>
        <br>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table id="example" class="table table-striped table-bordered" style="margin-left:5%; width:90%">
        <thead>
            <tr>
            <th>Id</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Matricule</th>
            <th>Service</th>

            <th>Date de naissance</th>
         

            </tr>
        </thead>
        <tbody>
        @foreach ($data as $key => $employe)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $employe->prenom }}</td>
    <td>{{ $employe->nom }}</td>
    <td>{{ $employe->matricule }}</td>
    <td>{{ $employe->service->libelle}} </td>

    <td>{{ $employe->date_de_naissance }}</td>


 
    <td><a class="btn btn-success" href="{{ route('employes.show',$employe->id) }}"><i class="far fa-eye"></i></a></td>
    <td><a class="btn btn-primary" href="{{ route('employes.edit',$employe->id) }}"><i class="far fa-edit"></i></a></td>
    <td>
        {!! Form::open(['method' => 'DELETE','route' => ['employes.destroy', $employe->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Supp', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
        </tbody>
       
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