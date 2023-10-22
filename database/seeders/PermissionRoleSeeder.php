<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::all()->pluck('id'); // [1,2,3...]
        $roleAdmin = 1;
        $user = User::where('name', 'admin')->first();

        foreach ($permissions as $permission) {
            DB::table('permission_role')->insert([
                'role_id' => $roleAdmin,
                'permission_id' => $permission
            ]);
        }

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => $user->id
        ]);
    }
}
