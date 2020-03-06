@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier de Broyage </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('lavageshors.index') }}"> Retour</a>
        </div>
        <br>

    </div>
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:58%">
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('tamisages.index') }}"> Tamisage</a>
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
    <div class="card-header" style="background-color:#DC143C;color:white">
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
                            {{ trans('Heure de machine') }}
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
                    @foreach($data as $key => $broyage)
                        <tr >
                            
                            <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            <td>
                                {{ $broyage->effectifbro ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->heuremachine ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->broyage ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->dechebroyage ?? '' }} 
                            </td>
                            <td>
                            {{ $broyage->totale ?? '' }} 


                            </td>
                            <td>
                                {{ $broyage->date ?? '' }}
                            </td>

                            <td>
                              
                                    <a class="btn btn-xs btn-danger" href="{{ route('broyages.edit', $broyage->id) }}">
                                    <h6>Broyer</h6>


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
        {{ trans('Table de broyage PPCOPO') }}

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
                    @foreach($data as $key => $broyage)
                        <tr >

                        <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            <td>
                                {{ $broyage->ppcopoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->ppcopobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->ppcopojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->ppcopovert ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->ppcopomauve ?? '' }} 
                            </td><td>
                                {{ $broyage->ppcoporouge ?? '' }} 
                            </td><td>
                                {{ $broyage->ppcopojadida ?? '' }} 
                            </td><td>
                                {{ $broyage->ppcopomaron ?? '' }} 
                            </td><td>
                                {{ $broyage->ppcoponoire ?? '' }} 
                            </td><td>
                                {{ $broyage->ppcopomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $ppcopo=$broyage->ppcopoblanc+$broyage->ppcopobleu+$broyage->ppcopojaune+$broyage->ppcopovert+$broyage->ppcopomauve+$broyage->ppcoporouge+$broyage->ppcopojadida+$broyage->ppcopomaron+$broyage->ppcoponoire+$broyage->ppcopomulti ?? '' }} 
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
        {{ trans('Table de broyage PPHOMO') }}

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
                    @foreach($data as $key => $broyage)
                        <tr >

                        <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            <td>
                                {{ $broyage->pphomoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pphomobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pphomojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pphomovert ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pphomomauve ?? '' }} 
                            </td><td>
                                {{ $broyage->pphomorouge ?? '' }} 
                            </td><td>
                                {{ $broyage->pphomojadida ?? '' }} 
                            </td><td>
                                {{ $broyage->pphomomaron ?? '' }} 
                            </td><td>
                                {{ $broyage->pphomonoire ?? '' }} 
                            </td><td>
                                {{ $broyage->pphomomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $pphomo=$broyage->pphomoblanc+$broyage->pphomobleu+$broyage->pphomojaune+$broyage->pphomovert+$broyage->pphomomauve+$broyage->pphomorouge+$broyage->pphomojadida+$broyage->pphomomaron+$broyage->pphomonoire+$broyage->pphomomulti ?? '' }} 
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
        {{ trans('Table de broyage PET PREFORME') }}

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
                    @foreach($data as $key => $broyage)
                        <tr >

                        <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            <td>
                                {{ $broyage->petpreformblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->petpreformbleu ?? '' }}  
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$broyage->petpreformblanc+$broyage->petpreformbleu ?? '' }} 
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
        {{ trans('Table de broyage PET BOUTEILLE') }}

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
                    @foreach($data as $key => $broyage)
                        <tr >

                        <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            <td>
                                {{ $broyage->petbouteilleblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->petbouteillebleu ?? '' }}  
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$broyage->petbouteilleblanc+$broyage->petbouteillebleu ?? '' }} 
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
        {{ trans('Table de broyage PEHD CASIER') }}
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
                    @foreach($data as $key => $broyage)
                        <tr >
                                   
                        <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $broyage->pehdcasierblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pehdcasierbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pehdcasierjaune ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdcasiervert ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdcasierneutre ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdcasierrouge ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdcasierjadida ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdcasiermaron ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdcasiernoire ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pehdcasiermulti ?? '' }} 
                            </td>
                            <td>
                                {{$broyage->pehdcasierblanc+$broyage->pehdcasierbleu+$broyage->pehdcasierjaune+$broyage->pehdcasiervert+$broyage->pehdcasierneutre+$broyage->pehdcasierrouge+$broyage->pehdcasierjadida+$broyage->pehdcasiermaron+$broyage->pehdcasiernoire+$broyage->pehdcasiermulti ?? '' }} 
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
        {{ trans('Table de broyage PEHD SOUFFLAGE') }}
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
                    @foreach($data as $key => $broyage)
                        <tr >
                                   
                        <td>
                                {{ $broyage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $broyage->pehdsouflageblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pehdsouflagebleu ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pehdsouflagejaune ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdsouflagevert ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdsouflageneutre ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdsouflagerouge ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdsouflagejadida ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdsouflagemaron ?? '' }} 
                            </td><td>
                                {{ $broyage->pehdsouflagenoire ?? '' }} 
                            </td>
                            <td>
                                {{ $broyage->pehdsouflagemulti ?? '' }} 
                            </td>
                            <td>
                                {{$broyage->pehdsouflageblanc+$broyage->pehdsouflagebleu+$broyage->pehdsouflagejaune+$broyage->pehdsouflagevert+$broyage->pehdsouflageneutre+$broyage->pehdsouflagerouge+$broyage->pehdsouflagejadida+$broyage->pehdsouflagemaron+$broyage->pehdsouflagenoire+$broyage->pehdsouflagemulti ?? '' }} 
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