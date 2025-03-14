<?php

namespace Database\Seeders;

use App\Models\Artiste;
use App\Models\Piece;
use App\Models\Representation;
use App\Models\Salle;
use App\Models\Spectacle;
use App\Models\Ticket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
   
        User::factory(10)->create();
        Piece::factory(10)->create();
        
        Salle::factory(10)->create();
        Representation::factory(10)->create();
        
        Artiste::factory(10)->withRepresentations()->create(); // Crée 10 artistes avec des représentations associées
        Spectacle::factory(10)->withRepresentations()->create();
        Ticket::factory(10)->withRepresentations()->create();
        Piece::factory(10)->withSalles()->create();
        

        $this->call(RolePermissionSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
