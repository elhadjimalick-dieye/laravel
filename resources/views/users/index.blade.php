@extends('layouts.admin')


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"><div class="row">
    <div class="row" style="margin-left:5%">
    <div class="col-lg-12 ">
        <div class="pull-left">
            <h2>Liste des utilisateurs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Ajouter un nouveau utilisateur</a>
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
            <th>Email</th>
            <th>Service</th>

            <th>Roles</th>
            <th>Actions</th>


           

            </tr>
        </thead>
        <tbody>
        @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->prenom }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->service_id }}</td>
    <td>{{ $user->roles }}</td>
    



   
    <td><a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Voir</a>
   <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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