<?php

use Illuminate\Database\Seeder;

/**
 * Class CidadesSQLSeeder.
 *
 * @see Seeder
 * @see /storage/bd_dumps/cidades.sql
 */
class CidadesSQLSeeder extends Seeder
{
    /**
     * Insere as cidades no banco a partir do arquivo .sql.
     *
     * @return void
     */
    public function run()
    {
        \Eloquent::unguard();
        $path = storage_path().'/bd_dumps/cidades.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Cidades seeded!');
    }
}
