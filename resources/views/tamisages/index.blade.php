@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier de Tamisage </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-12 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('depotProductions.index') }}"> Retour</a>
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
    <div class="card-header" style="background-color:#D2691E;color:white">
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
                            {{ trans('Entree') }}
                        </th>
                        <th>
                            {{ trans('Dechets') }}
                        </th>
                        <th>
                        {{ trans('Sortie') }}

                        </th>
                        <th>
                        {{ trans('Date') }}

                        </th>
                        <th>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $tamisage)
                        <tr >
                            
                            <td>
                                {{ $tamisage->id ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->effectiftami ?? '' }} personne(s)
                            </td>
                            <td>
                                {{ $tamisage->tamisage ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->dechetamisage ?? '' }} kg
                            </td>
                            <td>
                            {{ $tamisage->totale ?? '' }} kg


                            </td>
                            <td>
                                {{ $tamisage->date ?? '' }}
                            </td>

                            <td>
                              
                                    <a class="btn btn-xs btn" style="background-color:#D2691E;" href="{{ route('tamisages.edit', $tamisage->id) }}">
                                    <h6 style="color:white;">Tamiser</h6>


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
    <div class="card-header" style="background-color:#008B8B;color:white">
        {{ trans('Table de tamisage PPCOPO') }}

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
                            {{ trans('Blanc') }}
                        </th>
                        <th>
                            {{ trans('Bleu') }}
                        </th><th>
                            {{ trans('jaune') }}
                        </th><th>
                            {{ trans('Vert') }}
                        </th><th>
                            {{ trans('Mauve') }}
                        </th><th>
                            {{ trans('Rouge') }}
                        </th><th>
                            {{ trans('Jadida') }}
                        </th><th>
                            {{ trans('Maron') }}
                        </th>
                        <th>
                            {{ trans('Noire') }}
                        </th>
                        <th>
                        {{ trans('MultiColore') }}
                        </th>
                        <th>
                        {{ trans('Total___') }}
                        </th>
                       
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $tamisage)
                        <tr >

                        <td>
                                {{ $tamisage->id ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->ppcopoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->ppcopobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->ppcopojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->ppcopovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->ppcopomauve ?? '' }} kg
                            </td><td>
                                {{ $tamisage->ppcoporouge ?? '' }} kg
                            </td><td>
                                {{ $tamisage->ppcopojadida ?? '' }} kg
                            </td><td>
                                {{ $tamisage->ppcopomaron ?? '' }} kg
                            </td><td>
                                {{ $tamisage->ppcoponoire ?? '' }} kg
                            </td><td>
                                {{ $tamisage->ppcopomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $ppcopo=$tamisage->ppcopoblanc+$tamisage->ppcopobleu+$tamisage->ppcopojaune+$tamisage->ppcopovert+$tamisage->ppcopomauve+$tamisage->ppcoporouge+$tamisage->ppcopojadida+$tamisage->ppcopomaron+$tamisage->ppcoponoire+$tamisage->ppcopomulti ?? '' }} kg
                            </td>

                                    </td>
                         
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>

<div class="card col-lg-12">
    <div class="card-header" style="background-color:#1E90FF;color:white">
        {{ trans('Table de tamisage PPHOMO') }}

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
                            {{ trans('Blanc') }}
                        </th>
                        <th>
                            {{ trans('Bleu') }}
                        </th><th>
                            {{ trans('jaune') }}
                        </th><th>
                            {{ trans('Vert') }}
                        </th><th>
                            {{ trans('Mauve') }}
                        </th><th>
                            {{ trans('Rouge') }}
                        </th><th>
                            {{ trans('Jadida') }}
                        </th><th>
                            {{ trans('Maron') }}
                        </th>
                        <th>
                            {{ trans('Noire') }}
                        </th>
                        <th>
                        {{ trans('MultiColore') }}
                        </th>
                        <th>
                        {{ trans('Total___') }}
                        </th>
                       
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $tamisage)
                        <tr >

                        <td>
                                {{ $tamisage->id ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pphomoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pphomobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pphomojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pphomovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pphomomauve ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pphomorouge ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pphomojadida ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pphomomaron ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pphomonoire ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pphomomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $pphomo=$tamisage->pphomoblanc+$tamisage->pphomobleu+$tamisage->pphomojaune+$tamisage->pphomovert+$tamisage->pphomomauve+$tamisage->pphomorouge+$tamisage->pphomojadida+$tamisage->pphomomaron+$tamisage->pphomonoire+$tamisage->pphomomulti ?? '' }} kg
                            </td>

                                    </td>
                         
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>

<div class="card col-lg-12">
    <div class="card-header" style="background-color:green;color:white">
        {{ trans('Table de tamisage PET') }}

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
                            {{ trans('Blanc') }}
                        </th>
                        <th>
                            {{ trans('Bleu') }}
                        </th>
                        <th>
                        {{ trans('Total') }}
                        </th>
                       
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $tamisage)
                        <tr >

                        <td>
                                {{ $tamisage->id ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->petblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->petbleu ?? '' }} kg
                            </td>
                            
                            <td>
                                {{ $pettri=$tamisage->petblanc+$tamisage->petbleu ?? '' }} kg
                            </td>

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
        {{ trans('Table de tamisage PEHD') }}
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
                    @foreach($data as $key => $tamisage)
                        <tr >
                                   
                        <td>
                                {{ $tamisage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $tamisage->pehdblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pehdbleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pehdjaune ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pehdvert ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pehdneutre ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pehdrouge ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pehdjadida ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pehdmaron ?? '' }} kg
                            </td><td>
                                {{ $tamisage->pehdnoire ?? '' }} kg
                            </td>
                            <td>
                                {{ $tamisage->pehdmulti ?? '' }} kg
                            </td>
                            <td>
                                {{$tamisage->pehdblanc+$tamisage->pehdbleu+$tamisage->pehdjaune+$tamisage->pehdvert+$tamisage->pehdneutre+$tamisage->pehdrouge+$tamisage->pehdjadida+$tamisage->pehdmaron+$tamisage->pehdnoire+$tamisage->pehdmulti ?? '' }} kg
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