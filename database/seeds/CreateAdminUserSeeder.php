<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Service;
use App\Roles;
use App\Fournisseur;
use App\DepotCollecte;
use App\TypeCollecteur;
use App\CollectEntreprise;



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
            'quantiteinitiale' => 0,
            'quantiteEntrante' => 0,
            'quantiteSortante' => 0,
            'depot' => 0,
            'ppcopo'=>0,
            'pphomo'=>0,
            'pet'=>0,
            'pp'=>0,
            'pehd'=>0,
            'dechet'=>0,
            'date'=>'2015-02-03',
            'total'=>0,

            ]);

            $typeCollecteur = TypeCollecteur::create([
                'libelle' => 'collecteur_agree',
                ]);

             $typeCollecteur = TypeCollecteur::create([
                    'libelle' => 'collecteur_recuplast',
                    ]);

            $typeCollecteur = TypeCollecteur::create([
                    'libelle' => 'divers',
                 ]);
            $typeCollecteur = TypeCollecteur::create([
                    'libelle' => 'collecteur_entreprise',
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
            'numero' =>'845213',
            'type' =>'1',
            ]);
            $fournisseur = Fournisseur::create([
                'nomComplet' => 'DIVERS',
                'avance' => 0,
                'contact' => '',
                'region' =>'',
                'departement' =>'',
                'commune' =>'',
                'quartier' =>'',
                'restant_du' =>'0',
                'numero' =>'631254',
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
                    'prixpehd'=>0,
                    'prixpet'=>0,
                    'prixpehd'=>0,
                    'prixpp'=>0,
                    'pehd'=>0,
                    'dechet'=>0,
                    'date_collecte'=>'2015-02-03',
                    'numerobons'=>'123456',
                    'totaltri'=>0,
        
                    ]);
    }
    
   
}
