<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();
        $data = [
            [
                'title' => 'Admin' // id = 1
            ],
            [
                'title' => 'User' // id = 2
            ]
        ];
        Role::insert($data);
    }
}
