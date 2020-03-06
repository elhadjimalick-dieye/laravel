@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("employes.create") }}">
               {{ trans('Ajouter un employé ') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('liste des employés') }}
    </div>

    <div class="card-body" >
        <div class="">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-employe">
                <thead>
                    <tr>
                        <th width="10%">

                        
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('Nom') }}
                        </th>

                        <th>
                            {{ trans('Prenom') }}
                        </th>
                        <th>
                            {{ trans('Matricule') }}
                        </th>
                        <th>
                            {{ trans('Date_de_naissance') }}
                        </th>
                        <th>
                            {{ trans('Services') }}
                        </th>
                        <th>
                        </th>
                        <th>
                        </th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $employe)
                        <tr data-entry-id="{{ $employe->id }}">
                            
                            <td>
                                {{ $employe->id ?? '' }}
                            </td>
                            <td>
                                {{ $employe->nom ?? '' }}
                            </td>
                            <td>
                                {{ $employe->prenom ?? '' }}
                            </td>
                            <td>
                                {{ $employe->matricule ?? '' }}
                            </td>
                            <td>
                                {{ $employe->date_de_naissance ?? '' }}
                            </td>
                            <td>{{ $employe->service_id}} </td>


                            <td>
                              
                                    <a class="btn btn-xs btn-primary" href="{{ route('employes.show', $employe->id) }}">
                                    <i class="far fa-eye"></i>
                                    </a>
                                    </td>
                                    <td>
                            

                                    <a class="btn btn-xs btn-info" href="{{ route('employes.edit', $employe->id) }}"><i class="far fa-edit"></i>
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
  $('.datatable-employe:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection