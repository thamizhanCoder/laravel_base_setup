<?php

namespace Database\Seeders;

use App\Helpers\GlobalHelper;
use App\Helpers\JwtHelper;
use App\Helpers\Server;
use App\Models\Category;
use App\Models\Role;
use App\Models\UserModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AclUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UserModel::truncate();

        UserModel::create([
            'acl_role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@technogenesis.in',
            'password' => md5('12345678'),
            'status' => '1',
            'created_on' => Server::getDateTime()
        ]);

    }
}   
