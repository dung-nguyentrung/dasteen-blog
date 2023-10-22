<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::truncate();
        $data = [
            [
                'title' => 'user_access'
            ], [
                'title' => 'user_create'
            ], [
                'title' => 'user_show'
            ], [
                'title' => 'user_edit'
            ], [
                'title' => 'user_delete'
            ], [
                'title' => 'permission_access'
            ], [
                'title' => 'permission_create'
            ], [
                'title' => 'permission_show'
            ], [
                'title' => 'permission_edit'
            ], [
                'title' => 'permission_delete'
            ], [
                'title' => 'role_access'
            ], [
                'title' => 'role_create'
            ], [
                'title' => 'role_show'
            ], [
                'title' => 'role_edit'
            ], [
                'title' => 'role_delete'
            ], [
                'title' => 'category_access'
            ], [
                'title' => 'category_create'
            ], [
                'title' => 'category_show'
            ], [
                'title' => 'category_edit'
            ], [
                'title' => 'category_delete'
            ], [
                'title' => 'tag_access'
            ], [
                'title' => 'tag_create'
            ], [
                'title' => 'tag_show'
            ], [
                'title' => 'tag_edit'
            ], [
                'title' => 'tag_delete'
            ], [
                'title' => 'post_access'
            ], [
                'title' => 'post_create'
            ], [
                'title' => 'post_show'
            ], [
                'title' => 'post_edit'
            ], [
                'title' => 'post_delete'
            ]
        ];
        Permission::insert($data);
    }
}
