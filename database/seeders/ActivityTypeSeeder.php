<?php

namespace Database\Seeders;

use App\Helpers\Server;
use App\Models\ActivityType;
use App\Models\Role;
use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
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
                'activity_type_name' => 'Admin Login',
            ],
            [
                'activity_type_name' => 'Manage User',
            ],
            [
                'activity_type_name' => 'Manage Role',
            ],
        ];

        ActivityType::insert($data);
    }
}
