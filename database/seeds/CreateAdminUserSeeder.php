<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Service;
use App\Roles;
use App\Fournisseur;
use App\DepotCollecte;
use App\TypeCollecteur;
use App\CollectEntreprise;
use App\DepotProduction;
use App\Triage;
use App\Permission;
use App\Lavagehor;
use App\Broyage;
use App\Sac;
use App\Extrusion;
use App\Stockproduitfini;
use App\ventes;

//use Spatie\Permission\Models\Roles;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::create([
            'libelle' => 'RH',
            'direction' => 'Thies',
            
        ]);
        $services = Service::create([
            'libelle' => 'MARKETING',
            'direction' => 'dakar',
            
        ]);

        $services = Service::create([
            'libelle' => 'COLLECTE',
            'direction' => 'dakar',
            
        ]);
        $services = Service::create([
            'libelle' => 'FINANCE',
            'direction' => 'dakar',
            
        ]);
        $services = Service::create([
            'libelle' => 'PRODUCTION',
            'direction' => 'thies',
            
        ]);
        $services = Service::create([
            'libelle' => 'VENTE',
            'direction' => 'dakar',
            
        ]);
        
        $role = Roles::create(['libelle' => 'ADMIN_SYSTEME']);
        $role = Roles::create(['libelle' => 'ADMIN_SIMPLE']);
        $role = Roles::create(['libelle' => 'USER_SIMPLE']);

        $Permissions = Permission::create([
         
                'id'         => '1',
                'title'      => 'employes_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ]);
            
          
        $Permissions = Permission::create([
         
                'id'         => '2',
                'title'      => 'employes_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ]);
       
        
        $user = User::create([
            'name' => 'Dieye',
            'prenom' => 'Elhadji malick',
            'statut' => 'actif',
            'email' => 'ndieyene@gmail.com',
            'service_id' =>'1',
            'roles' =>'1',
            'password' => bcrypt('12345678')
        ]);

       
   

        $depotCollecte = DepotCollecte::create([
        'quantiteinitiale'=>0,
        'quantiteEntrante'=>0,
        'quantiteSortante'=>0,
        'depot'=>0,
        'pphomo'=>0,
        'pphomoSortante'=>0,
        'ppcopo'=>0,
        'ppcopoSortante'=>0,
        'petbouteille'=>0,
        'petbouteilleSortante'=>0,
        'petpreform'=>0,
        'petpreformSortante'=>0,
        'pehdcasier'=>0,
        'pehdcasierSortante'=>0,
        'pehdsoufflage'=>0,
        'pehdsoufflageSortante'=>0,
        'dechet'=>0,
        'date'=>'2015-02-03',
        'total'=>0,

            ]);

        $typeCollecteur = TypeCollecteur::create([
                'libelle' => 'AGREE',
                ]);

        $typeCollecteur = TypeCollecteur::create([
                    'libelle' => 'RECUPLAST',
                    ]);

        $typeCollecteur = TypeCollecteur::create([
                    'libelle' => 'DIVERS',
                 ]);
        $typeCollecteur = TypeCollecteur::create([
                    'libelle' => 'ENTREPRISE',
                 ]);

                 
        $fournisseur = Fournisseur::create([
            'nomComplet' => 'Elhadji malick',
            'avance' => 0,
            'contact' => '771327599',
            'region' =>'mbour',
            'departement' =>'mbour',
            'commune' =>'mbour',
            'quartier' =>'11',
            'restant_du' =>'0',
            'numero' =>'FR_401001',
            'type' =>'1',
            ]);


        $fournisseur = Fournisseur::create([
                'nomComplet' => 'Collecteur DIVERS',
                'avance' => 0,
                'contact' => '',
                'region' =>'',
                'departement' =>'',
                'commune' =>'',
                'quartier' =>'',
                'restant_du' =>'0',
                'numero' =>'FR_401002',
                'type' =>'3',
                ]);


        $collectEntreprise = CollectEntreprise::create([
                    'fournisseur_id' =>'1',
                    'ppcopo'=>0,
                    'prixppcopo'=>0,
                    'pphomo'=>0,
                    'prixpphomo'=>0,
                    'pet'=>0,
                    'pp'=>0,
                    'pehd'=>0,
                    'dechet'=>0,
                    'date_collecte'=>'2015-02-03',
                    'numerobons'=>'123456',
                    'petbouteille'=> 0,
                    'petbouteilleprix'=> 0,
                    'petpreform'=> 0,
                    'petpreformprix'=> 0,
                    'pehdcasier'=> 0,
                    'pehdcasierprix'=> 0,
                    'pehdsoufflage'=> 0,
                    'pehdsoufflageprix'=> 0,
                    'totaltri'=>0,
                    ]);

        $depotProduction = DepotProduction::create([
                    'vracinitiale'=>0,
                    'vracEntrant'=>0,
                    'vracSortant'=>0,
                    'vrac'=>0,
                    'pphomoinitiale'=>0,
                    'pphomoEntrantpro'=>0,
                    'pphomoSortantepro'=>0,
                    'pphomo'=>0,
                    'ppcopoinitiale'=>0,
                    'ppcopoEntrantpro'=>0,
                    'ppcopoSortantepro'=>0,
                    'ppcopo'=>0,
                    'pp'=>0,
                    'petbouteilleinitiale'=>0,
                    'petbouteilleEntrantpro'=>0,
                    'petbouteilleSortantepro'=>0,
                    'petbouteille'=>0,
                    'petpreforminitiale'=>0,
                    'petpreformEntrantpro'=>0,
                    'petpreformSortantepro'=>0,
                    'petpreform'=>0,
                    'pet'=>0,
                    'pehdcasierinitiale'=>0,
                    'pehdcasierEntrantpro'=>0,
                    'pehdcasierSortantepro'=>0,
                    'pehdcasier'=>0,
                    'pehdsoufflageinitiale'=>0,
                    'pehdsoufflageEntrantpro'=>0,
                    'pehdsoufflageSortantepro'=>0,
                    'pehdsoufflage'=>0,
                    'pehd'=>0,
                    'dechet'=>0,
                    'date'=>'2015-02-03',
   
                    ]);

        $triage = Triage::create([
                        'premierequantite'=>0,
                        
                        'date'=>'2015-02-03',
       
                        ]);

        $lavagehor = Lavagehor::create([
                            
                        'lavagehor'=>0,
                        'ppcopolav'=>0,

                        'ppcopobleu'=>0,
                        'ppcopoblanc'=>0,
                        'ppcopojaune'=>0,
                        'ppcopovert'=>0,
                        'ppcopomauve'=>0,
                        'ppcoporouge'=>0,
                        'ppcopojadida'=>0,
                        'ppcopomaron'=>0,
                        'ppcoponoire'=>0,
                        'ppcopomulti'=>0,

                        'pphomolav'=>0,
                        'pphomobleu'=>0,
                        'pphomoblanc'=>0,
                        'pphomojaune'=>0,
                        'pphomovert'=>0,
                        'pphomomauve'=>0,
                        'pphomorouge'=>0,
                        'pphomojadida'=>0,
                        'pphomomaron'=>0,
                        'pphomonoire'=>0,
                        'pphomomulti'=>0,

                        'petpreformlav'=>0,
                        'petpreformbleu'=>0,
                        'petpreformblanc'=>0,

                        'petbouteillelav'=>0,
                        'petbouteillebleu'=>0,
                        'petbouteilleblanc'=>0,
                    
                        'pehdcasierlav'=>0,
                        'pehdcasierbleu'=>0,
                        'pehdcasierblanc'=>0,
                        'pehdcasierjaune'=>0,
                        'pehdcasiervert'=>0,
                        'pehdcasierneutre'=>0,
                        'pehdcasierrouge'=>0,
                        'pehdcasierjadida'=>0,
                        'pehdcasiermaron'=>0,
                        'pehdcasiernoire'=>0,
                        'pehdcasiermulti'=>0,

                        'pehdsouflagelav'=>0,
                        'pehdsouflagebleu'=>0,
                        'pehdsouflageblanc'=>0,
                        'pehdsouflagejaune'=>0,
                        'pehdsouflagevert'=>0,
                        'pehdsouflageneutre'=>0,
                        'pehdsouflagerouge'=>0,
                        'pehdsouflagejadida'=>0,
                        'pehdsouflagemaron'=>0,
                        'pehdsouflagenoire'=>0,
                        'pehdsouflagemulti'=>0,
                    
                        'totale'=>0,
                        'effectiflav'=>0,
                    
                        'dechelavage'=>0,
                        'date'=>'2015-02-03',
                        ]);

        $broyage = Broyage::create([

                    'broyage'=>0,
                    'ppcopobro'=>0,
                    'ppcopobleu'=>0,
                    'ppcopoblanc'=>0,
                    'ppcopojaune'=>0,
                    'ppcopovert'=>0,
                    'ppcopomauve'=>0,
                    'ppcoporouge'=>0,
                    'ppcopojadida'=>0,
                    'ppcopomaron'=>0,
                    'ppcoponoire'=>0,
                    'ppcopomulti'=>0,

                    'pphomobro'=>0,
                    'pphomobleu'=>0,
                    'pphomoblanc'=>0,
                    'pphomojaune'=>0,
                    'pphomovert'=>0,
                    'pphomomauve'=>0,
                    'pphomorouge'=>0,
                    'pphomojadida'=>0,
                    'pphomomaron'=>0,
                    'pphomonoire'=>0,
                    'pphomomulti'=>0,

                    'petpreformbro'=>0,
                    'petpreformbleu'=>0,
                    'petpreformblanc'=>0,

                    'petbouteillebro'=>0,
                    'petbouteillebleu'=>0,
                    'petbouteilleblanc'=>0,

                    'pehdcasierbro'=>0,
                    'pehdcasierbleu'=>0,
                    'pehdcasierblanc'=>0,
                    'pehdcasierjaune'=>0,
                    'pehdcasiervert'=>0,
                    'pehdcasierneutre'=>0,
                    'pehdcasierrouge'=>0,
                    'pehdcasierjadida'=>0,
                    'pehdcasiermaron'=>0,
                    'pehdcasiernoire'=>0,
                    'pehdcasiermulti'=>0,

                    'pehdsouflagebro'=>0,
                    'pehdsouflagebleu'=>0,
                    'pehdsouflageblanc'=>0,
                    'pehdsouflagejaune'=>0,
                    'pehdsouflagevert'=>0,
                    'pehdsouflageneutre'=>0,
                    'pehdsouflagerouge'=>0,
                    'pehdsouflagejadida'=>0,
                    'pehdsouflagemaron'=>0,
                    'pehdsouflagenoire'=>0,
                    'pehdsouflagemulti'=>0,

                    'totale'=>0,
                    'effectifbro'=>0,

                    'dechebroyage'=>0,
                    'heuremachine'=>0,
                    'date'=>'2015-02-03',
                    ]);

        $sac= Sac::create([
                    'sac'=>0,
                    'ppcopo'=>0,
                    'ppcopobleu'=>0,
                    'ppcopoblanc'=>0,
                    'ppcopojaune'=>0,
                    'ppcopovert'=>0,
                    'ppcopomauve'=>0,
                    'ppcoporouge'=>0,
                    'ppcopojadida'=>0,
                    'ppcopomaron'=>0,
                    'ppcoponoire'=>0,
                    'ppcopomulti'=>0,
            
                    'pphomo'=>0,
                    'pphomobleu'=>0,
                    'pphomoblanc'=>0,
                    'pphomojaune'=>0,
                    'pphomovert'=>0,
                    'pphomomauve'=>0,
                    'pphomorouge'=>0,
                    'pphomojadida'=>0,
                    'pphomomaron'=>0,
                    'pphomonoire'=>0,
                    'pphomomulti'=>0,
            
                    'pet'=>0,
                    'petpreform'=>0,
                    'petpreformbleu'=>0,
                    'petpreformblanc'=>0,
            
                    'petbouteille'=>0,
                    'petbouteillebleu'=>0,
                    'petbouteilleblanc'=>0,
            
                    'pehdcasier'=>0,
                    'pehdcasierbleu'=>0,
                    'pehdcasierblanc'=>0,
                    'pehdcasierjaune'=>0,
                    'pehdcasiervert'=>0,
                    'pehdcasierneutre'=>0,
                    'pehdcasierrouge'=>0,
                    'pehdcasierjadida'=>0,
                    'pehdcasiermaron'=>0,
                    'pehdcasiernoire'=>0,
                    'pehdcasiermulti'=>0,
                    'pehdsouflage'=>0,
            
                    'pehdsouflagebleu'=>0,
                    'pehdsouflageblanc'=>0,
                    'pehdsouflagejaune'=>0,
                    'pehdsouflagevert'=>0,
                    'pehdsouflageneutre'=>0,
                    'pehdsouflagerouge'=>0,
                    'pehdsouflagejadida'=>0,
                    'pehdsouflagemaron'=>0,
                    'pehdsouflagenoire'=>0,
                    'pehdsouflagemulti'=>0,

                    'ppcoporestant'=>0,
                    'ppcopobleurestant'=>0,
                    'ppcopoblancrestant'=>0,
                    'ppcopojaunerestant'=>0,
                    'ppcopovertrestant'=>0,
                    'ppcopomauverestant'=>0,
                    'ppcoporougerestant'=>0,
                    'ppcopojadidarestant'=>0,
                    'ppcopomaronrestant'=>0,
                    'ppcoponoirerestant'=>0,
                    'ppcopomultirestant'=>0,
            
                    'pphomorestant'=>0,
                    'pphomobleurestant'=>0,
                    'pphomoblancrestant'=>0,
                    'pphomojaunerestant'=>0,
                    'pphomovertrestant'=>0,
                    'pphomomauverestant'=>0,
                    'pphomorougerestant'=>0,
                    'pphomojadidarestant'=>0,
                    'pphomomaronrestant'=>0,
                    'pphomonoirerestant'=>0,
                    'pphomomultirestant'=>0,
            
                    'petrestant'=>0,
                    'petpreformrestant'=>0,
                    'petpreformbleurestant'=>0,
                    'petpreformblancrestant'=>0,
            
                    'petbouteillerestant'=>0,
                    'petbouteillebleurestant'=>0,
                    'petbouteilleblancrestant'=>0,
            
                    'pehdcasierrestant'=>0,
                    'pehdcasierbleurestant'=>0,
                    'pehdcasierblancrestant'=>0,
                    'pehdcasierjaunerestant'=>0,
                    'pehdcasiervertrestant'=>0,
                    'pehdcasierneutrerestant'=>0,
                    'pehdcasierrougerestant'=>0,
                    'pehdcasierjadidarestant'=>0,
                    'pehdcasiermaronrestant'=>0,
                    'pehdcasiernoirerestant'=>0,
                    'pehdcasiermultirestant'=>0,
            
            
                    'pehdsouflagerestant'=>0,
            
                    'pehdsouflagebleurestant'=>0,
                    'pehdsouflageblancrestant'=>0,
                    'pehdsouflagejaunerestant'=>0,
                    'pehdsouflagevertrestant'=>0,
                    'pehdsouflageneutrerestant'=>0,
                    'pehdsouflagerougerestant'=>0,
                    'pehdsouflagejadidarestant'=>0,
                    'pehdsouflagemaronrestant'=>0,
                    'pehdsouflagenoirerestant'=>0,
                    'pehdsouflagemultirestant'=>0,
            
            
                    'totale'=>0,
                    'effectifsac'=>0,
                    'dechesac'=>0,
                    'date'=>'2015-02-03',
                   ]);



        $extrusion= Extrusion:: create([
                    'extrusion'=>0,
                   'pehdsouflagebleu'=>0,
                   'pehdsouflageblanc'=>0,
                   'pehdsouflagejaune'=>0,
                   'pehdsouflagevert'=>0,
                   'pehdsouflageneutre'=>0,
                   'pehdsouflagerouge'=>0,
                   'pehdsouflagejadida'=>0,
                   'pehdsouflagemaron'=>0,
                   'pehdsouflagenoire'=>0,
                   'pehdsouflagemulti'=>0,
               
                   'pehdsouflagebleurestant'=>0,
                   'pehdsouflageblancrestant'=>0,
                   'pehdsouflagejaunerestant'=>0,
                   'pehdsouflagevertrestant'=>0,
                   'pehdsouflageneutrerestant'=>0,
                   'pehdsouflagerougerestant'=>0,
                   'pehdsouflagejadidarestant'=>0,
                   'pehdsouflagemaronrestant'=>0,
                   'pehdsouflagenoirerestant'=>0,
                   'pehdsouflagemultirestant'=>0,
               
                   'pehdsouflagesacbleu'=>0,
                   'pehdsouflagesacblanc'=>0,
                   'pehdsouflagesacjaune'=>0,
                   'pehdsouflagesacvert'=>0,
                   'pehdsouflagesacneutre'=>0,
                   'pehdsouflagesacrouge'=>0,
                   'pehdsouflagesacjadida'=>0,
                   'pehdsouflagesacmaron'=>0,
                   'pehdsouflagesacnoire'=>0,
                   'pehdsouflagesacmulti'=>0,
                   'pehdsouflagesac'=>0,
                   
                   'effectifextru'=>0,
                  
               
               
                   'decheextrusion'=>0,
                   'date'=>'2015-02-03',
                   ]);



        $stockproduitfini= Stockproduitfini::create([
                   'stockproduitfini'=>0,
                   'ppcoposac'=>0,
                   'ppcoposacbleu'=>0,
                   'ppcoposacblanc'=>0,
                   'ppcoposacjaune'=>0,
                   'ppcoposacvert'=>0,
                   'ppcoposacmauve'=>0,
                   'ppcoposacrouge'=>0,
                   'ppcoposacjadida'=>0,
                   'ppcoposacmaron'=>0,
                   'ppcoposacnoire'=>0,
                   'ppcoposacmulti'=>0,
           
           
                   'pphomosacbleu'=>0,
                   'pphomosacblanc'=>0,
                   'pphomosacjaune'=>0,
                   'pphomosacvert'=>0,
                   'pphomosacmauve'=>0,
                   'pphomosacrouge'=>0,
                   'pphomosacjadida'=>0,
                   'pphomosacmaron'=>0,
                   'pphomosacnoire'=>0,
                   'pphomosacmulti'=>0,
                   'pphomosac'=>0,
           
           
                   'petpreformsac'=>0,
                   'petpreformsacbleu'=>0,
                   'petpreformsacblanc'=>0,
           
                   'petbouteillesac'=>0,
                   'petbouteillesacbleu'=>0,
                   'petbouteillesacblanc'=>0,
           
                  
           
                   'pehdcasiersacbleu'=>0,
                   'pehdcasiersacblanc'=>0,
                   'pehdcasiersacjaune'=>0,
                   'pehdcasiersacvert'=>0,
                   'pehdcasiersacneutre'=>0,
                   'pehdcasiersacrouge'=>0,
                   'pehdcasiersacjadida'=>0,
                   'pehdcasiersacmaron'=>0,
                   'pehdcasiersacnoire'=>0,
                   'pehdcasiersacmulti'=>0,
                   'pehdcasiersac'=>0,
           
           
           
                   'pehdsouflagesacbleu'=>0,
                   'pehdsouflagesacblanc'=>0,
                   'pehdsouflagesacjaune'=>0,
                   'pehdsouflagesacvert'=>0,
                   'pehdsouflagesacneutre'=>0,
                   'pehdsouflagesacrouge'=>0,
                   'pehdsouflagesacjadida'=>0,
                   'pehdsouflagesacmaron'=>0,
                   'pehdsouflagesacnoire'=>0,
                   'pehdsouflagesacmulti'=>0,
                   'pehdsouflagesac'=>0,
           
                   'granule'=>0,
                   'extrude'=>0,
           
                   'effectifstock'=>0,
                   'nombre'=>0,
           
                   'date'=>'2015-02-03',
                  ]);


        $vente=ventes::create([
                    'nombredesac'=>0,
                    'ppcopo'=>0,
                    'ppcopobleu'=>0,
                    'ppcopoblanc'=>0,
                    'ppcopojaune'=>0,
                    'ppcopovert'=>0,
                    'ppcopomauve'=>0,
                    'ppcoporouge'=>0,
                    'ppcopojadida'=>0,
                    'ppcopomaron'=>0,
                    'ppcoponoire'=>0,
                    'ppcopomulti'=>0,
            
                    'ppcoposac'=>0,
                    'ppcoposacbleu'=>0,
                    'ppcoposacblanc'=>0,
                    'ppcoposacjaune'=>0,
                    'ppcoposacvert'=>0,
                    'ppcoposacmauve'=>0,
                    'ppcoposacrouge'=>0,
                    'ppcoposacjadida'=>0,
                    'ppcoposacmaron'=>0,
                    'ppcoposacnoire'=>0,
                    'ppcoposacmulti'=>0,
            
                    'pphomo'=>0,
                    'pphomobleu'=>0,
                    'pphomoblanc'=>0,
                    'pphomojaune'=>0,
                    'pphomovert'=>0,
                    'pphomomauve'=>0,
                    'pphomorouge'=>0,
                    'pphomojadida'=>0,
                    'pphomomaron'=>0,
                    'pphomonoire'=>0,
                    'pphomomulti'=>0,
            
                    'pphomosac'=>0,
                    'pphomosacbleu'=>0,
                    'pphomosacblanc'=>0,
                    'pphomosacjaune'=>0,
                    'pphomosacvert'=>0,
                    'pphomosacmauve'=>0,
                    'pphomosacrouge'=>0,
                    'pphomosacjadida'=>0,
                    'pphomosacmaron'=>0,
                    'pphomosacnoire'=>0,
                    'pphomosacmulti'=>0,
            

                    'petpreform'=>0,
                    'petpreformbleu'=>0,
                    'petpreformblanc'=>0,
            
                    'petpreformsac'=>0,
                    'petpreformsacbleu'=>0,
                    'petpreformsacblanc'=>0,
  
                    'petbouteille'=>0,
                    'petbouteillebleu'=>0,
                    'petbouteilleblanc'=>0,

                    'petbouteillesac'=>0,
                    'petbouteillebleusac'=>0,
                    'petbouteilleblancsac'=>0,
            
                    'pehdcasier'=>0,
                    'pehdcasierbleu'=>0,
                    'pehdcasierblanc'=>0,
                    'pehdcasierjaune'=>0,
                    'pehdcasiervert'=>0,
                    'pehdcasierneutre'=>0,
                    'pehdcasierrouge'=>0,
                    'pehdcasierjadida'=>0,
                    'pehdcasiermaron'=>0,
                    'pehdcasiernoire'=>0,
                    'pehdcasiermulti'=>0,
            
            
                    'pehdcasiersac'=>0,
                    'pehdcasiersacbleu'=>0,
                    'pehdcasiersacblanc'=>0,
                    'pehdcasiersacjaune'=>0,
                    'pehdcasiersacvert'=>0,
                    'pehdcasiersacneutre'=>0,
                    'pehdcasiersacrouge'=>0,
                    'pehdcasiersacjadida'=>0,
                    'pehdcasiersacmaron'=>0,
                    'pehdcasiersacnoire'=>0,
                    'pehdcasiersacmulti'=>0,
            
                    'pehdsouflage'=>0,
                    'pehdsouflagebleu'=>0,
                    'pehdsouflageblanc'=>0,
                    'pehdsouflagejaune'=>0,
                    'pehdsouflagevert'=>0,
                    'pehdsouflageneutre'=>0,
                    'pehdsouflagerouge'=>0,
                    'pehdsouflagejadida'=>0,
                    'pehdsouflagemaron'=>0,
                    'pehdsouflagenoire'=>0,
                    'pehdsouflagemulti'=>0,
            
            
                    'pehdsouflagesac'=>0,
                    'pehdsouflagesacbleu'=>0,
                    'pehdsouflagesacblanc'=>0,
                    'pehdsouflagesacjaune'=>0,
                    'pehdsouflagesacvert'=>0,
                    'pehdsouflagesacneutre'=>0,
                    'pehdsouflagesacrouge'=>0,
                    'pehdsouflagesacjadida'=>0,
                    'pehdsouflagesacmaron'=>0,
                    'pehdsouflagesacnoire'=>0,
                    'pehdsouflagesacmulti'=>0,
            
            
                    'totale'=>0,
                    'date'=>'2015-02-03',
                               
                  ]);
    }
}
