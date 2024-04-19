<?php

namespace Database\Seeders;

use App\Helpers\Server;
use App\Models\ActivityType;
use App\Models\MenuModule;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AclMenuModuleSeeder extends Seeder
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
                'name' => 'Manage Role',
                'view_type' => 1,
            ],
            [
                'name' => 'Manage User',
                'view_type' => 1,
            ]
        ];

        MenuModule::insert($data);
    }
}
