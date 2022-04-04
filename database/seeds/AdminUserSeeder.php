<?php

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = factory(\App\Models\Usuario::class)->create([
            'email' => env('ADMIN_EMAIL', 'admin@grupotesseract.com.br'),
            'password' => bcrypt(env('ADMIN_PASSWORD', 'admin')),
            'nome' => 'Admin Tesseract',
            'cidade_id' => Cidade::where('nome', 'Bauru')->first()->id,
        ]);
        $userAdmin->attachRole(\App\Models\Role::ROLE_ADMIN);
    }
}
