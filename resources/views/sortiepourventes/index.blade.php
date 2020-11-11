@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Stock produit fini (production) </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
 
    <div class="col-lg-4 " style="padding-top:2%">
        <div class="pull-left " >
        </div>
        <div class="pull-right" style="margin-left:35%">
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
                        {{ trans('Sac de (25 kg)') }}

                        </th>
                        <th>
                        {{ trans('Date') }}

                        </th>
                     
                      
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $stock)
                        <tr >
                            
                            <td>
                                {{ $stock->id ?? '' }}
                            </td>
                            <td>
                                {{ $stock->totale ?? '' }} 
                            </td>
                          
                         
                            <td>
                            {{ $stock->stockproduitfini ?? '' }} 

                            </td>
                            <td>
                                {{ $stock->date ?? '' }}
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
                    @foreach($data as $key => $stock)
                        <tr >

                        <td>
                                {{ $stock->id ?? '' }}
                            </td>
                            <td>
                                {{ $stock->ppcoposacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->ppcoposacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->ppcoposacjaune ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->ppcoposacvert ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->ppcoposacmauve ?? '' }} 
                            </td><td>
                                {{ $stock->ppcoposacrouge ?? '' }} 
                            </td><td>
                                {{ $stock->ppcoposacjadida ?? '' }} 
                            </td><td>
                                {{ $stock->ppcoposacmaron ?? '' }} 
                            </td><td>
                                {{ $stock->ppcoposacnoire ?? '' }} 
                            </td><td>
                                {{ $stock->ppcoposacmulti ?? '' }} 
                            </td>
                            <td>
                                {{ $ppcoposac=$stock->ppcoposacblanc+$stock->ppcoposacbleu+$stock->ppcoposacjaune+$stock->ppcoposacvert+$stock->ppcoposacmauve+$stock->ppcoposacrouge+$stock->ppcoposacjadida+$stock->ppcoposacmaron+$stock->ppcoposacnoire+$stock->ppcoposacmulti ?? '' }} 
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
                    @foreach($data as $key => $stock)
                        <tr >

                        <td>
                                {{ $stock->id ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pphomosacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pphomosacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pphomosacjaune ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pphomosacvert ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pphomosacmauve ?? '' }} 
                            </td><td>
                                {{ $stock->pphomosacrouge ?? '' }} 
                            </td><td>
                                {{ $stock->pphomosacjadida ?? '' }} 
                            </td><td>
                                {{ $stock->pphomosacmaron ?? '' }} 
                            </td><td>
                                {{ $stock->pphomosacnoire ?? '' }} 
                            </td><td>
                                {{ $stock->pphomosacmulti ?? '' }} 
                            </td>
                            <td>
                                {{ $pphomosac=$stock->pphomosacblanc+$stock->pphomosacbleu+$stock->pphomosacjaune+$stock->pphomosacvert+$stock->pphomosacmauve+$stock->pphomosacrouge+$stock->pphomosacjadida+$stock->pphomosacmaron+$stock->pphomosacnoire+$stock->pphomosacmulti ?? '' }} 
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
                    @foreach($data as $key => $stock)
                        <tr >

                        <td>
                                {{ $stock->id ?? '' }}
                            </td>
                            <td>
                                {{ $stock->petpreformsacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->petpreformsacbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petpreformsactri=$stock->petpreformsacblanc+$stock->petpreformsacbleu ?? '' }} 
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
                    @foreach($data as $key => $stock)
                        <tr >

                        <td>
                                {{ $stock->id ?? '' }}
                            </td>
                            <td>
                                {{ $stock->petbouteillesacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->petbouteillesacbleu ?? '' }} 
                            </td>
                            
                            <td>
                                {{ $petbouteillesactri=$stock->petbouteillesacblanc+$stock->petbouteillesacbleu ?? '' }} 
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
                    @foreach($data as $key => $stock)
                        <tr >
                                   
                        <td>
                                {{ $stock->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $stock->pehdcasiersacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pehdcasiersacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pehdcasiersacjaune ?? '' }} 
                            </td><td>
                                {{ $stock->pehdcasiersacvert ?? '' }} 
                            </td><td>
                                {{ $stock->pehdcasiersacneutre ?? '' }} 
                            </td><td>
                                {{ $stock->pehdcasiersacrouge ?? '' }} 
                            </td><td>
                                {{ $stock->pehdcasiersacjadida ?? '' }} 
                            </td><td>
                                {{ $stock->pehdcasiersacmaron ?? '' }} 
                            </td><td>
                                {{ $stock->pehdcasiersacnoire ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pehdcasiersacmulti ?? '' }} 
                            </td>
                            <td>
                                {{$stock->pehdcasiersacblanc+$stock->pehdcasiersacbleu+$stock->pehdcasiersacjaune+$stock->pehdcasiersacvert+$stock->pehdcasiersacneutre+$stock->pehdcasiersacrouge+$stock->pehdcasiersacjadida+$stock->pehdcasiersacmaron+$stock->pehdcasiersacnoire+$stock->pehdcasiersacmulti ?? '' }} 
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
                    @foreach($data as $key => $stock)
                        <tr >
                                   
                        <td>
                                {{ $stock->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $stock->pehdsouflagesacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pehdsouflagesacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pehdsouflagesacjaune ?? '' }} 
                            </td><td>
                                {{ $stock->pehdsouflagesacvert ?? '' }} 
                            </td><td>
                                {{ $stock->pehdsouflagesacneutre ?? '' }} 
                            </td><td>
                                {{ $stock->pehdsouflagesacrouge ?? '' }} 
                            </td><td>
                                {{ $stock->pehdsouflagesacjadida ?? '' }} 
                            </td><td>
                                {{ $stock->pehdsouflagesacmaron ?? '' }} 
                            </td><td>
                                {{ $stock->pehdsouflagesacnoire ?? '' }} 
                            </td>
                            <td>
                                {{ $stock->pehdsouflagesacmulti ?? '' }} 
                            </td>
                            <td>
                                {{$stock->pehdsouflagesacblanc+$stock->pehdsouflagesacbleu+$stock->pehdsouflagesacjaune+$stock->pehdsouflagesacvert+$stock->pehdsouflagesacneutre+$stock->pehdsouflagesacrouge+$stock->pehdsouflagesacjadida+$stock->pehdsouflagesacmaron+$stock->pehdsouflagesacnoire+$stock->pehdsouflagesacmulti ?? '' }} 
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