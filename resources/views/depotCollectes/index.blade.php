@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("depotCollectes.create") }}">
               {{ trans('Sortir de matiere ') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('Liste des depots collectes') }}
    </div>

    <div class="card-body">
        <div class="">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10%">

                        {{ 'Id' }}</th>
                        <th>{{ 'Date' }}</th>
                        <th>{{ 'Vrac' }}</th>
                        <th>{{ 'PP' }}</th>
                        <th>{{ 'PET' }} </th>
                        <th>{{ 'PEHD' }} </th>
                        <th>{{ 'TOTAL' }}</th>

                        <th>
                        </th>
                       
                        <th>
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $depot)
                        <tr data-entry-id="{{ $depot->id }}">
                            
                        <td>{{ ++$i }}</td>
                        <td>{{ $depot->date}} </td>
                        <td>{{ $depot->depot}} kg</td>
                        <td>{{ $depot->ppcopo+$depot->pphomo }} kg </td>
                        <td>{{ $depot->petpreform+$depot->petbouteille }}  kg</td>
                        <td>{{ $depot->pehdcasier+$depot->pehdsoufflage}}  kg </td>

                        <td style="background-color:white;color:black">{{ $depot->total}} kg </td>

                            <td>
                              
                                    <a class="btn btn-xs btn-primary" href="{{ route('depotCollectes.show', $depot->id) }}">
                                    <i class="far fa-eye"></i>
                                    </a>
                                    </td>
                                    <td>
                                    <a class="btn btn-xs btn-info" href="{{ route('depotCollectes.edit', $depot->id) }}"><i class="far fa-edit"></i>
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

