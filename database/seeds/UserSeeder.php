<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'mawjaProduction',
            'email' => 'info@mawja.com',
            'password' => Hash::make('mawjaProduction2020')
        ]);
    }
}
