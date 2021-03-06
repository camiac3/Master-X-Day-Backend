<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreatePassengers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Passenger::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        DB::table('passenger')->insert([
            'id'=> 1, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 2, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 3, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 4, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 5, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 6, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 7, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 8, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 9, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 10, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 11, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 12, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 13, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 14, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 15, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 16, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 17, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 18, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 19, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 20, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 21, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 22, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 23, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 24, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 25, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 26, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 27, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 28, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 29, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 30, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 31, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 32, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 33, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 34, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 35, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 36, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 37, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 38, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 39, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 40, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 41, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 42, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 43, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 44, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 45, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 46, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 47, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 48, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 49, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
        DB::table('passenger')->insert([
            'id'=> 50, 
            'full_name' => $this->randomName(),
            'email' => Str::random(10)."@gmail.com",
            'phone' => mt_rand(1000000000, 9999999999),
        ]);
    }
    public function randomName() {
    $firstname = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
    );

    $lastname = array(
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    );

    $name = $firstname[rand ( 0 , count($firstname) -1)];
    $name .= ' ';
    $name .= $lastname[rand ( 0 , count($lastname) -1)];

    return $name;
}
}
