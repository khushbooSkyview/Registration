<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \App\Models\User::factory(10)->create();

        
        DB::table('users')->insert([
                  'first_name' => 'khushi',
                  'last_name' => 'maurya',
                  'email' => 'khushi123@gmail.com',
                  'mobile'=> '6845943845',
                  'gender' => 'M',           
                  'password' => Hash::make('password'),
                  'annualIncome'=> '5000000',
                  'occupation' => 'private',
                  'manglick' => 'no',
                  'familyType' => 'joint',
                  'partIncome'=> '60',
                  'partOccupation' => 'private',
                  'partFamily' => 'joint',
                  'partManglick'=> 'no',
                  'remember_token' => Str::random(10),
            ]);
            
    }   
    
}
