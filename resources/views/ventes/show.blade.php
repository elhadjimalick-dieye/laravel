@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Stock produit fini (commercial) </h2>
        </div>
      

    </div>
</div>
<div class="row " style="margin-left:8%">
    <div class="col-lg-6 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('ventes.index') }}"> Retour</a>
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
                    @foreach($vente as $key => $com)
                        <tr >

                        <td>
                                {{ $com->id ?? '' }}
                            </td>
                            <td>
                                {{ $com->ppcoposacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $com->ppcoposacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $com->ppcoposacjaune ?? '' }} 
                            </td>
                            <td>
                                {{ $com->ppcoposacvert ?? '' }} 
                            </td>
                            <td>
                                {{ $com->ppcoposacmauve ?? '' }} 
                            </td><td>
                                {{ $com->ppcoposacrouge ?? '' }} 
                            </td><td>
                                {{ $com->ppcoposacjadida ?? '' }} 
                            </td><td>
                                {{ $com->ppcoposacmaron ?? '' }} 
                            </td><td>
                                {{ $com->ppcoposacnoire ?? '' }} 
                            </td><td>
                                {{ $com->ppcoposacmulti ?? '' }} 
                            </td>
                            <td>
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
                    @foreach($vente as $key => $com)
                        <tr >

                        <td>
                                {{ $com->id ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pphomosacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pphomosacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pphomosacjaune ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pphomosacvert ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pphomosacmauve ?? '' }} 
                            </td><td>
                                {{ $com->pphomosacrouge ?? '' }} 
                            </td><td>
                                {{ $com->pphomosacjadida ?? '' }} 
                            </td><td>
                                {{ $com->pphomosacmaron ?? '' }} 
                            </td><td>
                                {{ $com->pphomosacnoire ?? '' }} 
                            </td><td>
                                {{ $com->pphomosacmulti ?? '' }} 
                            </td>
                            <td>
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
                    @foreach($vente as $key => $com)
                        <tr >

                        <td>
                                {{ $com->id ?? '' }}
                            </td>
                            <td>
                                {{ $com->petpreformsacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $com->petpreformsacbleu ?? '' }} 
                            </td>
                            
                            <td>
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
                    @foreach($vente as $key => $com)
                        <tr >

                        <td>
                                {{ $com->id ?? '' }}
                            </td>
                            <td>
                                {{ $com->petbouteillesacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $com->petbouteillesacbleu ?? '' }} 
                            </td>
                            
                            <td>
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
                    @foreach($vente as $key => $com)
                        <tr >
                                   
                        <td>
                                {{ $com->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $com->pehdcasiersacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pehdcasiersacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pehdcasiersacjaune ?? '' }} 
                            </td><td>
                                {{ $com->pehdcasiersacvert ?? '' }} 
                            </td><td>
                                {{ $com->pehdcasiersacneutre ?? '' }} 
                            </td><td>
                                {{ $com->pehdcasiersacrouge ?? '' }} 
                            </td><td>
                                {{ $com->pehdcasiersacjadida ?? '' }} 
                            </td><td>
                                {{ $com->pehdcasiersacmaron ?? '' }} 
                            </td><td>
                                {{ $com->pehdcasiersacnoire ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pehdcasiersacmulti ?? '' }} 
                            </td>
                            <td>
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
                    @foreach($vente as $key => $com)
                        <tr >
                                   
                        <td>
                                {{ $com->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $com->pehdsouflagesacblanc ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pehdsouflagesacbleu ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pehdsouflagesacjaune ?? '' }} 
                            </td><td>
                                {{ $com->pehdsouflagesacvert ?? '' }} 
                            </td><td>
                                {{ $com->pehdsouflagesacneutre ?? '' }} 
                            </td><td>
                                {{ $com->pehdsouflagesacrouge ?? '' }} 
                            </td><td>
                                {{ $com->pehdsouflagesacjadida ?? '' }} 
                            </td><td>
                                {{ $com->pehdsouflagesacmaron ?? '' }} 
                            </td><td>
                                {{ $com->pehdsouflagesacnoire ?? '' }} 
                            </td>
                            <td>
                                {{ $com->pehdsouflagesacmulti ?? '' }} 
                            </td>
                            <td>
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