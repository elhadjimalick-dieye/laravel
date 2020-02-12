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
       
        $role = Roles::create(['name' => 'ADMIN_SYSTEME','guard_name'=>'web']);
        $role = Roles::create(['name' => 'ADMIN_SIMPLE','guard_name'=>'web']);
        $role = Roles::create(['name' => 'USER_SIMPLE','guard_name'=>'web']);


        
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
                        'vracinitialetr'=>0,
                        'vracEntranttr'=>0,
                        'vracSortanttr'=>0,
                        'vractr'=>0,
                        'pphomoinitialetr'=>0,
                        'pphomoEntranttr'=>0,
                        'pphomoSortantetr'=>0,
                        'pphomotr'=>0,
                        'ppcopoinitialetr'=>0,
                        'ppcopoEntranttr'=>0,
                        'ppcopoSortantetr'=>0,
                        'ppcopotr'=>0,
                        'pptr'=>0,
                        'petbouteilleinitialetr'=>0,
                        'petbouteilleEntranttr'=>0,
                        'petbouteilleSortantetr'=>0,
                        'petbouteilletr'=>0,
                        'petpreforminitialetr'=>0,
                        'petpreformEntranttr'=>0,
                        'petpreformSortantetr'=>0,
                        'petpreformtr'=>0,
                        'pettr'=>0,
                        'pehdcasierinitialetr'=>0,
                        'pehdcasierEntranttr'=>0,
                        'pehdcasierSortantetr'=>0,
                        'pehdcasiertr'=>0,
                        'pehdsoufflageinitialetr'=>0,
                        'pehdsoufflageEntranttr'=>0,
                        'pehdsoufflageSortantetr'=>0,
                        'pehdsoufflagetr'=>0,
                        'pehdtr'=>0,
                        'dechettr'=>0,
                        'date'=>'2015-02-03',
       
                        ]);
                   
    }
    
   
}
