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
                              
                                    <a class="btn btn-xs btn-success" href="{{ route('lavages.edit', $lavage->id) }}">
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
                                {{ $lavage->petblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->petbleu ?? '' }}
                            </td>
                            
                            <td>
                                {{ $pettri=$lavage->petblanc+$lavage->petbleu ?? '' }}
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
                                {{ $lavage->pehdblanc ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdbleu ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdjaune ?? '' }}
                            </td><td>
                                {{ $lavage->pehdvert ?? '' }}
                            </td><td>
                                {{ $lavage->pehdneutre ?? '' }}
                            </td><td>
                                {{ $lavage->pehdrouge ?? '' }}
                            </td><td>
                                {{ $lavage->pehdjadida ?? '' }}
                            </td><td>
                                {{ $lavage->pehdmaron ?? '' }}
                            </td><td>
                                {{ $lavage->pehdnoire ?? '' }}
                            </td>
                            <td>
                                {{ $lavage->pehdmulti ?? '' }}
                            </td>
                            <td>
                                {{$lavage->pehdblanc+$lavage->pehdbleu+$lavage->pehdjaune+$lavage->pehdvert+$lavage->pehdneutre+$lavage->pehdrouge+$lavage->pehdjadida+$lavage->pehdmaron+$lavage->pehdnoire+$lavage->pehdmulti ?? '' }}
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