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
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tamisages.index') }}"> Retour</a>
        </div>
        <br>

    </div>
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:58%">
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('lavages.index') }}"> Lavage</a>
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
                                {{ $tamisage->effectiftami ?? '' }} 
                            </td>
                            <td>
                                {{ $tamisage->tamisage ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->dechetamisage ?? '' }}
                            </td>
                            <td>
                            {{ $tamisage->totale ?? '' }}


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
                                {{ $tamisage->ppcopoblanc ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->ppcopobleu ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->ppcopojaune ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->ppcopovert ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->ppcopomauve ?? '' }}
                            </td><td>
                                {{ $tamisage->ppcoporouge ?? '' }}
                            </td><td>
                                {{ $tamisage->ppcopojadida ?? '' }}
                            </td><td>
                                {{ $tamisage->ppcopomaron ?? '' }}
                            </td><td>
                                {{ $tamisage->ppcoponoire ?? '' }}
                            </td><td>
                                {{ $tamisage->ppcopomulti ?? '' }}
                            </td>
                            <td>
                                {{ $ppcopo=$tamisage->ppcopoblanc+$tamisage->ppcopobleu+$tamisage->ppcopojaune+$tamisage->ppcopovert+$tamisage->ppcopomauve+$tamisage->ppcoporouge+$tamisage->ppcopojadida+$tamisage->ppcopomaron+$tamisage->ppcoponoire+$tamisage->ppcopomulti ?? '' }}
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
    <div class="card-header" style="background-color:#008B8B;color:white">
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
                                {{ $tamisage->id ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pphomoblanc ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pphomobleu ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pphomojaune ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pphomovert ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pphomomauve ?? '' }}
                            </td><td>
                                {{ $tamisage->pphomorouge ?? '' }}
                            </td><td>
                                {{ $tamisage->pphomojadida ?? '' }}
                            </td><td>
                                {{ $tamisage->pphomomaron ?? '' }}
                            </td><td>
                                {{ $tamisage->pphomonoire ?? '' }}
                            </td><td>
                                {{ $tamisage->pphomomulti ?? '' }}
                            </td>
                            <td>
                                {{ $pphomo=$tamisage->pphomoblanc+$tamisage->pphomobleu+$tamisage->pphomojaune+$tamisage->pphomovert+$tamisage->pphomomauve+$tamisage->pphomorouge+$tamisage->pphomojadida+$tamisage->pphomomaron+$tamisage->pphomonoire+$tamisage->pphomomulti ?? '' }}
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
        {{ trans('Table de tamisage PET PREFORME') }}

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
                                {{ $tamisage->petpreformblanc ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->petpreformbleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$tamisage->petpreformblanc+$tamisage->petpreformbleu ?? '' }}
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
        {{ trans('Table de tamisage PET BOUTEILLE') }}

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
                                {{ $tamisage->petbouteilleblanc ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->petbouteillebleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$tamisage->petbouteilleblanc+$tamisage->petbouteillebleu ?? '' }}
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
        {{ trans('Table de tamisage PEHD CASIER') }}
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
                                {{ $tamisage->pehdcasierblanc ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pehdcasierbleu ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pehdcasierjaune ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdcasiervert ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdcasierneutre ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdcasierrouge ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdcasierjadida ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdcasiermaron ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdcasiernoire ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pehdcasiermulti ?? '' }}
                            </td>
                            <td>
                                {{$tamisage->pehdcasierblanc+$tamisage->pehdcasierbleu+$tamisage->pehdcasierjaune+$tamisage->pehdcasiervert+$tamisage->pehdcasierneutre+$tamisage->pehdcasierrouge+$tamisage->pehdcasierjadida+$tamisage->pehdcasiermaron+$tamisage->pehdcasiernoire+$tamisage->pehdcasiermulti ?? '' }}
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
        {{ trans('Table de tamisage PEHD SOUFFLAGE') }}
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
                                {{ $tamisage->pehdsouflageblanc ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pehdsouflagebleu ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pehdsouflagejaune ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdsouflagevert ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdsouflageneutre ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdsouflagerouge ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdsouflagejadida ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdsouflagemaron ?? '' }}
                            </td><td>
                                {{ $tamisage->pehdsouflagenoire ?? '' }}
                            </td>
                            <td>
                                {{ $tamisage->pehdsouflagemulti ?? '' }}
                            </td>
                            <td>
                                {{$tamisage->pehdsouflageblanc+$tamisage->pehdsouflagebleu+$tamisage->pehdsouflagejaune+$tamisage->pehdsouflagevert+$tamisage->pehdsouflageneutre+$tamisage->pehdsouflagerouge+$tamisage->pehdsouflagejadida+$tamisage->pehdsouflagemaron+$tamisage->pehdsouflagenoire+$tamisage->pehdsouflagemulti ?? '' }}
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