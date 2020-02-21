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

                        'petlav'=>0,
                        'petbleu'=>0,
                        'petblanc'=>0,
                    
                        'pehdlav'=>0,
                        'pehdbleu'=>0,
                        'pehdblanc'=>0,
                        'pehdjaune'=>0,
                        'pehdvert'=>0,
                        'pehdneutre'=>0,
                        'pehdrouge'=>0,
                        'pehdjadida'=>0,
                        'pehdmaron'=>0,
                        'pehdnoire'=>0,
                        'pehdmulti'=>0,
                    
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

                    'petbro'=>0,
                    'petbleu'=>0,
                    'petblanc'=>0,

                    'pehdbro'=>0,
                    'pehdbleu'=>0,
                    'pehdblanc'=>0,
                    'pehdjaune'=>0,
                    'pehdvert'=>0,
                    'pehdneutre'=>0,
                    'pehdrouge'=>0,
                    'pehdjadida'=>0,
                    'pehdmaron'=>0,
                    'pehdnoire'=>0,
                    'pehdmulti'=>0,

                    'totale'=>0,
                    'effectifbro'=>0,

                    'dechebroyage'=>0,
                    'heuremachine'=>0,
                    'date'=>'2015-02-03',
                    ]);


    }
    
   
}
