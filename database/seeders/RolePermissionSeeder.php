<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Liste des permissions
        $permissions = [

            // 'create users',
            // 'edit users',
            // 'delete users',
            // 'view users',
            // 'assign roles',
            // 'remove roles',
            // 'create posts',
            // 'edit posts',
            // 'delete posts',
            // 'publish posts',
            // 'view posts',
            // 'create categories',
            // 'edit categories',
            // 'delete categories',
            // 'view categories',
            // 'manage settings',
            // 'access admin panel',
            // 'approve comments',
            // 'reject comments',
            // 'view reports',

            // Role : Admin - Permission : CREAD - Entite : Users
            // ----------------------------------------------------------------
            'admin-index-users',
            'admin-create-users',
            'admin-store-users',
            'admin-show-users',
            'admin-edit-users',
            'admin-delete-users',
            'admin-block-users',
            'admin-unblock-users',
            
            // Role : Admin - Permission : CREAD - Entite : Roles
            // ----------------------------------------------------------------
            'admin-index-roles',
            'admin-create-roles',
            'admin-store-roles',
            'admin-show-roles',
            'admin-edit-roles',
            'admin-assign-roles',
            'admin-delete-roles',

            'admin-assign-roles',
            'admin-remove-roles',
        ];

        // Créer les permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Liste des rôles et leurs permissions associées
        $roles = [

            'Administrateur' => $permissions, // L'admin a toutes les permissions
            'Chef de service commercial' => [
                'admin-index-users',
                'admin-index-users',
                'admin-index-users',
                'admin-index-users',
                'admin-index-users',
                'admin-index-users',
            ],
            'Chef de service production' => [
                'admin-index-users',
                'admin-index-users',
            ],
        ];

        // Créer les rôles et assigner les permissions
        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($rolePermissions);
        }
    }
}
