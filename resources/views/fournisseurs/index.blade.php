@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("fournisseurs.create") }}">
               {{ trans('Ajouter un Fournisseur ') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('liste des Fournisseurs') }}
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
                            {{ trans('Type') }}
                        </th>

                        <th>
                            {{ trans('Numero') }}
                        </th>
                        <th>
                            {{ trans('Nom_Complet') }}
                        </th>
                        <th>
                            {{ trans('Contact') }}
                        </th>
                       
                        <th>
                        {{ trans('Restant_du') }}

                        </th>
                        <th>
                        </th>
                        <th>
                        </th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $fournisseur)
                        <tr data-entry-id="{{ $fournisseur->id }}">
                            
                        <td>{{ ++$i }}</td>
                        <td>{{ $fournisseur->type_collecteurs->libelle }}</td>
                        <td>{{ $fournisseur->numero }}</td> 

                        <td>{{ $fournisseur->nomComplet }}</td>
                        <td>{{ $fournisseur->contact }}</td>
                        <td>{{ $fournisseur->restant_du }}</td>

                            <td>
                              
                                    <a class="btn btn-xs btn-primary" href="{{ route('fournisseurs.show', $fournisseur->id) }}">
                                    <i class="far fa-eye"></i>
                                    </a>
                                    </td>
                                    <td>
                            

                                    <a class="btn btn-xs btn-info" href="{{ route('fournisseurs.edit', $fournisseur->id) }}"><i class="far fa-edit"></i>
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
