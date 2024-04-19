<?php

namespace Database\Seeders;

use App\Helpers\Server;
use App\Models\ActivityPortal;
use App\Models\ActivityType;
use App\Models\Role;
use Illuminate\Database\Seeder;

class ActivityPortalSeeder extends Seeder
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
                'portal_name' => 'Admin',
                'created_on' => Server::getDateTime(),
            ],
        ];

        ActivityPortal::insert($data);
    }
}
