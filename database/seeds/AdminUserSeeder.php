<?php

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
        $userAdmin = factory(\App\Models\Usuario::class)->create(
            [
            'email' => env('ADMIN_EMAIL', 'admin@tesseract.com'),
            'password' => bcrypt(env('ADMIN_PASSWORD', '12344321')),
            'nome' => 'Admin Tesseract'
            ]
        );
    }
}
