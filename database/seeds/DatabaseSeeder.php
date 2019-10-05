<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Persona;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = factory(App\User::class,10)->create()->each(function ($user){
            $user->persona()->save(factory(App\Persona::class)->make());
        });
    }
}
