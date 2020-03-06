@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier de Tri </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('depotProductions.index') }}"> Retour</a>
        </div>
        <br>

    </div>
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:58%">
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('lavageshors.index') }}"> Lavage hors circuit</a>
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
                                {{ $triage->effectiftri ?? '' }} 
                            </td>
                            <td>
                                {{ $triage->premierequantite ?? '' }}
                            </td>
                            <td>
                                {{ $triage->dechetriage ?? '' }}
                            </td>
                            <td>
                            {{ $triage->totale ?? '' }}


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
                                {{ $triage->ppcopoblanc ?? '' }}
                            </td>
                            <td>
                                {{ $triage->ppcopobleu ?? '' }}
                            </td>
                            <td>
                                {{ $triage->ppcopojaune ?? '' }}
                            </td>
                            <td>
                                {{ $triage->ppcopovert ?? '' }}
                            </td>
                            <td>
                                {{ $triage->ppcopomauve ?? '' }}
                            </td><td>
                                {{ $triage->ppcoporouge ?? '' }}
                            </td><td>
                                {{ $triage->ppcopojadida ?? '' }}
                            </td><td>
                                {{ $triage->ppcopomaron ?? '' }}
                            </td><td>
                                {{ $triage->ppcoponoire ?? '' }}
                            </td><td>
                                {{ $triage->ppcopomulti ?? '' }}
                            </td>
                            <td>
                                {{ $ppcopo=$triage->ppcopoblanc+$triage->ppcopobleu+$triage->ppcopojaune+$triage->ppcopovert+$triage->ppcopomauve+$triage->ppcoporouge+$triage->ppcopojadida+$triage->ppcopomaron+$triage->ppcoponoire+$triage->ppcopomulti ?? '' }}
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
                                {{ $triage->pphomoblanc ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pphomobleu ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pphomojaune ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pphomovert ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pphomomauve ?? '' }}
                            </td><td>
                                {{ $triage->pphomorouge ?? '' }}
                            </td><td>
                                {{ $triage->pphomojadida ?? '' }}
                            </td><td>
                                {{ $triage->pphomomaron ?? '' }}
                            </td><td>
                                {{ $triage->pphomonoire ?? '' }}
                            </td><td>
                                {{ $triage->pphomomulti ?? '' }}
                            </td>
                            <td>
                                {{ $pphomo=$triage->pphomoblanc+$triage->pphomobleu+$triage->pphomojaune+$triage->pphomovert+$triage->pphomomauve+$triage->pphomorouge+$triage->pphomojadida+$triage->pphomomaron+$triage->pphomonoire+$triage->pphomomulti ?? '' }}
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
        {{ trans('Table de triage PET PREFORME') }}

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
                                {{ $triage->petpreformblanc ?? '' }}
                            </td>
                            <td>
                                {{ $triage->petpreformbleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$triage->petpreformblanc+$triage->petpreformbleu ?? '' }}
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
        {{ trans('Table de triage PET BOUTEILLE') }}

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
                                {{ $triage->petbouteilleblanc ?? '' }}
                            </td>
                            <td>
                                {{ $triage->petbouteillebleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$triage->petbouteilleblanc+$triage->petbouteillebleu ?? '' }}
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
        {{ trans('Table de triage PEHD CASIER') }}
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
                                {{ $triage->pehdcasierblanc ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pehdcasierbleu ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pehdcasierjaune ?? '' }}
                            </td><td>
                                {{ $triage->pehdcasiervert ?? '' }}
                            </td><td>
                                {{ $triage->pehdcasierneutre ?? '' }}
                            </td><td>
                                {{ $triage->pehdcasierrouge ?? '' }}
                            </td><td>
                                {{ $triage->pehdcasierjadida ?? '' }}
                            </td><td>
                                {{ $triage->pehdcasiermaron ?? '' }}
                            </td><td>
                                {{ $triage->pehdcasiernoire ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pehdcasiermulti ?? '' }}
                            </td>
                            <td>
                                {{$triage->pehdcasierblanc+$triage->pehdcasierbleu+$triage->pehdcasierjaune+$triage->pehdcasiervert+$triage->pehdcasierneutre+$triage->pehdcasierrouge+$triage->pehdcasierjadida+$triage->pehdcasiermaron+$triage->pehdcasiernoire+$triage->pehdcasiermulti ?? '' }}
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
        {{ trans('Table de triage PEHD SOUFFLAGE') }}
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
                                {{ $triage->pehdsouflageblanc ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pehdsouflagebleu ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pehdsouflagejaune ?? '' }}
                            </td><td>
                                {{ $triage->pehdsouflagevert ?? '' }}
                            </td><td>
                                {{ $triage->pehdsouflageneutre ?? '' }}
                            </td><td>
                                {{ $triage->pehdsouflagerouge ?? '' }}
                            </td><td>
                                {{ $triage->pehdsouflagejadida ?? '' }}
                            </td><td>
                                {{ $triage->pehdsouflagemaron ?? '' }}
                            </td><td>
                                {{ $triage->pehdsouflagenoire ?? '' }}
                            </td>
                            <td>
                                {{ $triage->pehdsouflagemulti ?? '' }}
                            </td>
                            <td>
                                {{$triage->pehdsouflageblanc+$triage->pehdsouflagebleu+$triage->pehdsouflagejaune+$triage->pehdsouflagevert+$triage->pehdsouflageneutre+$triage->pehdsouflagerouge+$triage->pehdsouflagejadida+$triage->pehdsouflagemaron+$triage->pehdsouflagenoire+$triage->pehdsouflagemulti ?? '' }}
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