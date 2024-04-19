<?php

namespace Database\Seeders;

use App\Helpers\Server;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AclRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();

        Role::create([
            'role_name' => 'Admin',
            'status' => '1',
            'created_at' => Server::getDateTime()
        ]);
    }
}
