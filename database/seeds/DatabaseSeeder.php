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
        //Seeds que devem ser executados em production
        if (\App::environment('production')) {
            $this->call(EstadosTableSeeder::class);
            $this->call(CidadesSQLSeeder::class);
            $this->call(LaratrustSeeder::class);
            $this->call(AdminUserSeeder::class);
        } else {
            $this->call(EstadosTableSeeder::class);
            $this->call(CidadesSQLSeeder::class);
            $this->call(LaratrustSeeder::class);
            $this->call(AdminUserSeeder::class);
        }
    }
}
