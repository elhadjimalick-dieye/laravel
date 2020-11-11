@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-9">
            <a class="btn btn-success" href="{{ route("clients.create") }}">
               {{ trans('Ajouter un client ') }}
            </a>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ route("ventes.index") }}">
               {{ trans('Accueil commercial ') }}
            </a>
        </div>
    </div>
    @if(Session::has('fail'))
    <div class="alert alert-success">
       {{Session::get('fail')}}
    </div>
@endif
<div class="card">
    <div class="card-header" style="background-color:#268496;color:white">
        {{ trans('liste des clients') }}
    </div>
 
    <div class="card-body" >
        <div class="">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th >

                        
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('Matricule') }}
                        </th>

                        <th>
                            {{ trans('Nom_Complet') }}
                        </th>
                        <th>
                            {{ trans('Adresse') }}
                        </th>
                        <th>
                            {{ trans('Contact') }}
                        </th>
                       
                        <th>
                        {{ trans('Totale_acheté') }}

                        </th>
                        <th>
                        {{ trans('Détails') }}

                        </th>
                        <th>
                        {{ trans('Éditer') }}

                        </th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $client)
                        <tr data-entry-id="{{ $client->id }}">
                            
                        <td>{{ ++$i }}</td>
                        <td>{{ $client->matricule }}</td>
                        <td>{{ $client->nomComplet }}</td> 

                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->contact }}</td>
                        <td>{{ $client->totaleachete }}</td>

                            <td>
                              
                                    <a class="btn btn-xs btn-success" href="{{ route('clients.show', $client->id) }}">
                                    <i class="far fa-eye"></i>
                                    </a>
                                    </td>
                                    <td>
                            

                                    <a class="btn btn-xs btn-info" href="{{ route('clients.edit', $client->id) }}"><i class="far fa-edit"></i>
                                    </a>
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
