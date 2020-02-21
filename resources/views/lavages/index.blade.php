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
                                {{ $lavage->effectiflav ?? '' }} personne(s)
                            </td>
                            <td>
                                {{ $lavage->lavage ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->dechelavage ?? '' }} kg
                            </td>
                            <td>
                            {{ $lavage->totale ?? '' }} kg


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
                                {{ $lavage->ppcopoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->ppcopobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->ppcopojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->ppcopovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->ppcopomauve ?? '' }} kg
                            </td><td>
                                {{ $lavage->ppcoporouge ?? '' }} kg
                            </td><td>
                                {{ $lavage->ppcopojadida ?? '' }} kg
                            </td><td>
                                {{ $lavage->ppcopomaron ?? '' }} kg
                            </td><td>
                                {{ $lavage->ppcoponoire ?? '' }} kg
                            </td><td>
                                {{ $lavage->ppcopomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $ppcopo=$lavage->ppcopoblanc+$lavage->ppcopobleu+$lavage->ppcopojaune+$lavage->ppcopovert+$lavage->ppcopomauve+$lavage->ppcoporouge+$lavage->ppcopojadida+$lavage->ppcopomaron+$lavage->ppcoponoire+$lavage->ppcopomulti ?? '' }} kg
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
                                {{ $lavage->id ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pphomoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pphomobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pphomojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pphomovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pphomomauve ?? '' }} kg
                            </td><td>
                                {{ $lavage->pphomorouge ?? '' }} kg
                            </td><td>
                                {{ $lavage->pphomojadida ?? '' }} kg
                            </td><td>
                                {{ $lavage->pphomomaron ?? '' }} kg
                            </td><td>
                                {{ $lavage->pphomonoire ?? '' }} kg
                            </td><td>
                                {{ $lavage->pphomomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $pphomo=$lavage->pphomoblanc+$lavage->pphomobleu+$lavage->pphomojaune+$lavage->pphomovert+$lavage->pphomomauve+$lavage->pphomorouge+$lavage->pphomojadida+$lavage->pphomomaron+$lavage->pphomonoire+$lavage->pphomomulti ?? '' }} kg
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
        {{ trans('Table de lavage PET') }}

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
                                {{ $lavage->petblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->petbleu ?? '' }} kg
                            </td>
                            
                            <td>
                                {{ $pettri=$lavage->petblanc+$lavage->petbleu ?? '' }} kg
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
        {{ trans('Table de lavage PEHD') }}
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
                                {{ $lavage->pehdblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pehdbleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pehdjaune ?? '' }} kg
                            </td><td>
                                {{ $lavage->pehdvert ?? '' }} kg
                            </td><td>
                                {{ $lavage->pehdneutre ?? '' }} kg
                            </td><td>
                                {{ $lavage->pehdrouge ?? '' }} kg
                            </td><td>
                                {{ $lavage->pehdjadida ?? '' }} kg
                            </td><td>
                                {{ $lavage->pehdmaron ?? '' }} kg
                            </td><td>
                                {{ $lavage->pehdnoire ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavage->pehdmulti ?? '' }} kg
                            </td>
                            <td>
                                {{$lavage->pehdblanc+$lavage->pehdbleu+$lavage->pehdjaune+$lavage->pehdvert+$lavage->pehdneutre+$lavage->pehdrouge+$lavage->pehdjadida+$lavage->pehdmaron+$lavage->pehdnoire+$lavage->pehdmulti ?? '' }} kg
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