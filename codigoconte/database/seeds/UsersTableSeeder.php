<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\apiPoseidon\Models\User::class, 1)->create([
            'email' => 'agn@codemaker.com'
        ]);

        factory(\apiPoseidon\Models\User::class,20)->create();
    }
}
