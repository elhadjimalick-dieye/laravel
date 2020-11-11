@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier de lavage hors circuits</h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('triages.index') }}"> Retour</a>
        </div>
        <br>

    </div>
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:58%">
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('broyages.index') }}"> Broyage</a>
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
    <div class="card-header" style="background-color:green;color:white">
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
                    @foreach($data as $key => $lavagehor)
                        <tr >
                            
                            <td>
                                {{ $lavagehor->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavagehor->effectiflav ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->lavagehor ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->dechelavage ?? '' }} 
                            </td>
                            <td>
                            {{ $lavagehor->totale ?? '' }} 


                            </td>
                            <td>
                                {{ $lavagehor->date ?? '' }}
                            </td>

                            <td>
                              
                                    <a class="btn btn-xs btn-success" href="{{ route('lavageshors.edit', $lavagehor->id) }}">
                                    <h6>laver</h6>


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
        {{ trans('Table de lavagehor PPCOPO') }}

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
                    @foreach($data as $key => $lavagehor)
                        <tr >

                        <td>
                                {{ $lavagehor->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavagehor->ppcopoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->ppcopobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->ppcopojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->ppcopovert ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->ppcopomauve ?? '' }} 
                            </td><td>
                                {{ $lavagehor->ppcoporouge ?? '' }} 
                            </td><td>
                                {{ $lavagehor->ppcopojadida ?? '' }} 
                            </td><td>
                                {{ $lavagehor->ppcopomaron ?? '' }} 
                            </td><td>
                                {{ $lavagehor->ppcoponoire ?? '' }} 
                            </td><td>
                                {{ $lavagehor->ppcopomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $ppcopo=$lavagehor->ppcopoblanc+$lavagehor->ppcopobleu+$lavagehor->ppcopojaune+$lavagehor->ppcopovert+$lavagehor->ppcopomauve+$lavagehor->ppcoporouge+$lavagehor->ppcopojadida+$lavagehor->ppcopomaron+$lavagehor->ppcoponoire+$lavagehor->ppcopomulti ?? '' }} 
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
        {{ trans('Table de lavagehor PPHOMO') }}

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
                    @foreach($data as $key => $lavagehor)
                        <tr >

                        <td>
                                {{ $lavagehor->id ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pphomoblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pphomobleu ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pphomojaune ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pphomovert ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pphomomauve ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pphomorouge ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pphomojadida ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pphomomaron ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pphomonoire ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pphomomulti ?? '' }} 
                            </td>
                            <td>
                                {{ $pphomo=$lavagehor->pphomoblanc+$lavagehor->pphomobleu+$lavagehor->pphomojaune+$lavagehor->pphomovert+$lavagehor->pphomomauve+$lavagehor->pphomorouge+$lavagehor->pphomojadida+$lavagehor->pphomomaron+$lavagehor->pphomonoire+$lavagehor->pphomomulti ?? '' }} 
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
        {{ trans('Table de lavagehor PET PREFORME') }}

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
                    @foreach($data as $key => $lavagehor)
                        <tr >

                        <td>
                                {{ $lavagehor->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavagehor->petpreformblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->petpreformbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$lavagehor->petpreformblanc+$lavagehor->petpreformbleu ?? '' }} 
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
        {{ trans('Table de lavagehor PET BOUTEILLE') }}

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
                    @foreach($data as $key => $lavagehor)
                        <tr >

                        <td>
                                {{ $lavagehor->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavagehor->petbouteilleblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->petbouteillebleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$lavagehor->petbouteilleblanc+$lavagehor->petbouteillebleu ?? '' }} 
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
        {{ trans('Table de lavagehor PEHD CASIER') }}
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
                    @foreach($data as $key => $lavagehor)
                        <tr >
                                   
                        <td>
                                {{ $lavagehor->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $lavagehor->pehdcasierblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pehdcasierbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pehdcasierjaune ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdcasiervert ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdcasierneutre ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdcasierrouge ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdcasierjadida ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdcasiermaron ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdcasiernoire ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pehdcasiermulti ?? '' }} 
                            </td>
                            <td>
                                {{$lavagehor->pehdcasierblanc+$lavagehor->pehdcasierbleu+$lavagehor->pehdcasierjaune+$lavagehor->pehdcasiervert+$lavagehor->pehdcasierneutre+$lavagehor->pehdcasierrouge+$lavagehor->pehdcasierjadida+$lavagehor->pehdcasiermaron+$lavagehor->pehdcasiernoire+$lavagehor->pehdcasiermulti ?? '' }} 
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
        {{ trans('Table de lavagehor PEHD SOUFFLAGE') }}
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
                    @foreach($data as $key => $lavagehor)
                        <tr >
                                   
                        <td>
                                {{ $lavagehor->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $lavagehor->pehdsouflageblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pehdsouflagebleu ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pehdsouflagejaune ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdsouflagevert ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdsouflageneutre ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdsouflagerouge ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdsouflagejadida ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdsouflagemaron ?? '' }} 
                            </td><td>
                                {{ $lavagehor->pehdsouflagenoire ?? '' }} 
                            </td>
                            <td>
                                {{ $lavagehor->pehdsouflagemulti ?? '' }} 
                            </td>
                            <td>
                                {{$lavagehor->pehdsouflageblanc+$lavagehor->pehdsouflagebleu+$lavagehor->pehdsouflagejaune+$lavagehor->pehdsouflagevert+$lavagehor->pehdsouflageneutre+$lavagehor->pehdsouflagerouge+$lavagehor->pehdsouflagejadida+$lavagehor->pehdsouflagemaron+$lavagehor->pehdsouflagenoire+$lavagehor->pehdsouflagemulti ?? '' }} 
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