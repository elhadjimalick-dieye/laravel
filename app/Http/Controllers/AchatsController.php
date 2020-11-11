<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use DB;
use App\Achats;
use App\Clients;
use App\Ventes;

class AchatsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Achats::orderBy('id', 'DESC')->paginate(10);
        $achat = Achats::all();
        $somme=$achat->sum('somme');
        $totale=$achat->sum('totale');
        $id=$achat->sum('id');


        return view('achats.index', ['somme' => $somme,'totale' => $totale,'id' => $id], compact('data', 'achat'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $achat = Achats::all();
        $client =Clients::all();

        return view('achats.create', compact('achat', 'client'));
    }
   
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Id  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'date' => 'required',
             'client'=> 'required',
            

        ]);


        $input = $request->all();
        $achat = Achats::all();

        $client=$request->input('client');
        $ppcoposacbleu=$request->input('ppcoposacbleu');
        $ppcoposacblanc=$request->input('ppcoposacblanc');
        $ppcoposacjaune=$request->input('ppcoposacjaune');
        $ppcoposacvert=$request->input('ppcoposacvert');
        $ppcoposacmauve=$request->input('ppcoposacmauve');
        $ppcoposacrouge=$request->input('ppcoposacrouge');
        $ppcoposacjadida=$request->input('ppcoposacjadida');
        $ppcoposacmaron=$request->input('ppcoposacmaron');
        $ppcoposacnoire=$request->input('ppcoposacnoire');
        $ppcoposacmulti=$request->input('ppcoposacmulti');

        $ppcopoprix=$request->input('ppcopoprix');
      
        $pphomosacbleu=$request->input('pphomosacbleu');
        $pphomosacblanc=$request->input('pphomosacblanc');
        $pphomosacjaune=$request->input('pphomosacjaune');
        $pphomosacvert=$request->input('pphomosacvert');
        $pphomosacmauve=$request->input('pphomosacmauve');
        $pphomosacrouge=$request->input('pphomosacrouge');
        $pphomosacjadida=$request->input('pphomosacjadida');
        $pphomosacmaron=$request->input('pphomosacmaron');
        $pphomosacnoire=$request->input('pphomosacnoire');
        $pphomosacmulti=$request->input('pphomosacmulti');

        $pphomoprix=$request->input('pphomoprix');
      

        $petpreformsacbleu=$request->input('petpreformsacbleu');
        $petpreformsacblanc=$request->input('petpreformsacblanc');

        $petpreformprix=$request->input('petpreformprix');

        $petbouteillebleusac=$request->input('petbouteillebleusac');
        $petbouteilleblancsac=$request->input('petbouteilleblancsac');

        $petbouteilleprix=$request->input('petbouteilleprix');


        $pehdcasiersacbleu=$request->input('pehdcasiersacbleu');
        $pehdcasiersacblanc=$request->input('pehdcasiersacblanc');
        $pehdcasiersacjaune=$request->input('pehdcasiersacjaune');
        $pehdcasiersacvert=$request->input('pehdcasiersacvert');
        $pehdcasiersacneutre=$request->input('pehdcasiersacneutre');
        $pehdcasiersacrouge=$request->input('pehdcasiersacrouge');
        $pehdcasiersacjadida=$request->input('pehdcasiersacjadida');
        $pehdcasiersacmaron=$request->input('pehdcasiersacmaron');
        $pehdcasiersacnoire=$request->input('pehdcasiersacnoire');
        $pehdcasiersacmulti=$request->input('pehdcasiersacmulti');


        $pehdcasierprix=$request->input('pehdcasierprix');
        

        $pehdsouflagesacbleu=$request->input('pehdsouflagesacbleu');
        $pehdsouflagesacblanc=$request->input('pehdsouflagesacblanc');
        $pehdsouflagesacjaune=$request->input('pehdsouflagesacjaune');
        $pehdsouflagesacvert=$request->input('pehdsouflagesacvert');
        $pehdsouflagesacneutre=$request->input('pehdsouflagesacneutre');
        $pehdsouflagesacrouge=$request->input('pehdsouflagesacrouge');
        $pehdsouflagesacjadida=$request->input('pehdsouflagesacjadida');
        $pehdsouflagesacmaron=$request->input('pehdsouflagesacmaron');
        $pehdsouflagesacnoire=$request->input('pehdsouflagesacnoire');
        $pehdsouflagesacmulti=$request->input('pehdsouflagesacmulti');

        $pehdsouflageprix=$request->input('pehdsouflageprix');
       
        $date=$request->input('date');

        //totale sac de ppcopo
        $ppcoposac=$ppcoposacbleu+$ppcoposacblanc+$ppcoposacjaune+$ppcoposacvert+$ppcoposacmauve+$ppcoposacrouge+$ppcoposacjadida+$ppcoposacmaron+$ppcoposacnoire+$ppcoposacmulti;
        //totale sac de pphomo
        $pphomosac=$pphomosacbleu+$pphomosacblanc+$pphomosacjaune+$pphomosacvert+$pphomosacmauve+$pphomosacrouge+$pphomosacjadida+$pphomosacmaron+$pphomosacnoire+$pphomosacmulti;
        //totale sac de petpreform
        $petpreformsac=$petpreformsacbleu+$petpreformsacblanc;
        //totale sac de petbouteille
        $petbouteillesac=$petbouteillebleusac+$petbouteilleblancsac;
        //totale sac de pehd casier
        $pehdcasiersac=$pehdcasiersacbleu+$pehdcasiersacblanc+$pehdcasiersacjaune+$pehdcasiersacvert+$pehdcasiersacrouge+$pehdcasiersacjadida+$pehdcasiersacmaron+$pehdcasiersacnoire+$pehdcasiersacmulti;
        //totale sac de pehd souflage
        $pehdsouflagesac=$pehdsouflagesacbleu+$pehdsouflagesacblanc+$pehdsouflagesacjaune+$pehdsouflagesacvert+$pehdsouflagesacrouge+$pehdsouflagesacjadida+$pehdsouflagesacmaron+$pehdsouflagesacnoire+$pehdsouflagesacmulti;
       
       
        //Montant total de l'achat
        
        //la quantite totale de l'achat
        $totale=$ppcoposac+$pphomosac+$petpreformsac+$petbouteillesac+$pehdcasiersac+$pehdsouflagesac;
        
        //la somme totale de l'achat
        $ppcopo=$ppcopoprix*$ppcoposac;
        $pphomo=$pphomoprix*$pphomosac;
        $petpreform=$petpreformprix*$petpreformsac;
        $petbouteille=$petbouteilleprix*$petbouteillesac;
        $pehdcasier=$pehdcasierprix*$pehdcasiersac;
        $pehdsouflage=$pehdsouflageprix*$pehdsouflagesac;

        // $somme=$ppcopoprix+$pphomoprix+$petpreformprix+$petbouteilleprix+$pehdcasierprix+$pehdsouflageprix;
        $somme=$ppcopo+$pphomo+$petpreform+$petbouteille+$pehdcasier+$pehdsouflage;
        //prix unitaire de toutes les matiere
        $prixunitaire=$ppcopoprix+$pphomoprix+$petpreformprix+$petbouteilleprix+$pehdcasierprix+$pehdsouflageprix;
        //Utilisation de la matiere qui se trouve sur l stock commercial

        $vente=$this->ventes = Ventes::all();
       
        $id=$vente->last()->id;
   
        $nombredesac=$vente->last()->nombredesac;
      
        $lastppcopo=$vente->last()->ppcopo;
        $lastppcopobleu=$vente->last()->ppcopobleu;
        $lastppcopoblanc=$vente->last()->ppcopoblanc;
        $lastppcopojaune=$vente->last()->ppcopojaune;
        $lastppcopovert=$vente->last()->ppcopovert;
        $lastppcopomauve=$vente->last()->ppcopomauve;
        $lastppcoporouge=$vente->last()->ppcoporouge;
        $lastppcopojadida=$vente->last()->ppcopojadida;
        $lastppcopomaron=$vente->last()->ppcopomaron;
        $lastppcoponoire=$vente->last()->ppcoponoire;
        $lastppcopomulti=$vente->last()->ppcopomulti;

        $lastppcoposac=$vente->last()->ppcoposac;
        $lastppcoposacbleu=$vente->last()->ppcoposacbleu;
        $lastppcoposacblanc=$vente->last()->ppcoposacblanc;
        $lastppcoposacjaune=$vente->last()->ppcoposacjaune;
        $lastppcoposacvert=$vente->last()->ppcoposacvert;
        $lastppcoposacmauve=$vente->last()->ppcoposacmauve;
        $lastppcoposacrouge=$vente->last()->ppcoposacrouge;
        $lastppcoposacjadida=$vente->last()->ppcoposacjadida;
        $lastppcoposacmaron=$vente->last()->ppcoposacmaron;
        $lastppcoposacnoire=$vente->last()->ppcoposacnoire;
        $lastppcoposacmulti=$vente->last()->ppcoposacmulti;

        $lastpphomo=$vente->last()->pphomo;
        $lastpphomobleu=$vente->last()->pphomobleu;
        $lastpphomoblanc=$vente->last()->pphomoblanc;
        $lastpphomojaune=$vente->last()->pphomojaune;
        $lastpphomovert=$vente->last()->pphomovert;
        $lastpphomomauve=$vente->last()->pphomomauve;
        $lastpphomorouge=$vente->last()->pphomorouge;
        $lastpphomojadida=$vente->last()->pphomojadida;
        $lastpphomomaron=$vente->last()->pphomomaron;
        $lastpphomonoire=$vente->last()->pphomonoire;
        $lastpphomomulti=$vente->last()->pphomomulti;

        $lastpphomosac=$vente->last()->pphomosac;
        $lastpphomosacbleu=$vente->last()->pphomosacbleu;
        $lastpphomosacblanc=$vente->last()->pphomosacblanc;
        $lastpphomosacjaune=$vente->last()->pphomosacjaune;
        $lastpphomosacvert=$vente->last()->pphomosacvert;
        $lastpphomosacmauve=$vente->last()->pphomosacmauve;
        $lastpphomosacrouge=$vente->last()->pphomosacrouge;
        $lastpphomosacjadida=$vente->last()->pphomosacjadida;
        $lastpphomosacmaron=$vente->last()->pphomosacmaron;
        $lastpphomosacnoire=$vente->last()->pphomosacnoire;
        $lastpphomosacmulti=$vente->last()->pphomosacmulti;

        $lastpet=$vente->last()->pet;
        $lastpetpreform=$vente->last()->petpreform;
        $lastpetpreformbleu=$vente->last()->petpreformbleu;
        $lastpetpreformblanc=$vente->last()->petpreformblanc;

        $lastpetsac=$vente->last()->petsac;
        $lastpetpreformsac=$vente->last()->petpreformsac;
        $lastpetpreformsacbleu=$vente->last()->petpreformsacbleu;
        $lastpetpreformsacblanc=$vente->last()->petpreformsacblanc;


        $lastpetbouteille=$vente->last()->petbouteille;
        $lastpetbouteillebleu=$vente->last()->petbouteillebleu;
        $lastpetbouteilleblanc=$vente->last()->petbouteilleblanc;

        $lastpetbouteillesac=$vente->last()->petbouteillesac;
        $lastpetbouteillebleusac=$vente->last()->petbouteillebleusac;
        $lastpetbouteilleblancsac=$vente->last()->petbouteilleblancsac;

        $lastpehdcasier=$vente->last()->pehdcasier;
        $lastpehdcasierbleu=$vente->last()->pehdcasierbleu;
        $lastpehdcasierblanc=$vente->last()->pehdcasierblanc;
        $lastpehdcasierjaune=$vente->last()->pehdcasierjaune;
        $lastpehdcasiervert=$vente->last()->pehdcasiervert;
        $lastpehdcasierneutre=$vente->last()->pehdcasierneutre;
        $lastpehdcasierrouge=$vente->last()->pehdcasierrouge;
        $lastpehdcasierjadida=$vente->last()->pehdcasierjadida;
        $lastpehdcasiermaron=$vente->last()->pehdcasiermaron;
        $lastpehdcasiernoire=$vente->last()->pehdcasiernoire;
        $lastpehdcasiermulti=$vente->last()->pehdcasiermulti;


        $lastpehdcasiersac=$vente->last()->pehdcasiersac;
        $lastpehdcasiersacbleu=$vente->last()->pehdcasiersacbleu;
        $lastpehdcasiersacblanc=$vente->last()->pehdcasiersacblanc;
        $lastpehdcasiersacjaune=$vente->last()->pehdcasiersacjaune;
        $lastpehdcasiersacvert=$vente->last()->pehdcasiersacvert;
        $lastpehdcasiersacneutre=$vente->last()->pehdcasiersacneutre;
        $lastpehdcasiersacrouge=$vente->last()->pehdcasiersacrouge;
        $lastpehdcasiersacjadida=$vente->last()->pehdcasiersacjadida;
        $lastpehdcasiersacmaron=$vente->last()->pehdcasiersacmaron;
        $lastpehdcasiersacnoire=$vente->last()->pehdcasiersacnoire;
        $lastpehdcasiersacmulti=$vente->last()->pehdcasiersacmulti;

        $lastpehdsouflage=$vente->last()->pehdsouflage;
        $lastpehdsouflagebleu=$vente->last()->pehdsouflagebleu;
        $lastpehdsouflageblanc=$vente->last()->pehdsouflageblanc;
        $lastpehdsouflagejaune=$vente->last()->pehdsouflagejaune;
        $lastpehdsouflagevert=$vente->last()->pehdsouflagevert;
        $lastpehdsouflageneutre=$vente->last()->pehdsouflageneutre;
        $lastpehdsouflagerouge=$vente->last()->pehdsouflagerouge;
        $lastpehdsouflagejadida=$vente->last()->pehdsouflagejadida;
        $lastpehdsouflagemaron=$vente->last()->pehdsouflagemaron;
        $lastpehdsouflagenoire=$vente->last()->pehdsouflagenoire;
        $lastpehdsouflagemulti=$vente->last()->pehdsouflagemulti;

        $lastpehdsouflagesac=$vente->last()->pehdsouflagesac;
        $lastpehdsouflagesacbleu=$vente->last()->pehdsouflagesacbleu;
        $lastpehdsouflagesacblanc=$vente->last()->pehdsouflagesacblanc;
        $lastpehdsouflagesacjaune=$vente->last()->pehdsouflagesacjaune;
        $lastpehdsouflagesacvert=$vente->last()->pehdsouflagesacvert;
        $lastpehdsouflagesacneutre=$vente->last()->pehdsouflagesacneutre;
        $lastpehdsouflagesacrouge=$vente->last()->pehdsouflagesacrouge;
        $lastpehdsouflagesacjadida=$vente->last()->pehdsouflagesacjadida;
        $lastpehdsouflagesacmaron=$vente->last()->pehdsouflagesacmaron;
        $lastpehdsouflagesacnoire=$vente->last()->pehdsouflagesacnoire;
        $lastpehdsouflagesacmulti=$vente->last()->pehdsouflagesacmulti;

        $lasttotale=$vente->last()->totale;


        //condition de verification de ppcopo

        if ($lastppcoposac<$ppcoposac || $lastppcoposacbleu<$ppcoposacbleu || $lastppcoposacblanc<$ppcoposacblanc || $lastppcoposacjaune<$ppcoposacjaune || $lastppcoposacvert<$ppcoposacvert || $lastppcoposacmauve<$ppcoposacmauve || $lastppcoposacrouge<$ppcoposacrouge || $lastppcoposacjadida<$ppcoposacjadida || $lastppcoposacmaron<$ppcoposacmaron || $lastppcoposacnoire<$ppcoposacnoire || $lastppcoposacmulti<$ppcoposacmulti) {
            return redirect()->route('achats.create')
                        ->withFail('Désolé!!! mais le nombre de sac de PP COPO que vous avez saisi n\'est disponible dans le stock commercial. Veillez vérifier l\'etat de la matiere demander ou de faire une demande de matiere à la production afin de pouvoir éffectuer cette vente. ');
        }

        if ($lastpphomosac<$pphomosac || $lastpphomosacbleu<$pphomosacbleu || $lastpphomosacblanc<$pphomosacblanc || $lastpphomosacjaune<$pphomosacjaune || $lastpphomosacvert<$pphomosacvert || $lastpphomosacmauve<$pphomosacmauve || $lastpphomosacrouge<$pphomosacrouge || $lastpphomosacjadida<$pphomosacjadida || $lastpphomosacmaron<$pphomosacmaron || $lastpphomosacnoire<$pphomosacnoire || $lastpphomosacmulti<$pphomosacmulti) {
            return redirect()->route('achats.create')
                        ->withFail('Désolé!!! mais le nombre de sac de PP HOMO que vous avez saisi n\'est disponible dans le stock commercial. Veillez vérifier l\'etat de la matiere demander ou de faire une demande de matiere à la production afin de pouvoir éffectuer cette vente. ');
        }

        if ($lastpetpreformsac<$petpreformsac || $lastpetpreformsacbleu<$petpreformsacbleu || $lastpetpreformsacblanc<$petpreformsacblanc) {
            return redirect()->route('achats.create')
                        ->withFail('Désolé!!! mais le nombre de sac de PET PREFORME que vous avez saisi n\'est disponible dans le stock commercial. Veillez vérifier l\'etat de la matiere demander ou de faire une demande de matiere à la production afin de pouvoir éffectuer cette vente. ');
        }

        if ($lastpetbouteillesac<$petbouteillesac || $lastpetbouteillebleusac<$petbouteillebleusac || $lastpetbouteilleblancsac<$petbouteilleblancsac) {
            return redirect()->route('achats.create')
                        ->withFail('Désolé!!! mais le nombre de sac de PET BOUTEILLE que vous avez saisi n\'est disponible dans le stock commercial. Veillez vérifier l\'etat de la matiere demander ou de faire une demande de matiere à la production afin de pouvoir éffectuer cette vente. ');
        }

     
        if ($lastpehdcasiersac<$pehdcasiersac || $lastpehdcasiersacblanc<$pehdcasiersacblanc || $lastpehdcasiersacbleu<$pehdcasiersacbleu || $lastpehdcasiersacjaune<$pehdcasiersacjaune || $lastpehdcasiersacvert<$pehdcasiersacvert || $lastpehdcasiersacrouge<$pehdcasiersacrouge || $lastpehdcasiersacjadida<$pehdcasiersacjadida || $lastpehdcasiersacmaron<$pehdcasiersacmaron || $lastpehdcasiersacnoire<$pehdcasiersacnoire || $lastpehdcasiersacmulti<$pehdcasiersacmulti) {
            return redirect()->route('achats.create')
                   ->withFail('Désolé!!! mais le nombre de sac de PEHD CASIER que vous avez saisi n\'est disponible dans le stock commercial. Veillez vérifier l\'etat de la matiere demander ou de faire une demande de matiere à la production afin de pouvoir éffectuer cette vente. ');
        }

        if ($lastpehdsouflagesac<$pehdsouflagesac || $lastpehdsouflagesacblanc<$pehdsouflagesacblanc || $lastpehdsouflagesacbleu<$pehdsouflagesacbleu || $lastpehdsouflagesacjaune<$pehdsouflagesacjaune || $lastpehdsouflagesacvert<$pehdsouflagesacvert || $lastpehdsouflagesacrouge<$pehdsouflagesacrouge || $lastpehdsouflagesacjadida<$pehdsouflagesacjadida || $lastpehdsouflagesacmaron<$pehdsouflagesacmaron || $lastpehdsouflagesacnoire<$pehdsouflagesacnoire || $lastpehdsouflagesacmulti<$pehdsouflagesacmulti) {
            return redirect()->route('achats.create')
                   ->withFail('Désolé!!! mais le nombre de sac de PEHD CASIER que vous avez saisi n\'est disponible dans le stock commercial. Veillez vérifier l\'etat de la matiere demander ou de faire une demande de matiere à la production afin de pouvoir éffectuer cette vente. ');
        }


    
        if ($nombredesac<$totale) {
            return redirect()->route('achats.create')
                   ->withFail('Désolé mais le nombre de NOMBRE DE SAC que vous avez saisi n\'est disponible dans le stock commercial. Veillez demander à la production de la matiére afin de pouvoir éffectuer cette vente. ');
        }
        
        if ($prixunitaire<=0) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner un prix normale pour les matiéres à vendre ');
        }

        if ($ppcoposac!=null && $ppcopoprix==null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le prix du PP COPO pour les matiéres à vendre ');
        }

        if ($ppcoposac==null && $ppcopoprix!=null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le nombre de sac de PP COPO à vendre ');
        }
        
        if ($pphomosac!=null && $pphomoprix==null) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le prix du PP HOMO pour les matiéres à vendre ');
        }
        
       if ($pphomosac==null && $pphomoprix!=null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le nombre de sac de PP HOMO à vendre ');
        }
        
        if ($petpreformsac!=null && $petpreformprix==null) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le prix du PET PREFORME pour les matiéres à vendre ');
        }
        if ($petpreformsac==null && $petpreformprix!=null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le nombre de sac de PET PREFORME à vendre ');
        }
        
        if ($petbouteillesac!=null && $petbouteilleprix==null) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le prix du PET BOUTEILLE pour les matiéres à vendre ');
        }

        if ($petbouteillesac==null && $petbouteilleprix!=null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le nombre de sac de PET BOUTEILLE à vendre ');
        }
        
        if ($pehdcasiersac!=null && $pehdcasierprix==null) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le prix du PEHD CASIER pour les matiéres à vendre ');
        }

        if ($pehdcasiersac==null && $pehdcasierprix!=null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le nombre de sac de PEHD CASIER à vendre ');
        }
        
        if ($pehdsouflagesac!=null && $pehdsouflageprix==null) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le prix du PEHD SOUFLAGE pour les matiéres à vendre ');
        }

        if ($pehdsouflagesac==null && $pehdsouflageprix!=null ) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner le nombre de sac de PEHD SOUFLAGE à vendre ');
        }
        
        if ($totale==0) {
            return redirect()->route('achats.create')
                   ->withFail('Impossible d\'effectuer cette vente Veillez donner de la quantité pour les matiéres à vendre ');
        }
                
        

        DB::table('achats')->insert([

            'client'=>$client,

            'ppcoposac'=>$ppcoposac,
            'ppcoposacbleu'=>$ppcoposacbleu,
            'ppcoposacblanc'=>$ppcoposacblanc,
            'ppcoposacjaune'=>$ppcoposacjaune,
            'ppcoposacvert'=>$ppcoposacvert,
            'ppcoposacmauve'=>$ppcoposacmauve,
            'ppcoposacrouge'=>$ppcoposacrouge,
            'ppcoposacjadida'=>$ppcoposacjadida,
            'ppcoposacmaron'=>$ppcoposacmaron,
            'ppcoposacnoire'=>$ppcoposacnoire,
            'ppcoposacmulti'=>$ppcoposacmulti,
    
            'ppcopoprix'=>$ppcopoprix,
    
            'pphomosac'=>$pphomosac,
            'pphomosacbleu'=>$pphomosacbleu,
            'pphomosacblanc'=>$pphomosacblanc,
            'pphomosacjaune'=>$pphomosacjaune,
            'pphomosacvert'=>$pphomosacvert,
            'pphomosacmauve'=>$pphomosacmauve,
            'pphomosacrouge'=>$pphomosacrouge,
            'pphomosacjadida'=>$pphomosacjadida,
            'pphomosacmaron'=>$pphomosacmaron,
            'pphomosacnoire'=>$pphomosacnoire,
            'pphomosacmulti'=>$pphomosacmulti,
    
            'pphomoprix'=>$pphomoprix,
           
    
            'petpreformsac'=>$petpreformsac,
            'petpreformsacbleu'=>$petpreformsacbleu,
            'petpreformsacblanc'=>$petpreformsacblanc,
    
            'petpreformprix'=>$petpreformprix,

            'petbouteillesac'=>$petbouteillesac,
            'petbouteillebleusac'=>$petbouteillebleusac,
            'petbouteilleblancsac'=>$petbouteilleblancsac,

            'petbouteilleprix'=>$petbouteilleprix,
    
            'pehdcasiersac'=>$pehdcasiersac,
            'pehdcasiersacbleu'=>$pehdcasiersacbleu,
            'pehdcasiersacblanc'=>$pehdcasiersacblanc,
            'pehdcasiersacjaune'=>$pehdcasiersacjaune,
            'pehdcasiersacvert'=>$pehdcasiersacvert,
            'pehdcasiersacneutre'=>$pehdcasiersacneutre,
            'pehdcasiersacrouge'=>$pehdcasiersacrouge,
            'pehdcasiersacjadida'=>$pehdcasiersacjadida,
            'pehdcasiersacmaron'=>$pehdcasiersacmaron,
            'pehdcasiersacnoire'=>$pehdcasiersacnoire,
            'pehdcasiersacmulti'=>$pehdcasiersacmulti,
    
            'pehdcasierprix'=>$pehdcasierprix,
          
    
            'pehdsouflagesac'=>$pehdsouflagesac,
            'pehdsouflagesacbleu'=>$pehdsouflagesacbleu,
            'pehdsouflagesacblanc'=>$pehdsouflagesacblanc,
            'pehdsouflagesacjaune'=>$pehdsouflagesacjaune,
            'pehdsouflagesacvert'=>$pehdsouflagesacvert,
            'pehdsouflagesacneutre'=>$pehdsouflagesacneutre,
            'pehdsouflagesacrouge'=>$pehdsouflagesacrouge,
            'pehdsouflagesacjadida'=>$pehdsouflagesacjadida,
            'pehdsouflagesacmaron'=>$pehdsouflagesacmaron,
            'pehdsouflagesacnoire'=>$pehdsouflagesacnoire,
            'pehdsouflagesacmulti'=>$pehdsouflagesacmulti,
    
            'pehdsouflageprix'=>$pehdsouflageprix,
            'totale'=>$totale,
            'somme'=>$somme,
            'date'=>$date,

        ]);
      


    
        $ventes=Ventes::where('id', $id)->update([
        'nombredesac'=>$nombredesac-$totale,

        'ppcopo'=>$lastppcopo-($ppcoposac*25),
        'ppcopobleu'=>$lastppcopobleu-($ppcoposacbleu*25),
        'ppcopoblanc'=>$lastppcopoblanc-($ppcoposacblanc*25),
        'ppcopojaune'=>$lastppcopojaune-($ppcoposacjaune*25),
        'ppcopovert'=>$lastppcopovert-($ppcoposacvert*25),
        'ppcopomauve'=>$lastppcopomauve-($ppcoposacmauve*25),
        'ppcoporouge'=>$lastppcoporouge-($ppcoposacrouge*25),
        'ppcopojadida'=>$lastppcopojadida-($ppcoposacjadida*25),
        'ppcopomaron'=>$lastppcopomaron-($ppcoposacmaron*25),
        'ppcoponoire'=>$lastppcoponoire-($ppcoposacnoire*25),
        'ppcopomulti'=>$lastppcopomulti-($ppcoposacmulti*25),

        'ppcoposac'=>$lastppcoposac-$ppcoposac,
        'ppcoposacbleu'=>$lastppcoposacbleu-$ppcoposacbleu,
        'ppcoposacblanc'=>$lastppcoposacblanc-$ppcoposacblanc,
        'ppcoposacjaune'=>$lastppcoposacjaune-$ppcoposacjaune,
        'ppcoposacvert'=>$lastppcoposacvert-$ppcoposacvert,
        'ppcoposacmauve'=>$lastppcoposacmauve-$ppcoposacmauve,
        'ppcoposacrouge'=>$lastppcoposacrouge-$ppcoposacrouge,
        'ppcoposacjadida'=>$lastppcoposacjadida-$ppcoposacjadida,
        'ppcoposacmaron'=>$lastppcoposacmaron-$ppcoposacmaron,
        'ppcoposacnoire'=>$lastppcoposacnoire-$ppcoposacnoire,
        'ppcoposacmulti'=>$lastppcoposacmulti-$ppcoposacmulti,

        'pphomo'=>$lastpphomo-($pphomosac*25),
        'pphomobleu'=>$lastpphomobleu-($pphomosacbleu*25),
        'pphomoblanc'=>$lastpphomoblanc-($pphomosacblanc*25),
        'pphomojaune'=>$lastpphomojaune-($pphomosacjaune*25),
        'pphomovert'=>$lastpphomovert-($pphomosacvert*25),
        'pphomomauve'=>$lastpphomomauve-($pphomosacmauve*25),
        'pphomorouge'=>$lastpphomorouge-($pphomosacrouge*25),
        'pphomojadida'=>$lastpphomojadida-($pphomosacjadida*25),
        'pphomomaron'=>$lastpphomomaron-($pphomosacmaron*25),
        'pphomonoire'=>$lastpphomonoire-($pphomosacnoire*25),
        'pphomomulti'=>$lastpphomomulti-($pphomosacmulti*25),

        'pphomosac'=>$lastpphomosac-$pphomosac,
        'pphomosacbleu'=>$lastpphomosacbleu-$pphomosacbleu,
        'pphomosacblanc'=>$lastpphomosacblanc-$pphomosacblanc,
        'pphomosacjaune'=>$lastpphomosacjaune-$pphomosacjaune,
        'pphomosacvert'=>$lastpphomosacvert-$pphomosacvert,
        'pphomosacmauve'=>$lastpphomosacmauve-$pphomosacmauve,
        'pphomosacrouge'=>$lastpphomosacrouge-$pphomosacrouge,
        'pphomosacjadida'=>$lastpphomosacjadida-$pphomosacjadida,
        'pphomosacmaron'=>$lastpphomosacmaron-$pphomosacmaron,
        'pphomosacnoire'=>$lastpphomosacnoire-$pphomosacnoire,
        'pphomosacmulti'=>$lastpphomosacmulti-$pphomosacmulti,

        'petpreform'=>$lastpetpreform-($petpreformsac*25),
        'petpreformbleu'=>$lastpetpreformbleu-($petpreformsacbleu*25),
        'petpreformblanc'=>$lastpetpreformblanc-($petpreformsacblanc*25),

        'petpreformsac'=>$lastpetpreformsac-$petpreformsac,
        'petpreformsacbleu'=>$lastpetpreformsacbleu-$petpreformsacbleu,
        'petpreformsacblanc'=>$lastpetpreformsacblanc-$petpreformsacblanc,

        'petbouteille'=>$lastpetbouteille-($petbouteillesac*25),
        'petbouteillebleu'=>$lastpetbouteillebleu-($petbouteillebleusac*25),
        'petbouteilleblanc'=>$lastpetbouteilleblanc-($petbouteilleblancsac*25),

        'petbouteillesac'=>$lastpetbouteillesac-$petbouteillesac,
        'petbouteillebleusac'=>$lastpetbouteillebleusac-$petbouteillebleusac,
        'petbouteilleblancsac'=>$lastpetbouteilleblancsac-$petbouteilleblancsac,

        'pehdcasier'=>$lastpehdcasier-($pehdcasiersac*25),
        'pehdcasierbleu'=>$lastpehdcasierbleu-($pehdcasiersacbleu*25),
        'pehdcasierblanc'=>$lastpehdcasierblanc-($pehdcasiersacblanc*25),
        'pehdcasierjaune'=>$lastpehdcasierjaune-($pehdcasiersacjaune*25),
        'pehdcasiervert'=>$lastpehdcasiervert-($pehdcasiersacvert*25),
        'pehdcasierneutre'=>$lastpehdcasierneutre-($pehdcasiersacneutre*25),
        'pehdcasierrouge'=>$lastpehdcasierrouge-($pehdcasiersacrouge*25),
        'pehdcasierjadida'=>$lastpehdcasierjadida-($pehdcasiersacjadida*25),
        'pehdcasiermaron'=>$lastpehdcasiermaron-($pehdcasiersacmaron*25),
        'pehdcasiernoire'=>$lastpehdcasiernoire-($pehdcasiersacnoire*25),
        'pehdcasiermulti'=>$lastpehdcasiermulti-($pehdcasiersacmulti*25),


        'pehdcasiersac'=>$lastpehdcasiersac-$pehdcasiersac,
        'pehdcasiersacbleu'=>$lastpehdcasiersacbleu-$pehdcasiersacbleu,
        'pehdcasiersacblanc'=>$lastpehdcasiersacblanc-$pehdcasiersacblanc,
        'pehdcasiersacjaune'=>$lastpehdcasiersacjaune-$pehdcasiersacjaune,
        'pehdcasiersacvert'=>$lastpehdcasiersacvert-$pehdcasiersacvert,
        'pehdcasiersacneutre'=>$lastpehdcasiersacneutre-$pehdcasiersacneutre,
        'pehdcasiersacrouge'=>$lastpehdcasiersacrouge-$pehdcasiersacrouge,
        'pehdcasiersacjadida'=>$lastpehdcasiersacjadida-$pehdcasiersacjadida,
        'pehdcasiersacmaron'=>$lastpehdcasiersacmaron-$pehdcasiersacmaron,
        'pehdcasiersacnoire'=>$lastpehdcasiersacnoire-$pehdcasiersacnoire,
        'pehdcasiersacmulti'=>$lastpehdcasiersacmulti-$pehdcasiersacmulti,

        'pehdsouflage'=>$lastpehdsouflage-($pehdsouflagesac*25),
        'pehdsouflagebleu'=>$lastpehdsouflagebleu-($pehdsouflagesacbleu*25),
        'pehdsouflageblanc'=>$lastpehdsouflageblanc-($pehdsouflagesacblanc*25),
        'pehdsouflagejaune'=>$lastpehdsouflagejaune-($pehdsouflagesacjaune*25),
        'pehdsouflagevert'=>$lastpehdsouflagevert-($pehdsouflagesacvert*25),
        'pehdsouflageneutre'=>$lastpehdsouflageneutre-($pehdsouflagesacneutre*25),
        'pehdsouflagerouge'=>$lastpehdsouflagerouge-($pehdsouflagesacrouge*25),
        'pehdsouflagejadida'=>$lastpehdsouflagejadida-($pehdsouflagesacjadida*25),
        'pehdsouflagemaron'=>$lastpehdsouflagemaron-($pehdsouflagesacmaron*25),
        'pehdsouflagenoire'=>$lastpehdsouflagenoire-($pehdsouflagesacnoire*25),
        'pehdsouflagemulti'=>$lastpehdsouflagemulti-($pehdsouflagesacmulti*25),


        'pehdsouflagesac'=>$lastpehdsouflagesac-$pehdsouflagesac,
        'pehdsouflagesacbleu'=>$lastpehdsouflagesacbleu-$pehdsouflagesacbleu,
        'pehdsouflagesacblanc'=>$lastpehdsouflagesacblanc-$pehdsouflagesacblanc,
        'pehdsouflagesacjaune'=>$lastpehdsouflagesacjaune-$pehdsouflagesacjaune,
        'pehdsouflagesacvert'=>$lastpehdsouflagesacvert-$pehdsouflagesacvert,
        'pehdsouflagesacneutre'=>$lastpehdsouflagesacneutre-$pehdsouflagesacneutre,
        'pehdsouflagesacrouge'=>$lastpehdsouflagesacrouge-$pehdsouflagesacrouge,
        'pehdsouflagesacjadida'=>$lastpehdsouflagesacjadida-$pehdsouflagesacjadida,
        'pehdsouflagesacmaron'=>$lastpehdsouflagesacmaron-$pehdsouflagesacmaron,
        'pehdsouflagesacnoire'=>$lastpehdsouflagesacnoire-$pehdsouflagesacnoire,
        'pehdsouflagesacmulti'=>$lastpehdsouflagesacmulti-$pehdsouflagesacmulti,

        'totale'=>$lasttotale-($totale*25),
        'date'=>$date,

       ]);
      
     

        $clients=$this->clients = Clients::find($client);

        $id=$clients->id;
        $solde=$this->clients->totaleachete;
        $quantitedesachats=$this->clients->quantitetotale;

        Clients::where('id', $id)->update([
 
        'totaleachete'=>$solde+$somme,
        'quantitetotale'=>$quantitedesachats+$totale,
       
        ]);
        return redirect()->route('achats.index', compact('achat', 'clients', 'ventes'))
                        ->with('Achat effectué avec succés .');
    }
 




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $achat = achats::find($id);
        return view('achats.index', compact('achat'));
    }
}
