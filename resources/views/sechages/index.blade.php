@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier de sechage </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('lavages.index') }}"> Retour</a>
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
    <div class="card-header" style="background-color:#9932CC;color:white">
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
                    @foreach($data as $key => $sechage)
                        <tr >
                            
                            <td>
                                {{ $sechage->id ?? '' }}
                            </td>
                            <td>
                                {{ $sechage->effectiflav ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->sechage ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->dechesechage ?? '' }} 
                            </td>
                            <td>
                            {{ $sechage->totale ?? '' }} 


                            </td>
                            <td>
                                {{ $sechage->date ?? '' }}
                            </td>

                            <td>
                              
                            <a class="btn btn-xs btn" style="background-color:#9932CC;" href="{{ route('sechages.edit', $sechage->id) }}">
                                    <h6 style="color:white;">Secher</h6>

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
        {{ trans('PPCOPO') }}

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
                    @foreach($data as $key => $sechage)
                        <tr >

                        <td>
                                {{ $sechage->id ?? '' }}
                            </td>
                            <td>
                                {{ $sechage->ppcopoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->ppcopobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->ppcopojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->ppcopovert ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->ppcopomauve ?? '' }} 
                            </td><td>
                                {{ $sechage->ppcoporouge ?? '' }} 
                            </td><td>
                                {{ $sechage->ppcopojadida ?? '' }} 
                            </td><td>
                                {{ $sechage->ppcopomaron ?? '' }} 
                            </td><td>
                                {{ $sechage->ppcoponoire ?? '' }} 
                            </td><td>
                                {{ $sechage->ppcopomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $ppcopo=$sechage->ppcopoblanc+$sechage->ppcopobleu+$sechage->ppcopojaune+$sechage->ppcopovert+$sechage->ppcopomauve+$sechage->ppcoporouge+$sechage->ppcopojadida+$sechage->ppcopomaron+$sechage->ppcoponoire+$sechage->ppcopomulti ?? '' }} 
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
        {{ trans('PPHOMO') }}

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
                    @foreach($data as $key => $sechage)
                        <tr >

                        <td>
                                {{ $sechage->id ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pphomoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pphomobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pphomojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pphomovert ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pphomomauve ?? '' }} 
                            </td><td>
                                {{ $sechage->pphomorouge ?? '' }} 
                            </td><td>
                                {{ $sechage->pphomojadida ?? '' }} 
                            </td><td>
                                {{ $sechage->pphomomaron ?? '' }} 
                            </td><td>
                                {{ $sechage->pphomonoire ?? '' }} 
                            </td><td>
                                {{ $sechage->pphomomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $pphomo=$sechage->pphomoblanc+$sechage->pphomobleu+$sechage->pphomojaune+$sechage->pphomovert+$sechage->pphomomauve+$sechage->pphomorouge+$sechage->pphomojadida+$sechage->pphomomaron+$sechage->pphomonoire+$sechage->pphomomulti ?? '' }} 
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
        {{ trans('PET PREFORME') }}

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
                    @foreach($data as $key => $sechage)
                        <tr >

                        <td>
                                {{ $sechage->id ?? '' }}
                            </td>
                            <td>
                                {{ $sechage->petpreformblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->petpreformbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$sechage->petpreformblanc+$sechage->petpreformbleu ?? '' }} 
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
        {{ trans('PET BOUTEILLE') }}

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
                    @foreach($data as $key => $sechage)
                        <tr >

                        <td>
                                {{ $sechage->id ?? '' }}
                            </td>
                            <td>
                                {{ $sechage->petbouteilleblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->petbouteillebleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$sechage->petbouteilleblanc+$sechage->petbouteillebleu ?? '' }} 
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
        {{ trans('PEHD CASIER') }}
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
                    @foreach($data as $key => $sechage)
                        <tr >
                                   
                        <td>
                                {{ $sechage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $sechage->pehdcasierblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pehdcasierbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pehdcasierjaune ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdcasiervert ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdcasierneutre ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdcasierrouge ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdcasierjadida ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdcasiermaron ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdcasiernoire ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pehdcasiermulti ?? '' }} 
                            </td>
                            <td>
                                {{$sechage->pehdcasierblanc+$sechage->pehdcasierbleu+$sechage->pehdcasierjaune+$sechage->pehdcasiervert+$sechage->pehdcasierneutre+$sechage->pehdcasierrouge+$sechage->pehdcasierjadida+$sechage->pehdcasiermaron+$sechage->pehdcasiernoire+$sechage->pehdcasiermulti ?? '' }} 
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
                    @foreach($data as $key => $sechage)
                        <tr >
                                   
                        <td>
                                {{ $sechage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $sechage->pehdsouflageblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pehdsouflagebleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pehdsouflagejaune ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdsouflagevert ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdsouflageneutre ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdsouflagerouge ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdsouflagejadida ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdsouflagemaron ?? '' }} 
                            </td><td>
                                {{ $sechage->pehdsouflagenoire ?? '' }} 
                            </td>
                            <td>
                                {{ $sechage->pehdsouflagemulti ?? '' }} 
                            </td>
                            <td>
                                {{$sechage->pehdsouflageblanc+$sechage->pehdsouflagebleu+$sechage->pehdsouflagejaune+$sechage->pehdsouflagevert+$sechage->pehdsouflageneutre+$sechage->pehdsouflagerouge+$sechage->pehdsouflagejadida+$sechage->pehdsouflagemaron+$sechage->pehdsouflagenoire+$sechage->pehdsouflagemulti ?? '' }} 
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