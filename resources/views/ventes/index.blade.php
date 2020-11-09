@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
    <div class="col-lg-8 ">
        <div class="pull-left">
            <h2>Accueil Commercial </h2>
        </div>
    </div>
</div>
<div class="row " style="margin-left:2%;">
    <div class="col-lg-10 " style="padding-top:2%;margin-left:10%">

        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-xs btn" style="background-color:green;color:white"
                    href="{{ route('clients.index') }}">Liste des Clients</a>

            </div>
            <div class="col-md-6">
                <a class="btn btn-xs btn" style="background-color:green;color:white"
                    href="{{ route('achats.create') }}">Vente de matiere</a>

            </div>

         
            <p><br>
                <br></p>
            

                <div class="col-md-6">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                        Balance commerciale
                    </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Etat des ventes de matiére.</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Cout total des ventes : <p style="background-color: #F0F8FF;">{{ $somme }} fcfa</p>
                                    Nombre des sacs vendus :<p style="background-color: #F0F8FF;">{{ $totale }} sac(s)</p>
                                    Nombre des ventes éffectués :<p style="background-color: #F0F8FF;">{{ $id }} fois</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
    
                </div>
    
                <div class="col-md-6">
                    <button type="button" class="btn btn-info" data-toggle="modal">
                        <a href="{{ route('achats.index') }}" style="color: white;">Liste des Ventes effectuée</a>
    
                </div>
    
            <br>


        </div>
    </div>

</div>@if(Session::has('fail'))
<div class="alert alert-success">
    {{Session::get('fail')}}
</div>
@endif
<br>
<br>



<div class="card col-lg-12">
    <div class="card-header" style="background-color:green; color:white">
        {{ trans('Quantite totale de produit fini (toutes les types de matieres)') }}
    </div>

    <div class="card-body card col-lg-12">
        <div class=" margin-left: 50px col-lg-12">
            <table style="width:100%" class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead style='margin-left: 100px'>
                    <tr>

                        <th>
                            {{ trans('Id') }}
                        </th>
                        <th>
                            {{ trans('QUANTITÉ ') }}
                        </th>
                        <th>
                            {{ trans('PP (25kg) ') }}
                        </th>
                        <th>
                            {{ trans('PET (25kg) ') }}
                        </th>
                        <th>
                            {{ trans('PEHD (25kg) ') }}
                        </th>
                        <th>
                            {{ trans('T__SACS ') }}
                        </th>




                        <th>
                            {{ trans('Date') }}

                        </th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $stock)
                    <tr>

                        <td>
                            {{ $stock->id ?? '' }}
                        </td>
                        <td>
                            {{ $stock->totale ?? '' }}
                        </td>


                        <td>
                            {{ $stock->pphomosac+$stock->ppcoposac ?? '' }}
                        </td>
                        <td>
                            {{ $stock->petpreformsac+$stock->petbouteillesac ?? '' }}
                        </td>
                        <td>
                            {{ $stock->pehdcasiersac+$stock->pehdsouflagesac ?? '' }}
                        </td>
                        <td>
                            {{ $stock->nombredesac ?? '' }}

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

<div class="col-lg-12 " style="padding-top:2%">
    <div class="pull-left">
    </div>
    <div class="pull-right">
        <button class="accordion" style="background-color:#008B8B;color:white">Plus de details sur le PP</button>
        <div class="panel">
            <div class="card col-lg-12">
                <div class="card-header" style="background-color:#008B8B;color:white">
                    {{ trans('PPCOPO') }}

                </div>

                <div class="card-body card col-lg-12">
                    <div class=" margin-left: 50px col-lg-12">
                        <table style="width:100%"
                            class=" table table-bordered table-striped table-hover datatable datatable-User">
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
                                        {{ trans('jaune') }}
                                    </th>
                                    <th>
                                        {{ trans('Vert') }}
                                    </th>
                                    <th>
                                        {{ trans('Mauve') }}
                                    </th>
                                    <th>
                                        {{ trans('Rouge') }}
                                    </th>
                                    <th>
                                        {{ trans('Jadida') }}
                                    </th>
                                    <th>
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
                                <tr>

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
                                    </td>
                                    <td>
                                        {{ $stock->ppcoposacrouge ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->ppcoposacjadida ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->ppcoposacmaron ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->ppcoposacnoire ?? '' }}
                                    </td>
                                    <td>
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
                    <div class=" margin-left: 50px col-lg-12">
                        <table style="width:100%"
                            class=" table table-bordered table-striped table-hover datatable datatable-User">
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
                                        {{ trans('jaune') }}
                                    </th>
                                    <th>
                                        {{ trans('Vert') }}
                                    </th>
                                    <th>
                                        {{ trans('Mauve') }}
                                    </th>
                                    <th>
                                        {{ trans('Rouge') }}
                                    </th>
                                    <th>
                                        {{ trans('Jadida') }}
                                    </th>
                                    <th>
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
                                <tr>

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
                                    </td>
                                    <td>
                                        {{ $stock->pphomosacrouge ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pphomosacjadida ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pphomosacmaron ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pphomosacnoire ?? '' }}
                                    </td>
                                    <td>
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
        </div>
    </div>
    <br>

