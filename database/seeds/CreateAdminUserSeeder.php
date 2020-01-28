<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Service;
use App\Roles;
use App\Fournisseur;
use App\DepotCollecte;




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

        $fournisseur = Fournisseur::create([
            'nomComplet' => 'Elhadji malick',
        	'avance' => 0,
            'contact' => '771327599',
            'region' =>'mbour',
            'departement' =>'mbour',
            'commune' =>'mbour',
            'quartier' =>'mbour',
            'restant_du' =>'0',
            'numero' =>'84521369750',

            ]);
            $depotCollecte = DepotCollecte::create([
                'quantiteinitiale' => 1,
                'depot' => 1,
                ]);

        
    }
}
