@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Extrusion  </h2>
        </div>
    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('stockproduitfinis.index') }}"> Retour</a>
        </div>
        <br>

    </div>
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:58%">
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('sacs.index') }}"> Mise en sac</a>
        </div>
        <br>

    </div>

</div>
@if(Session::has('fail'))
    <div class="alert alert-success">
       {{Session::get('fail')}}
    </div>
@endif

<div class="card col-lg-12">
    <div class="card-header" style="background-color:#FA8000
;color:white">
    {{ trans('Table de matiere par quart') }}
    </div>

    <div class="card-body card col-lg-12">
        <div class=" margin-left: 50px col-lg-12" >
            <table   style="width:100%"  class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead style='margin-left: 100px'>
                    <tr>
                        
                        <th>
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('Effectifs') }}
                        </th>
                        <th>
                            {{ trans('Quantite') }}
                        </th>
                        <th>
                            {{ trans('Dechets') }}
                        </th>
                        <th>
                        {{ trans('Sortie') }}

                        </th>
                        <th>
                        {{ trans('Sac de (25)') }}

                        </th>
                        <th>
                        {{ trans('Date') }}

                        </th>
                        <th>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $sac)
                        <tr >
                            
                            <td>
                                {{ $sac->id ?? '' }}
                            </td>
                            <td>
                                {{ $sac->effectifextru ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->extrusion ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->decheextrusion ?? '' }} 
                            </td>
                            <td>
                            {{ $sac->pehdsouflage ?? '' }} 
                            </td>
                            <td>
                            {{ $sac->pehdsouflagesac ?? '' }} 

                            </td>
                            <td>
                                {{ $sac->date ?? '' }}
                            </td>

                            <td>
                              
                              <a class="btn btn-xs btn" style="background-color:#FA8000;" href="{{ route('extrusions.edit', $sac->id) }}">
                                      <h6 style="color:white;">Extruder</h6>
  
                                      </a>
                                      </td>
                          
                         
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


<div class="card col-lg-12">
    <div class="card-header " style="background-color:skyblue;color:white">
        {{ trans('PEHD SOUFFLAGE') }}
    </div>

    <div class="card-body card col-lg-12 ">
        <div class=" margin-left: 50px col-lg-12 " >
            <table   style="width:100%"  class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead style='margin-left: 100px '>
                    <tr>
              
                    <th>
                            {{ trans('Id') }}
                        </th>
                        
                        <th>
                            {{ trans('Blanc') }}
                        </th>
                        <th>
                            {{ trans('Bleu') }}
                        </th>
                        <th>
                        {{ trans('Jaune') }}

                        </th>
                        <th>
                        {{ trans('Vert') }}

                        </th><th>
                        {{ trans('Neutre') }}

                        </th><th>
                        {{ trans('Rouge') }}

                        </th><th>
                        {{ trans('Jadida') }}

                        </th><th>
                        {{ trans('Maron') }}

                        </th><th>
                        {{ trans('Noire') }}

                        </th><th>
                        {{ trans('Multicolor') }}

                        </th>
                        <th>
                        {{ trans('Total____') }}

                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $sac)
                        <tr >
                                   
                        <td>
                                {{ $sac->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $sac->pehdsouflageblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdsouflagebleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdsouflagejaune ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagevert ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflageneutre ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagerouge ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagejadida ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagemaron ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagenoire ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdsouflagemulti ?? '' }} 
                            </td>
                            <td>
                                {{$sac->pehdsouflageblanc+$sac->pehdsouflagebleu+$sac->pehdsouflagejaune+$sac->pehdsouflagevert+$sac->pehdsouflageneutre+$sac->pehdsouflagerouge+$sac->pehdsouflagejadida+$sac->pehdsouflagemaron+$sac->pehdsouflagenoire+$sac->pehdsouflagemulti ?? '' }} 
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