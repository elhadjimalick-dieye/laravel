@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier du Tri </h2>
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
    <div class="card-header"  style="background-color:#1E90FF;color:white" >
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
                    @foreach($data as $key => $triage)
                        <tr >
                            
                            <td>
                                {{ $triage->id ?? '' }}
                            </td>
                            <td>
                                {{ $triage->effectiftri ?? '' }} personne(s)
                            </td>
                            <td>
                                {{ $triage->premierequantite ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->dechetriage ?? '' }} kg
                            </td>
                            <td>
                            {{ $triage->totale ?? '' }} kg


                            </td>
                            <td>
                                {{ $triage->date ?? '' }}
                            </td>

                            <td>
                              
                                    <a class="btn btn-xs btn-primary" href="{{ route('triages.edit', $triage->id) }}">
                                    <h6>Trier</h6>


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
        {{ trans('Table de triage PPCOPO') }}

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
                    @foreach($data as $key => $triage)
                        <tr >

                        <td>
                                {{ $triage->id ?? '' }}
                            </td>
                            <td>
                                {{ $triage->ppcopoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->ppcopobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->ppcopojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->ppcopovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->ppcopomauve ?? '' }} kg
                            </td><td>
                                {{ $triage->ppcoporouge ?? '' }} kg
                            </td><td>
                                {{ $triage->ppcopojadida ?? '' }} kg
                            </td><td>
                                {{ $triage->ppcopomaron ?? '' }} kg
                            </td><td>
                                {{ $triage->ppcoponoire ?? '' }} kg
                            </td><td>
                                {{ $triage->ppcopomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $ppcopo=$triage->ppcopoblanc+$triage->ppcopobleu+$triage->ppcopojaune+$triage->ppcopovert+$triage->ppcopomauve+$triage->ppcoporouge+$triage->ppcopojadida+$triage->ppcopomaron+$triage->ppcoponoire+$triage->ppcopomulti ?? '' }} kg
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
        {{ trans('Table de triage PPHOMO') }}

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
                    @foreach($data as $key => $triage)
                        <tr >

                        <td>
                                {{ $triage->id ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pphomoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pphomobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pphomojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pphomovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pphomomauve ?? '' }} kg
                            </td><td>
                                {{ $triage->pphomorouge ?? '' }} kg
                            </td><td>
                                {{ $triage->pphomojadida ?? '' }} kg
                            </td><td>
                                {{ $triage->pphomomaron ?? '' }} kg
                            </td><td>
                                {{ $triage->pphomonoire ?? '' }} kg
                            </td><td>
                                {{ $triage->pphomomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $pphomo=$triage->pphomoblanc+$triage->pphomobleu+$triage->pphomojaune+$triage->pphomovert+$triage->pphomomauve+$triage->pphomorouge+$triage->pphomojadida+$triage->pphomomaron+$triage->pphomonoire+$triage->pphomomulti ?? '' }} kg
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
        {{ trans('Table de triage PET') }}

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
                    @foreach($data as $key => $triage)
                        <tr >

                        <td>
                                {{ $triage->id ?? '' }}
                            </td>
                            <td>
                                {{ $triage->petblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->petbleu ?? '' }} kg
                            </td>
                            
                            <td>
                                {{ $pettri=$triage->petblanc+$triage->petbleu ?? '' }} kg
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
        {{ trans('Table de triage PEHD') }}
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
                        {{ trans('Total___') }}

                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $triage)
                        <tr >
                                   
                        <td>
                                {{ $triage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $triage->pehdblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pehdbleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pehdjaune ?? '' }} kg
                            </td><td>
                                {{ $triage->pehdvert ?? '' }} kg
                            </td><td>
                                {{ $triage->pehdneutre ?? '' }} kg
                            </td><td>
                                {{ $triage->pehdrouge ?? '' }} kg
                            </td><td>
                                {{ $triage->pehdjadida ?? '' }} kg
                            </td><td>
                                {{ $triage->pehdmaron ?? '' }} kg
                            </td><td>
                                {{ $triage->pehdnoire ?? '' }} kg
                            </td>
                            <td>
                                {{ $triage->pehdmulti ?? '' }} kg
                            </td>
                            <td>
                                {{$triage->pehdblanc+$triage->pehdbleu+$triage->pehdjaune+$triage->pehdvert+$triage->pehdneutre+$triage->pehdrouge+$triage->pehdjadida+$triage->pehdmaron+$triage->pehdnoire+$triage->pehdmulti ?? '' }} kg
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