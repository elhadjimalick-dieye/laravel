@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Atelier de lavage </h2>
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
            <a class="btn btn-xs btn" style="background-color:green;color:white" href="{{ route('sechages.index') }}"> Sechage</a>
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
    <div class="card-header" style="background-color:grey;color:white">
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
                    @foreach($data as $key => $lavage)
                        <tr >
                            
                            <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->effectiflav ?? '' }} 
                            </td>
                            <td>
                                {{ $lavage->lavage ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->dechelavage ?? '' }}
                            </td>
                            <td>
                            {{ $lavage->totale ?? '' }}


                            </td>
                            <td>
                                {{ $lavage->date ?? '' }}
                            </td>

                            <td>
                              
                                    <a class="btn btn-xs btn-secondary" href="{{ route('lavages.edit', $lavage->id) }}">
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
        {{ trans('Table de lavage PPCOPO') }}

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
                    @foreach($data as $key => $lavage)
                        <tr >

                        <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->ppcopoblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->ppcopobleu ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->ppcopojaune ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->ppcopovert ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->ppcopomauve ?? '' }}
                            </td><td>
                                {{ $lavage->ppcoporouge ?? '' }}
                            </td><td>
                                {{ $lavage->ppcopojadida ?? '' }}
                            </td><td>
                                {{ $lavage->ppcopomaron ?? '' }}
                            </td><td>
                                {{ $lavage->ppcoponoire ?? '' }}
                            </td><td>
                                {{ $lavage->ppcopomulti ?? '' }}
                            </td>
                            <td>
                                {{ $ppcopo=$lavage->ppcopoblanc+$lavage->ppcopobleu+$lavage->ppcopojaune+$lavage->ppcopovert+$lavage->ppcopomauve+$lavage->ppcoporouge+$lavage->ppcopojadida+$lavage->ppcopomaron+$lavage->ppcoponoire+$lavage->ppcopomulti ?? '' }}
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
        {{ trans('Table de lavage PPHOMO') }}

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
                    @foreach($data as $key => $lavage)
                        <tr >

                        <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pphomoblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pphomobleu ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pphomojaune ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pphomovert ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pphomomauve ?? '' }}
                            </td><td>
                                {{ $lavage->pphomorouge ?? '' }}
                            </td><td>
                                {{ $lavage->pphomojadida ?? '' }}
                            </td><td>
                                {{ $lavage->pphomomaron ?? '' }}
                            </td><td>
                                {{ $lavage->pphomonoire ?? '' }}
                            </td><td>
                                {{ $lavage->pphomomulti ?? '' }}
                            </td>
                            <td>
                                {{ $pphomo=$lavage->pphomoblanc+$lavage->pphomobleu+$lavage->pphomojaune+$lavage->pphomovert+$lavage->pphomomauve+$lavage->pphomorouge+$lavage->pphomojadida+$lavage->pphomomaron+$lavage->pphomonoire+$lavage->pphomomulti ?? '' }}
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
        {{ trans('Table de lavage PET BOUTEILLE') }}

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
                    @foreach($data as $key => $lavage)
                        <tr >

                        <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->petbouteilleblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->petbouteillebleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $petbouteilletri=$lavage->petbouteilleblanc+$lavage->petbouteillebleu ?? '' }}
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
        {{ trans('Table de lavage PET PREFORM') }}

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
                    @foreach($data as $key => $lavage)
                        <tr >

                        <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->petpreformblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->petpreformbleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $petpreformtri=$lavage->petpreformblanc+$lavage->petpreformbleu ?? '' }}
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
        {{ trans('Table de lavage PEHD CASIER') }}
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
                    @foreach($data as $key => $lavage)
                        <tr >
                                   
                        <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $lavage->pehdcasierblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdcasierbleu ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdcasierjaune ?? '' }}
                            </td><td>
                                {{ $lavage->pehdcasiervert ?? '' }}
                            </td><td>
                                {{ $lavage->pehdcasierneutre ?? '' }}
                            </td><td>
                                {{ $lavage->pehdcasierrouge ?? '' }}
                            </td><td>
                                {{ $lavage->pehdcasierjadida ?? '' }}
                            </td><td>
                                {{ $lavage->pehdcasiermaron ?? '' }}
                            </td><td>
                                {{ $lavage->pehdcasiernoire ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdcasiermulti ?? '' }}
                            </td>
                            <td>
                                {{$lavage->pehdcasierblanc+$lavage->pehdcasierbleu+$lavage->pehdcasierjaune+$lavage->pehdcasiervert+$lavage->pehdcasierneutre+$lavage->pehdcasierrouge+$lavage->pehdcasierjadida+$lavage->pehdcasiermaron+$lavage->pehdcasiernoire+$lavage->pehdcasiermulti ?? '' }}
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
        {{ trans('Table de lavage PEHD SOUFFLAGE') }}
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
                    @foreach($data as $key => $lavage)
                        <tr >
                                   
                        <td>
                                {{ $lavage->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $lavage->pehdsouflageblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdsouflagebleu ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdsouflagejaune ?? '' }}
                            </td><td>
                                {{ $lavage->pehdsouflagevert ?? '' }}
                            </td><td>
                                {{ $lavage->pehdsouflageneutre ?? '' }}
                            </td><td>
                                {{ $lavage->pehdsouflagerouge ?? '' }}
                            </td><td>
                                {{ $lavage->pehdsouflagejadida ?? '' }}
                            </td><td>
                                {{ $lavage->pehdsouflagemaron ?? '' }}
                            </td><td>
                                {{ $lavage->pehdsouflagenoire ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdsouflagemulti ?? '' }}
                            </td>
                            <td>
                                {{$lavage->pehdsouflageblanc+$lavage->pehdsouflagebleu+$lavage->pehdsouflagejaune+$lavage->pehdsouflagevert+$lavage->pehdsouflageneutre+$lavage->pehdsouflagerouge+$lavage->pehdsouflagejadida+$lavage->pehdsouflagemaron+$lavage->pehdsouflagenoire+$lavage->pehdsouflagemulti ?? '' }}
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