@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 20px;margin-left: 50px;margin-top: 20px;" class="row">
        <div class="col-lg-10">
            <a class="btn btn-success" href="{{ route("services.create") }}">
               {{ trans('Ajouter un departement ') }}
            </a>
        </div>
    </div>
<div class="card col-lg-12">
    <div class="card-header">
        {{ trans('liste des departements') }}
    </div>

    <div class="card-body card col-lg-12">
        <div class=" margin-left: 50px col-lg-11" >
            <table   style="width:100%"  class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead style='margin-left: 100px'>
                    <tr>
                        
                        <th>
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('Libelle') }}
                        </th>
                        <th>
                        {{ trans('Direction') }}

                        </th>
                        <th>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $user)
                        <tr >
                            
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->libelle ?? '' }}
                            </td>
                            <td>
                                {{ $user->direction ?? '' }}
                            </td>

                            <td>
                              
                                    <a class="btn btn-xs btn-primary" href="{{ route('services.show', $user->id) }}">
                                    <i class="far fa-edit"></i>


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
    pageLength: 5,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection