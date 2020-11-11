@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("users.create") }}">
               {{ trans('Ajouter un Utilisateur ') }}
            </a>
        </div>
    </div>
    @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



<div class="card">
    <div class="card-header" style="background-color:#008B8B;color:white">
        {{ trans('liste des Utilisateurs') }}
    </div>

    <div class="card-body">
        <div class="">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10%">

                        
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('Prenom') }}
                        </th>

                        <th>
                            {{ trans('Nom') }}
                        </th>
                        <th>
                            {{ trans('Mail') }}
                        </th>
                        <th>
                            {{ trans('Service') }}
                        </th>
                       
                        <th>

                        </th>
                        <th>
                        </th>
                        <th>
                        </th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->services->libelle}} </td>
                    
                        <td><a class="btn btn-success" href="{{ route('users.show',$user->id) }}"><i class="far fa-eye"></i></a></td>
                        <td><a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-user-edit"></i></a></td>
                        
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Supp', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

 

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
