@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("depotProductions.create") }}">
               {{ trans('Sortir de matiere pour les ateliers') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('Liste des depots Production') }}
    </div>

    <div class="card-body">
        <div class="">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10%">

                        {{ 'ID' }}</th>
                        <th>{{ 'DATE' }}</th>
                        <th>{{ 'VRAC' }}</th>
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
  
    @foreach ($data as $key => $production)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $production->date}} </td>
        <td>{{ $production->vrac}} kg</td>
        <td>{{ $pp=$production->ppcopo+$production->pphomo }} kg </td>
        <td>{{ $pet=$production->petbouteille+$production->petpreform }}  kg</td>
        <td>{{ $pehd=$production->pehdcasier+$production->pehdsoufflage}}  kg </td>

        <td style="background-color:white;color:black">{{ $production->vrac+$pp+$pet+$pehd}} kg </td>

        <td>
            <a class="btn btn-info" href="{{ route('depotProductions.show',$production->id) }}"><i class="far fa-eye"></i></a>
        </td>
        <td>
            <a class="btn btn-success" href="{{ route('depotProductions.edit',$production->id) }}"><i class="far fa-edit"></i></a>
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
