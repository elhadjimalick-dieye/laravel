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
                                {{ $sechage->effectiflav ?? '' }} personne(s)
                            </td>
                            <td>
                                {{ $sechage->sechage ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->dechesechage ?? '' }} kg
                            </td>
                            <td>
                            {{ $sechage->totale ?? '' }} kg


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
        {{ trans('Table de sechage PPCOPO') }}

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
                                {{ $sechage->ppcopoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->ppcopobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->ppcopojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->ppcopovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->ppcopomauve ?? '' }} kg
                            </td><td>
                                {{ $sechage->ppcoporouge ?? '' }} kg
                            </td><td>
                                {{ $sechage->ppcopojadida ?? '' }} kg
                            </td><td>
                                {{ $sechage->ppcopomaron ?? '' }} kg
                            </td><td>
                                {{ $sechage->ppcoponoire ?? '' }} kg
                            </td><td>
                                {{ $sechage->ppcopomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $ppcopo=$sechage->ppcopoblanc+$sechage->ppcopobleu+$sechage->ppcopojaune+$sechage->ppcopovert+$sechage->ppcopomauve+$sechage->ppcoporouge+$sechage->ppcopojadida+$sechage->ppcopomaron+$sechage->ppcoponoire+$sechage->ppcopomulti ?? '' }} kg
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
        {{ trans('Table de sechage PPHOMO') }}

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
                                {{ $sechage->id ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pphomoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pphomobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pphomojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pphomovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pphomomauve ?? '' }} kg
                            </td><td>
                                {{ $sechage->pphomorouge ?? '' }} kg
                            </td><td>
                                {{ $sechage->pphomojadida ?? '' }} kg
                            </td><td>
                                {{ $sechage->pphomomaron ?? '' }} kg
                            </td><td>
                                {{ $sechage->pphomonoire ?? '' }} kg
                            </td><td>
                                {{ $sechage->pphomomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $pphomo=$sechage->pphomoblanc+$sechage->pphomobleu+$sechage->pphomojaune+$sechage->pphomovert+$sechage->pphomomauve+$sechage->pphomorouge+$sechage->pphomojadida+$sechage->pphomomaron+$sechage->pphomonoire+$sechage->pphomomulti ?? '' }} kg
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
        {{ trans('Table de sechage PET') }}

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
                                {{ $sechage->petblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->petbleu ?? '' }} kg
                            </td>
                            
                            <td>
                                {{ $pettri=$sechage->petblanc+$sechage->petbleu ?? '' }} kg
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
        {{ trans('Table de sechage PEHD') }}
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
                                {{ $sechage->pehdblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pehdbleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pehdjaune ?? '' }} kg
                            </td><td>
                                {{ $sechage->pehdvert ?? '' }} kg
                            </td><td>
                                {{ $sechage->pehdneutre ?? '' }} kg
                            </td><td>
                                {{ $sechage->pehdrouge ?? '' }} kg
                            </td><td>
                                {{ $sechage->pehdjadida ?? '' }} kg
                            </td><td>
                                {{ $sechage->pehdmaron ?? '' }} kg
                            </td><td>
                                {{ $sechage->pehdnoire ?? '' }} kg
                            </td>
                            <td>
                                {{ $sechage->pehdmulti ?? '' }} kg
                            </td>
                            <td>
                                {{$sechage->pehdblanc+$sechage->pehdbleu+$sechage->pehdjaune+$sechage->pehdvert+$sechage->pehdneutre+$sechage->pehdrouge+$sechage->pehdjadida+$sechage->pehdmaron+$sechage->pehdnoire+$sechage->pehdmulti ?? '' }} kg
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