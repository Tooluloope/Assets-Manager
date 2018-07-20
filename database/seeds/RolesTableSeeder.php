<?php
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'User has access to all system functionality'
            ],
            [
                'name' => 'manager',
                'display_name' => 'Manager',
                'description' => 'User can create create data in the system'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
