<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Generator as Faker;

use DB;
use Hash;
use Ramsey\Uuid\Uuid;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role
        Role::unguard();
        DB::table('roles')->insert([
            ['uuid' => '6fd098fe-0219-40aa-a596-a289f42d1e42', 'name' => 'Super Admin',
                'created_at'=>Carbon::now() ,'updated_at'=>Carbon::now(), 'deleted_at' => null
            ],
            ['uuid' => '40258b58-7dc3-45cf-a0e3-4a4664a8b96d', 'name' => 'Admin',
                'created_at'=>Carbon::now() ,'updated_at'=>Carbon::now(), 'deleted_at' => null
            ],
            ['uuid' => '9628b7b4-6aa0-43ca-a217-b157ceed66aa', 'name' => 'Manager',
            'created_at'=>Carbon::now() ,'updated_at'=>Carbon::now() ,'deleted_at' => null
            ],
        ]);
        Role::reguard();

        // Admin
        DB::table('admins')->truncate();
        Admin::unguard();
        DB::table('admins')->insert([
            ['uuid' => '8db73f78-6858-4032-84c8-27ef511ac021', 'firstname' => 'admin', 'lastname' => 'graphohunter', 'password' => Hash::make('admin123!'), 
                'email' => 'admin@mail.com', 'role_id' => '6fd098fe-0219-40aa-a596-a289f42d1e42', 
                'created_at'=>Carbon::now() ,'updated_at'=>Carbon::now()
            ],
        ]);
        Admin::reguard();
    }
}
