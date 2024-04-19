<?php

namespace Database\Seeders;

use App\Helpers\Server;
use App\Models\ActivityType;
use App\Models\Menu;
use App\Models\MenuModule;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AclMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();

        $data = [
            [
                'acl_menu_module_id' => 1,
                'menu_name' => 'List',
                'url' => 'role_list',
            ],
            [
                'acl_menu_module_id' => 1,
                'menu_name' => 'Create',
                'url' => 'role_create',
            ],
            [
                'acl_menu_module_id' => 1,
                'menu_name' => 'Update',
                'url' => 'role_update',
            ],
            [
                'acl_menu_module_id' => 1,
                'menu_name' => 'Delete',
                'url' => 'role_delete',
            ],
            [
                'acl_menu_module_id' => 1,
                'menu_name' => 'Status',
                'url' => 'role_status',
            ],
            [
                'acl_menu_module_id' => 2,
                'menu_name' => 'List',
                'url' => 'user_list',
            ],
            [
                'acl_menu_module_id' => 2,
                'menu_name' => 'Create',
                'url' => 'user_create',
            ],
            [
                'acl_menu_module_id' => 2,
                'menu_name' => 'Update',
                'url' => 'user_update',
            ],
            [
                'acl_menu_module_id' => 2,
                'menu_name' => 'Delete',
                'url' => 'user_delete',
            ],
            [
                'acl_menu_module_id' => 2,
                'menu_name' => 'Status',
                'url' => 'user_status',
            ]
        ];

        Menu::insert($data);
    }
}
