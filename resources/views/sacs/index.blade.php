@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Mise en sac </h2>
        </div>
    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('sechages.index') }}"> Retour</a>
        </div>
        <br>

    </div>
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:58%">
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('stockproduitfinis.index') }}"> Stock produit fini</a>
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
    <div class="card-header" style="background-color:#FA8072
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
                                {{ $sac->effectifsac ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->sac ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->dechesac ?? '' }} 
                            </td>
                            <td>
                            {{ $sac->totale ?? '' }} 


                            </td>
                            <td>
                                {{ $sac->date ?? '' }}
                            </td>

                            <td>
                              
                            <a class="btn btn-xs btn" style="background-color:#FA8072;" href="{{ route('sacs.edit', $sac->id) }}">
                                    <h6 style="color:white;">Mise en sac</h6>

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
                    @foreach($data as $key => $sac)
                        <tr >

                        <td>
                                {{ $sac->id ?? '' }}
                            </td>
                            <td>
                                {{ $sac->ppcopoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcopobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcopojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcopovert ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcopomauve ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoporouge ?? '' }} 
                            </td><td>
                                {{ $sac->ppcopojadida ?? '' }} 
                            </td><td>
                                {{ $sac->ppcopomaron ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoponoire ?? '' }} 
                            </td><td>
                                {{ $sac->ppcopomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $ppcopo=$sac->ppcopoblanc+$sac->ppcopobleu+$sac->ppcopojaune+$sac->ppcopovert+$sac->ppcopomauve+$sac->ppcoporouge+$sac->ppcopojadida+$sac->ppcopomaron+$sac->ppcoponoire+$sac->ppcopomulti ?? '' }} 
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
                    @foreach($data as $key => $sac)
                        <tr >

                        <td>
                                {{ $sac->id ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomovert ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomomauve ?? '' }} 
                            </td><td>
                                {{ $sac->pphomorouge ?? '' }} 
                            </td><td>
                                {{ $sac->pphomojadida ?? '' }} 
                            </td><td>
                                {{ $sac->pphomomaron ?? '' }} 
                            </td><td>
                                {{ $sac->pphomonoire ?? '' }} 
                            </td><td>
                                {{ $sac->pphomomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $pphomo=$sac->pphomoblanc+$sac->pphomobleu+$sac->pphomojaune+$sac->pphomovert+$sac->pphomomauve+$sac->pphomorouge+$sac->pphomojadida+$sac->pphomomaron+$sac->pphomonoire+$sac->pphomomulti ?? '' }} 
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
                    @foreach($data as $key => $sac)
                        <tr >

                        <td>
                                {{ $sac->id ?? '' }}
                            </td>
                            <td>
                                {{ $sac->petpreformblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->petpreformbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$sac->petpreformblanc+$sac->petpreformbleu ?? '' }} 
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
                    @foreach($data as $key => $sac)
                        <tr >

                        <td>
                                {{ $sac->id ?? '' }}
                            </td>
                            <td>
                                {{ $sac->petbouteilleblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->petbouteillebleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$sac->petbouteilleblanc+$sac->petbouteillebleu ?? '' }} 
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
                    @foreach($data as $key => $sac)
                        <tr >
                                   
                        <td>
                                {{ $sac->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $sac->pehdcasierblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdcasierbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdcasierjaune ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiervert ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasierneutre ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasierrouge ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasierjadida ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiermaron ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiernoire ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdcasiermulti ?? '' }} 
                            </td>
                            <td>
                                {{$sac->pehdcasierblanc+$sac->pehdcasierbleu+$sac->pehdcasierjaune+$sac->pehdcasiervert+$sac->pehdcasierneutre+$sac->pehdcasierrouge+$sac->pehdcasierjadida+$sac->pehdcasiermaron+$sac->pehdcasiernoire+$sac->pehdcasiermulti ?? '' }} 
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