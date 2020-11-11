@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("collecterecuplasts.create") }}">
               {{ trans('Ajouter une collecte recuplast ') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header" style="background-color:skyblue;color:white">
        {{ trans('Liste des collectes Recuplast') }}
    </div>

    <div class="card-body">
        <div class="">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10%">

                        {{ 'Id' }}</th>
                        <th>{{ 'Numero' }}</th>
                        <th>{{ 'Fournisseur' }}</th>
                        <th>{{ 'Date' }}</th>
                        <th>{{ 'Quantite' }} </th>
                        <th>{{ 'Prix' }} </th>
                        <th>{{ 'Montant' }}</th>
                        <th>{{ 'Commentaire '}}</th>

                        <th>
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $collecter)
                        <tr data-entry-id="{{ $collecter->id }}">
                            
                        <td>{{ ++$i }}</td>
                        <td>{{ $collecter->numerobon }}</td>

                        <td>{{ $collecter->fournisseurs->nomComplet }}</td>
                        <td>{{ $collecter->date_reception }}</td>

                        <td>{{ $collecter->quantite }} kg</td>
                        <td>{{ $collecter->prix }} fr</td>
                        <td>{{ $collecter->quantite*$collecter->prix }}fr</td>
                        

                        <td>{{ $collecter->commentaire }}</td>


                            <td>
                              
                                    <a class="btn btn-xs btn-primary" href="{{ route('collecterecuplasts.show', $collecter->id) }}">
                                    <i class="far fa-eye"></i>
                                    </a>
                                    </td>
                                    <td>
                            

                                    <a class="btn btn-xs btn-info" href="{{ route('collecterecuplasts.edit', $collecter->id) }}"><i class="far fa-edit"></i>
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

 