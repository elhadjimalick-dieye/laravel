@extends('layouts.admin')
@section('content')
<div class="row " style="margin-left:8%">
  <div class="col-lg-12 ">
    <br>
  
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('achats.index') }}"> Retour</a>
    </div>
    <br>

  </div>
</div>


@if(Session::has('fail'))
<div class="alert alert-danger">
  {{Session::get('fail')}}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="card col-xs-12 col-sm-12 col-md-10 " style="margin-left:10%">
  <div class="card-header" style="background-color:greye;color:black">
      {{ trans('Formulaire de vente des matieres.') }}
  </div>
<br>
{!! Form::open(array('route' => 'achats.store','method'=>'POST')) !!}
<div class="row">
  <div class="col-lg-10 container-fluid ">

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Choisir un client</label>
          <select class="form-control" id="client" name="client">
            <option value=""></option>

            @foreach($client as $serve)
            <option value="{{ $serve->id}}">{{$serve->nomComplet}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Date</label>
          {!! Form::date('date', null, array('placeholder' => 'nombre de sac','class' => 'form-control')) !!}

        </div>
      </div>
    </div>


    <div class="accordion" style="background-color:#008B8B;color:white">PP COPO</div>
    <div class="panel">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur bleu</label>
            {!! Form::number('ppcoposacbleu', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur blanc</label>
            {!! Form::number('ppcoposacblanc', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jaune</label>
            {!! Form::number('ppcoposacjaune', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur vert</label>
            {!! Form::number('ppcoposacvert', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur mauve</label>
            {!! Form::number('ppcoposacmauve', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur rouge</label>
            {!! Form::number('ppcoposacrouge', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jadida</label>
            {!! Form::number('ppcoposacjadida', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur maron</label>
            {!! Form::number('ppcoposacmaron', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur noire</label>
            {!! Form::number('ppcoposacnoire', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur multi Couleur</label>
            {!! Form::number('ppcoposacmulti', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <center>
        <div class="row">
          <div class="col-md-5" style="margin-left: 30%;">

            <div class="form-group" style="color: #008B8B;">
              <label for="exampleFormControlSelect1">Prix Unitaire (sac 25kg) pp copo</label>
              {!! Form::number('ppcopoprix', null, array('placeholder' => 'prix Unitaire ','class' =>
              'form-control'))
              !!}

            </div>
          </div>

        </div>
      </center>

    </div>


    <p></p>
    <br>
    <p></p>
    <div class="accordion" style="background-color:#008B8B;color:white">PP HOMO</div>
    <div class="panel">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur bleu</label>
            {!! Form::number('pphomosacbleu', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur blanc</label>
            {!! Form::number('pphomosacblanc', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jaune</label>
            {!! Form::number('pphomosacjaune', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur vert</label>
            {!! Form::number('pphomosacvert', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur mauve</label>
            {!! Form::number('pphomosacmauve', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur rouge</label>
            {!! Form::number('pphomosacrouge', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jadida</label>
            {!! Form::number('pphomosacjadida', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur maron</label>
            {!! Form::number('pphomosacmaron', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur noire</label>
            {!! Form::number('pphomosacnoire', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur multi Couleur</label>
            {!! Form::number('pphomosacmulti', null, array('placeholder' => 'nombre de sac','class' => 'form-control'))
            !!}

          </div>
        </div>
      </div>

      <center>
        <div class="row">
          <div class="col-md-5" style="margin-left: 30%;">

            <div class="form-group" style="color: #008B8B;">
              <label for="exampleFormControlSelect1">Prix Unitaire (sac 25kg) pp homo</label>
              {!! Form::number('pphomoprix', null, array('placeholder' => 'prix Unitaire ','class' =>
              'form-control'))
              !!}

            </div>
          </div>

        </div>
      </center>
    </div>
    <p></p>
    <br>
    <p></p>
    <div class="accordion" style="background-color:green;color:white">PET PREFORME</div>
    <div class="panel">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur bleu</label>
            {!! Form::number('petpreformsacbleu', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur blanc</label>
            {!! Form::number('petpreformsacblanc', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>


      <center>
        <div class="row">
          <div class="col-md-5" style="margin-left: 30%;">

            <div class="form-group" style="color:green;">
              <label for="exampleFormControlSelect1">Prix Unitaire (sac 25kg) pet preforme</label>
              {!! Form::number('petpreformprix', null, array('placeholder' => 'prix Unitaire ','class' =>
              'form-control'))
              !!}

            </div>
          </div>

        </div>
      </center>
    </div>
    <p></p>
    <br>
    <p></p>

    <div class="accordion" style="background-color:green;color:white">PET BOUTEILLE</div>
    <div class="panel">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur bleu</label>
            {!! Form::number('petbouteillebleusac', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur blanc</label>
            {!! Form::number('petbouteilleblancsac', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>


      <center>
        <div class="row">
          <div class="col-md-5" style="margin-left: 30%;">

            <div class="form-group" style="color:green;">
              <label for="exampleFormControlSelect1">Prix Unitaire (sac 25kg) pet bouteille</label>
              {!! Form::number('petbouteilleprix', null, array('placeholder' => 'prix Unitaire ','class' =>
              'form-control'))
              !!}

            </div>
          </div>

        </div>
      </center>
    </div>
    <p></p>
    <br>
    <p></p>

    <div class="accordion" style="background-color:skyblue;color:white">PEHD CASIER</div>
    <div class="panel">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur bleu</label>
            {!! Form::number('pehdcasiersacbleu', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur blanc</label>
            {!! Form::number('pehdcasiersacblanc', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jaune</label>
            {!! Form::number('pehdcasiersacjaune', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur vert</label>
            {!! Form::number('pehdcasiersacvert', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur mauve</label>
            {!! Form::number('pehdcasiersacmauve', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur rouge</label>
            {!! Form::number('pehdcasiersacrouge', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jadida</label>
            {!! Form::number('pehdcasiersacjadida', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur maron</label>
            {!! Form::number('pehdcasiersacmaron', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur noire</label>
            {!! Form::number('pehdcasiersacnoire', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur multi Couleur</label>
            {!! Form::number('pehdcasiersacmulti', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <center>
        <div class="row">
          <div class="col-md-5" style="margin-left: 30%;">

            <div class="form-group" style="color: skyblue;">
              <label for="exampleFormControlSelect1">Prix Unitaire (sac 25kg) pehd casier</label>
              {!! Form::number('pehdcasierprix', null, array('placeholder' => 'prix Unitaire ','class' =>
              'form-control'))
              !!}

            </div>
          </div>

        </div>
      </center>
    </div>
    <p></p>
    <br>
    <p></p>

    <div class="accordion" style="background-color:skyblue;color:white">PEHD SOUFLAGE</div>
    <div class="panel">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur bleu</label>
            {!! Form::number('pehdsouflagesacbleu', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur blanc</label>
            {!! Form::number('pehdsouflagesacblanc', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jaune</label>
            {!! Form::number('pehdsouflagesacjaune', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur vert</label>
            {!! Form::number('pehdsouflagesacvert', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur mauve</label>
            {!! Form::number('pehdsouflagesacmauve', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur rouge</label>
            {!! Form::number('pehdsouflagesacrouge', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur jadida</label>
            {!! Form::number('pehdsouflagesacjadida', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur maron</label>
            {!! Form::number('pehdsouflagesacmaron', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur noire</label>
            {!! Form::number('pehdsouflagesacnoire', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Couleur multi Couleur</label>
            {!! Form::number('pehdsouflagesacmulti', null, array('placeholder' => 'nombre de sac','class' =>
            'form-control'))
            !!}

          </div>
        </div>
      </div>

      <center>
        <div class="row">
          <div class="col-md-5" style="margin-left: 30%;">

            <div class="form-group" style="color: skyblue;">
              <label for="exampleFormControlSelect1">Prix Unitaire (sac 25kg) pehd souflage</label>
              {!! Form::number('pehdsouflageprix', null, array('placeholder' => 'prix Unitaire ','class' =>
              'form-control'))
              !!}

            </div>
          </div>

        </div>
      </center>    </div>
  </div>
</div><br>



<div class="col-xs-12 col-sm-12 col-md-4 " style="margin-left:65%">
  <button type="submit" class="btn btn-success ">Soumettre</button>
</div>
<br>
</div>
{!! Form::close() !!}

<br>

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