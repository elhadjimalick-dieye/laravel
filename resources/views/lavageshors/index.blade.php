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
                                {{ $lavagehor->effectiflav ?? '' }} personne(s)
                            </td>
                            <td>
                                {{ $lavagehor->lavagehor ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->dechelavage ?? '' }} kg
                            </td>
                            <td>
                            {{ $lavagehor->totale ?? '' }} kg


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
                                {{ $lavagehor->ppcopoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->ppcopobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->ppcopojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->ppcopovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->ppcopomauve ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->ppcoporouge ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->ppcopojadida ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->ppcopomaron ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->ppcoponoire ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->ppcopomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $ppcopo=$lavagehor->ppcopoblanc+$lavagehor->ppcopobleu+$lavagehor->ppcopojaune+$lavagehor->ppcopovert+$lavagehor->ppcopomauve+$lavagehor->ppcoporouge+$lavagehor->ppcopojadida+$lavagehor->ppcopomaron+$lavagehor->ppcoponoire+$lavagehor->ppcopomulti ?? '' }} kg
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
                                {{ $lavagehor->id ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pphomoblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pphomobleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pphomojaune ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pphomovert ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pphomomauve ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pphomorouge ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pphomojadida ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pphomomaron ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pphomonoire ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pphomomulti ?? '' }} kg
                            </td>
                            <td>
                                {{ $pphomo=$lavagehor->pphomoblanc+$lavagehor->pphomobleu+$lavagehor->pphomojaune+$lavagehor->pphomovert+$lavagehor->pphomomauve+$lavagehor->pphomorouge+$lavagehor->pphomojadida+$lavagehor->pphomomaron+$lavagehor->pphomonoire+$lavagehor->pphomomulti ?? '' }} kg
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
        {{ trans('Table de lavagehor PET') }}

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
                                {{ $lavagehor->petblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->petbleu ?? '' }} kg
                            </td>
                            
                            <td>
                                {{ $pettri=$lavagehor->petblanc+$lavagehor->petbleu ?? '' }} kg
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
        {{ trans('Table de lavagehor PEHD') }}
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
                                {{ $lavagehor->pehdblanc ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pehdbleu ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pehdjaune ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pehdvert ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pehdneutre ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pehdrouge ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pehdjadida ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pehdmaron ?? '' }} kg
                            </td><td>
                                {{ $lavagehor->pehdnoire ?? '' }} kg
                            </td>
                            <td>
                                {{ $lavagehor->pehdmulti ?? '' }} kg
                            </td>
                            <td>
                                {{$lavagehor->pehdblanc+$lavagehor->pehdbleu+$lavagehor->pehdjaune+$lavagehor->pehdvert+$lavagehor->pehdneutre+$lavagehor->pehdrouge+$lavagehor->pehdjadida+$lavagehor->pehdmaron+$lavagehor->pehdnoire+$lavagehor->pehdmulti ?? '' }} kg
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