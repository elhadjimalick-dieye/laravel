@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
   
    <div class="col-lg-12 ">
        <div class="pull-left">
           <a href="{{ route('ventes.index') }}"> <h2 style="color: rgb(0, 0, 0);">Cliquer ici pour aller vers l'accueil commercial </h2></a>
        </div>
    </div>
  
</div>
<div class="row " style="margin-left:4%;margin-right:2%">
    <div class="col-lg-12 " style="padding-top:2%;margin-left:4%">

        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-xs btn" style="background-color:green;color:white"
                    href="{{ route('achats.create') }}">Vente de matiere</a>

            </div>

            <div class="col-md-4">

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
                               Cout total des ventes  : <p style="background-color: #F0F8FF;">{{ $somme }} fcfa</p>
                               Nombre des sacs vendus :<p style="background-color: #F0F8FF;">{{ $totale }} sac(s)</p>  
                               Nombre des ventes éffectués :<p style="background-color: #F0F8FF;">{{ $id }} fois</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a class="btn btn-xs btn" style="background-color:green;color:white"
                    href="{{ route('clients.index') }}">Liste des Clients</a>

            </div>
            <br>
           

        </div>
    </div>

    <div class="col-lg-12 " style="padding-top:2%">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <button class="accordion" style="background-color:#008B8B;color:white">Details des ventes (PP)</button>
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
                                            {{ trans('Prix_untitaire') }}
                                        </th>
                                        <th>
                                            {{ trans('Quantite_Totale') }}
                                        </th>
                                        <th>
                                            {{ trans('Somme') }}
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

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $achat)
                                    <tr>

                                        <td>
                                            {{ $achat->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomoprix ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->pphomosac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosac*$achat->pphomoprix ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacblanc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacbleu ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacjaune ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacvert ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacmauve ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacrouge ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacjadida ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacmaron ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacnoire ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->ppcoposacmulti ?? '' }}
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
                                            {{ trans('Prix_untitaire') }}
                                        </th>
                                        <th>
                                            {{ trans('Quantite_Totale') }}
                                        </th>
                                        <th>
                                            {{ trans('Somme') }}
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


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $achat)
                                    <tr>

                                        <td>
                                            {{ $achat->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomoprix ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->pphomosac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosac*$achat->pphomoprix ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacblanc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacbleu ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacjaune ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacvert ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacmauve ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacrouge ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacjadida ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacmaron ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacnoire ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pphomosacmulti ?? '' }}
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
            <button class="accordion" style="background-color:green;color:white">Details des ventes (PET)</button>
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
                                            {{ trans('Prix_untitaire') }}
                                        </th>
                                        <th>
                                            {{ trans('Quantite_Totale') }}
                                        </th>
                                        <th>
                                            {{ trans('Somme') }}
                                        </th>
                                        <th>
                                            {{ trans('Couleur_Blanc') }}
                                        </th>
                                        <th>
                                            {{ trans('Couleur_Bleu') }}
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $achat)
                                    <tr>

                                        <td>
                                            {{ $achat->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petbouteilleprix ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->petbouteillesac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petbouteillesac*$achat->petbouteilleprix ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petpreformsacblanc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petpreformsacbleu ?? '' }}
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
                                        <th>
                                            {{ trans('Prix_untitaire') }}
                                        </th>
                                        <th>
                                            {{ trans('Quantite_Totale') }}
                                        </th>
                                        <th>
                                            {{ trans('Somme') }}
                                        </th>
                                        <th style="width:1000px">
                                            {{ trans('Couleur__Blanc') }}
                                        </th>
                                        <th style="width:1000px">
                                            {{ trans('Couleur__Bleu') }}
                                        </th>





                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $achat)
                                    <tr>

                                        <td>
                                            {{ $achat->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petbouteilleprix ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->petbouteillesac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petbouteillesac*$achat->petbouteilleprix ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petbouteillebleusac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->petbouteilleblancsac ?? '' }}
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
            <button class="accordion" style="background-color:skyblue;color:white">Details des ventes (PEHD)</button>
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
                                            {{ trans('Prix_untitaire') }}
                                        </th>
                                        <th>
                                            {{ trans('Quantite_Totale') }}
                                        </th>
                                        <th>
                                            {{ trans('Somme') }}
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


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $achat)
                                    <tr>

                                        <td>
                                            {{ $achat->id ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->pehdcasierprix ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->pehdcasiersac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersac*$achat->pehdcasierprix ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacblanc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacbleu ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacjaune ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacvert ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacneutre ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacrouge ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacjadida ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacmaron ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacnoire ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdcasiersacmulti ?? '' }}
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
                                            {{ trans('Prix_untitaire') }}
                                        </th>
                                        <th>
                                            {{ trans('Quantite_Totale') }}
                                        </th>
                                        <th>
                                            {{ trans('Somme') }}
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



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $achat)
                                    <tr>

                                        <td>
                                            {{ $achat->id ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->pehdsouflageprix ?? '' }}
                                        </td>

                                        <td>
                                            {{ $achat->pehdsouflagesac ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesac*$achat->pehdsouflageprix ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacblanc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacbleu ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacjaune ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacvert ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacneutre ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacrouge ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacjadida ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacmaron ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacnoire ?? '' }}
                                        </td>
                                        <td>
                                            {{ $achat->pehdsouflagesacmulti ?? '' }}
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
@if(Session::has('fail'))
<div class="alert alert-success">
    {{Session::get('fail')}}
</div>
@endif


<div class="card col-lg-12">
    <div class="card-header" style="background-color:#008B8B; color:white">
        {{ trans('Etat des ventes de matiere') }}
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
                            {{ trans('MAT_CLIENTS ') }}
                        </th>
                        <th>
                            {{ trans('NOMS_CLIENTS ') }}
                        </th>

                        <th>
                            {{ trans(' SACS ') }}
                        </th>
                        <th>
                            {{ trans('PP  ') }}
                        </th>
                        <th>
                            {{ trans('PET  ') }}
                        </th>
                        <th>
                            {{ trans('PEHD  ') }}
                        </th>


                        <th>
                            {{ trans('MONTANT ') }}
                        </th>




                        <th>
                            {{ trans('Date') }}

                        </th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $achat)
                    <tr>

                        <td>
                            {{ $achat->id ?? '' }}
                        </td>
                        <td>
                            {{ $achat->clients->matricule ?? '' }}
                        </td>
                        <td>
                            {{ $achat->clients->nomComplet ?? '' }}
                        </td>

                        <td>
                            {{ $achat->totale ?? '' }}
                        </td>


                        <td>
                            {{ $achat->pphomosac+$achat->ppcoposac ?? '' }}
                        </td>
                        <td>
                            {{ $achat->petpreformsac+$achat->petbouteillesac ?? '' }}
                        </td>
                        <td>
                            {{ $achat->pehdcasiersac+$achat->pehdsouflagesac ?? '' }}
                        </td>


                        <td>
                            {{ $achat->somme ?? '' }}

                        </td>


                        <td>
                            {{ $achat->date ?? '' }}
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