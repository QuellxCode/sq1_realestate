<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Eloquent\Model;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
            ]
        ]);
        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'User',
            'slug' => 'user',
            'permissions' => [
            ]

        ]);
        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Employee',
            'slug' => 'employee',
            'permissions' => [
            ]

        ]);
        Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Police',
            'slug' => 'police',
            'permissions' => [
            ]

        ]);


        // Create an admin user
        $user = Sentinel::create(
            [
                'email' => 'admin@gmail.com',
                'password' => 'test',
                'first_name' => 'Admin',
                'last_name' => 'User',
                'status' => 1,
            ]
        );
        // Activate the admin directly
        $activation = Activation::create($user);
        Activation::complete($user, $activation->code);

        // Find the group using the group id
        $adminGroup = Sentinel::findRoleBySlug('admin');

        // Assign the group to the user
        $adminGroup->users()->attach($user);
    }
}
