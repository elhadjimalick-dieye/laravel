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
                                {{ $broyage->effectifbro ?? '' }} personne(s)
                            </td>
                            <td>
                                {{ $broyage->heuremachine ?? '' }} heure(s)
                            </td>
                            <td>
                                {{ $broyage->broyage ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->dechebroyage ?? '' }} kg
                            </td>
                            <td>
                            {{ $broyage->totale ?? '' }} kg


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
                                {{ $broyage->ppcopoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->ppcopobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->ppcopojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->ppcopovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->ppcopomauve ?? '' }} kg
                            </td><td>
                                {{ $broyage->ppcoporouge ?? '' }} kg
                            </td><td>
                                {{ $broyage->ppcopojadida ?? '' }} kg
                            </td><td>
                                {{ $broyage->ppcopomaron ?? '' }} kg
                            </td><td>
                                {{ $broyage->ppcoponoire ?? '' }} kg
                            </td><td>
                                {{ $broyage->ppcopomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $ppcopo=$broyage->ppcopoblanc+$broyage->ppcopobleu+$broyage->ppcopojaune+$broyage->ppcopovert+$broyage->ppcopomauve+$broyage->ppcoporouge+$broyage->ppcopojadida+$broyage->ppcopomaron+$broyage->ppcoponoire+$broyage->ppcopomulti ?? '' }} kg
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
                                {{ $broyage->pphomoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pphomobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pphomojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pphomovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pphomomauve ?? '' }} kg
                            </td><td>
                                {{ $broyage->pphomorouge ?? '' }} kg
                            </td><td>
                                {{ $broyage->pphomojadida ?? '' }} kg
                            </td><td>
                                {{ $broyage->pphomomaron ?? '' }} kg
                            </td><td>
                                {{ $broyage->pphomonoire ?? '' }} kg
                            </td><td>
                                {{ $broyage->pphomomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $pphomo=$broyage->pphomoblanc+$broyage->pphomobleu+$broyage->pphomojaune+$broyage->pphomovert+$broyage->pphomomauve+$broyage->pphomorouge+$broyage->pphomojadida+$broyage->pphomomaron+$broyage->pphomonoire+$broyage->pphomomulti ?? '' }} kg
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
        {{ trans('Table de broyage PET') }}

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
                                {{ $broyage->petblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->petbleu ?? '' }} kg 
                            </td>
                            
                            <td>
                                {{ $pettri=$broyage->petblanc+$broyage->petbleu ?? '' }} kg
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
        {{ trans('Table de broyage PEHD') }}
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
                                {{ $broyage->pehdblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pehdbleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pehdjaune ?? '' }} kg
                            </td><td>
                                {{ $broyage->pehdvert ?? '' }} kg
                            </td><td>
                                {{ $broyage->pehdneutre ?? '' }} kg
                            </td><td>
                                {{ $broyage->pehdrouge ?? '' }} kg
                            </td><td>
                                {{ $broyage->pehdjadida ?? '' }} kg
                            </td><td>
                                {{ $broyage->pehdmaron ?? '' }} kg
                            </td><td>
                                {{ $broyage->pehdnoire ?? '' }} kg
                            </td>
                            <td>
                                {{ $broyage->pehdmulti ?? '' }} kg
                            </td>
                            <td>
                                {{$broyage->pehdblanc+$broyage->pehdbleu+$broyage->pehdjaune+$broyage->pehdvert+$broyage->pehdneutre+$broyage->pehdrouge+$broyage->pehdjadida+$broyage->pehdmaron+$broyage->pehdnoire+$broyage->pehdmulti ?? '' }} kg
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