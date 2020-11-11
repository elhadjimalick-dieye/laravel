@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Stock produit fini </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-12 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('sacs.index') }}"> Retour</a>
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
    <div class="card-header" style="background-color:#2F4F4F;color:white">
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
                            {{ trans('Quantite') }}
                        </th>
                        <th>
                            {{ trans('Granule') }}
                        </th>
                        <th>
                        {{ trans(' À Extruder') }}

                        </th>
                        <th>
                        {{ trans('Nombre de sac (25 kg)') }}

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
                                {{ $sac->totale ?? '' }} 
                            </td>
                            <td>
                            {{ $sac->granule ?? '' }} 
                            </td>
                            <td>
                            {{ $sac->extrude ?? '' }} 
                            </td>
                            <td>
                            {{ $sac->nombre ?? '' }} 


                            </td>
                            <td>
                                {{ $sac->date ?? '' }}
                            </td>

                            <td>
                              
                            <a class="btn btn-xs btn" style="background-color:#2F4F4F;" href="{{ route('sacs.show', $sac->id) }}">
                                    <h6 style="color:white;">Extruder</h6>

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
                                {{ $sac->ppcoposacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcoposacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcoposacjaune ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcoposacvert ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->ppcoposacmauve ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoposacrouge ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoposacjadida ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoposacmaron ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoposacnoire ?? '' }} 
                            </td><td>
                                {{ $sac->ppcoposacmulti ?? '' }} 
                            </td>
                            <td>
                                {{ $ppcoposac=$sac->ppcoposacblanc+$sac->ppcoposacbleu+$sac->ppcoposacjaune+$sac->ppcoposacvert+$sac->ppcoposacmauve+$sac->ppcoposacrouge+$sac->ppcoposacjadida+$sac->ppcoposacmaron+$sac->ppcoposacnoire+$sac->ppcoposacmulti ?? '' }} 
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
                                {{ $sac->pphomosacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomosacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomosacjaune ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomosacvert ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pphomosacmauve ?? '' }} 
                            </td><td>
                                {{ $sac->pphomosacrouge ?? '' }} 
                            </td><td>
                                {{ $sac->pphomosacjadida ?? '' }} 
                            </td><td>
                                {{ $sac->pphomosacmaron ?? '' }} 
                            </td><td>
                                {{ $sac->pphomosacnoire ?? '' }} 
                            </td><td>
                                {{ $sac->pphomosacmulti ?? '' }} 
                            </td>
                            <td>
                                {{ $pphomosac=$sac->pphomosacblanc+$sac->pphomosacbleu+$sac->pphomosacjaune+$sac->pphomosacvert+$sac->pphomosacmauve+$sac->pphomosacrouge+$sac->pphomosacjadida+$sac->pphomosacmaron+$sac->pphomosacnoire+$sac->pphomosacmulti ?? '' }} 
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
                                {{ $sac->petpreformsacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->petpreformsacbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petpreformsactri=$sac->petpreformsacblanc+$sac->petpreformsacbleu ?? '' }} 
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
                                {{ $sac->petbouteillesacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->petbouteillesacbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petbouteillesactri=$sac->petbouteillesacblanc+$sac->petbouteillesacbleu ?? '' }} 
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
                                {{ $sac->pehdcasiersacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdcasiersacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdcasiersacjaune ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiersacvert ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiersacneutre ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiersacrouge ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiersacjadida ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiersacmaron ?? '' }} 
                            </td><td>
                                {{ $sac->pehdcasiersacnoire ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdcasiersacmulti ?? '' }} 
                            </td>
                            <td>
                                {{$sac->pehdcasiersacblanc+$sac->pehdcasiersacbleu+$sac->pehdcasiersacjaune+$sac->pehdcasiersacvert+$sac->pehdcasiersacneutre+$sac->pehdcasiersacrouge+$sac->pehdcasiersacjadida+$sac->pehdcasiersacmaron+$sac->pehdcasiersacnoire+$sac->pehdcasiersacmulti ?? '' }} 
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
                                {{ $sac->pehdsouflagesacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdsouflagesacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdsouflagesacjaune ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagesacvert ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagesacneutre ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagesacrouge ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagesacjadida ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagesacmaron ?? '' }} 
                            </td><td>
                                {{ $sac->pehdsouflagesacnoire ?? '' }} 
                            </td>
                            <td>
                                {{ $sac->pehdsouflagesacmulti ?? '' }} 
                            </td>
                            <td>
                                {{$sac->pehdsouflagesacblanc+$sac->pehdsouflagesacbleu+$sac->pehdsouflagesacjaune+$sac->pehdsouflagesacvert+$sac->pehdsouflagesacneutre+$sac->pehdsouflagesacrouge+$sac->pehdsouflagesacjadida+$sac->pehdsouflagesacmaron+$sac->pehdsouflagesacnoire+$sac->pehdsouflagesacmulti ?? '' }} 
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