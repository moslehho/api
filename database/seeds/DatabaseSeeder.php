<?php

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

        $user = factory(App\User::class)->create();
        factory(\App\Amooozesh::class, 10)->create(['user_id' => $user->id]);
    }
}
