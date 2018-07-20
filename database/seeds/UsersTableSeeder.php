<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            ['name' => 'Martin Urias', 'email' => 'urias.martin.soporte@gmail.com', 'password' => bcrypt('P455w0rd!'), 'puesto' => 'Programador', 'nivel' => '0'],
            ['name' => 'Ysabel Urias', 'email' => 'ranchoavicolaelplatanito@hotmail.com', 'password' => bcrypt('chabelo71'), 'puesto' => 'Propietario', 'nivel' => '1'],
        ];
        User::truncate();
        foreach ($records as $user) {
            User::create($user);
        }
    }
}