</div>
<div class="col-lg-12 " style="padding-top:2%">
    <div class="pull-left">
    </div>
    <div class="pull-right">
        <button class="accordion" style="background-color:green;color:white">Plus de details sur le PET</button>
        <div class="panel">
            <div class="card col-lg-12">
                <div class="card-header" style="background-color:green;color:white">
                    {{ trans('PET PREFORME') }}

                </div>

                <div class="card-body card col-lg-12">
                    <div class=" margin-left: 50px col-lg-12">
                        <table style="width:100%"
                            class=" table table-bordered table-striped table-hover datatable datatable-User">
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
                                <tr>

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
                <div class="card-header" style="background-color:green;color:white;width:100%">
                    {{ trans('PET BOUTEILLE') }}

                </div>

                <div class="card-body card col-lg-12">
                    <div class=" margin-left: 50px col-lg-12">
                        <table style="width:100%"
                            class=" table table-bordered table-striped table-hover datatable datatable-User">
                            <thead style='margin-left: 100px'>
                                <tr>
                                    <th style="width:1000px">
                                        {{ trans('Id') }}
                                    </th>

                                    <th style="width:1000px">
                                        {{ trans('Couleur__Blanc') }}
                                    </th>
                                    <th style="width:1000px">
                                        {{ trans('Couleur__Bleu') }}
                                    </th>
                                    <th style="width:1000px">
                                        {{ trans('Total') }}
                                    </th>




                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $stock)
                                <tr>

                                    <td>
                                        {{ $stock->id ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->petbouteillebleusac ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->petbouteilleblancsac ?? '' }}
                                    </td>

                                    <td>
                                        {{ $petbouteillesactri=$stock->petbouteillebleusac+$stock->petbouteilleblancsac ?? '' }}
                                    </td>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br>

</div>
<div class="col-lg-12 " style="padding-top:2%">
    <div class="pull-left">
    </div>
    <div class="pull-right">
        <button class="accordion" style="background-color:skyblue;color:white">Plus de details sur le PEHD</button>
        <div class="panel">
            <div class="card col-lg-12">
                <div class="card-header " style="background-color:skyblue;color:white">
                    {{ trans('PEHD CASIER') }}
                </div>

                <div class="card-body card col-lg-12 ">
                    <div class=" margin-left: 50px col-lg-12 ">
                        <table style="width:100%"
                            class=" table table-bordered table-striped table-hover datatable datatable-User">
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

                                    </th>
                                    <th>
                                        {{ trans('Neutre') }}

                                    </th>
                                    <th>
                                        {{ trans('Rouge') }}

                                    </th>
                                    <th>
                                        {{ trans('Jadida') }}

                                    </th>
                                    <th>
                                        {{ trans('Maron') }}

                                    </th>
                                    <th>
                                        {{ trans('Noire') }}

                                    </th>
                                    <th>
                                        {{ trans('Multicolor') }}

                                    </th>
                                    <th>
                                        {{ trans('Total____') }}

                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $stock)
                                <tr>

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
                                    </td>
                                    <td>
                                        {{ $stock->pehdcasiersacvert ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdcasiersacneutre ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdcasiersacrouge ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdcasiersacjadida ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdcasiersacmaron ?? '' }}
                                    </td>
                                    <td>
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
                    <div class=" margin-left: 50px col-lg-12 ">
                        <table style="width:100%"
                            class=" table table-bordered table-striped table-hover datatable datatable-User">
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

                                    </th>
                                    <th>
                                        {{ trans('Neutre') }}

                                    </th>
                                    <th>
                                        {{ trans('Rouge') }}

                                    </th>
                                    <th>
                                        {{ trans('Jadida') }}

                                    </th>
                                    <th>
                                        {{ trans('Maron') }}

                                    </th>
                                    <th>
                                        {{ trans('Noire') }}

                                    </th>
                                    <th>
                                        {{ trans('Multicolor') }}

                                    </th>
                                    <th>
                                        {{ trans('Total____') }}

                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $stock)
                                <tr>

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
                                    </td>
                                    <td>
                                        {{ $stock->pehdsouflagesacvert ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdsouflagesacneutre ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdsouflagesacrouge ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdsouflagesacjadida ?? '' }}
                                    </td>
                                    <td>
                                        {{ $stock->pehdsouflagesacmaron ?? '' }}
                                    </td>
                                    <td>
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
        </div>
    </div>
    <br>

</div>


</div>

@endsection
@section('scripts')
@parent
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)


        $.extend(true, $.fn.dataTable.defaults, {
            order: [[1, 'desc']],
            pageLength: 10,
        });
        $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })

</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }</script>

<style>
    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<style>
    /* Style the buttons that are used to open and close the accordion panel */
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active,
    .accordion:hover {
        background-color: #ccc;
    }

    /* Style the accordion panel. Note: hidden by default */
    .panel {
        padding: 0 18px;
        background-color: white;
        display: none;
        overflow: hidden;
    }

    .accordion:after {
        content: '\02795';
        /* Unicode character for "plus" sign (+) */
        font-size: 13px;
        color: #777;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\2796";
        /* Unicode character for "minus" sign (-) */
    }
</style>
@endsection