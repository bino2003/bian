<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(1)->create();
       for($i =1; $i==1;$i++){
            \App\Models\User::create([
'type'=>'1',
'name'=>'bian',
'email'=>'bn3@smail.ucas.edu.ps',
'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
'phone'=>'0598681854',
'budget'=>1000,
]);
        }
    }
}
