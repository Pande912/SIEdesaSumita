<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
          'nama' => 'Pande Nyoman Sutama Arta',
          'username' => 'Sutama123',
          'password' => Hash::make('password'),
          'id_banjar' => '1',
          'alamat' => 'Br. Pande, Sumita, Gianyar',
          'no_HP' => '082146792030',
          'jenis_kelamin' => 'Laki-laki',
          'role' => 'administrator', 
        ]);
        DB::table('users')->insert([
        'nama' => 'I Wayan Adi Guna',
        'username' => 'Adi123',
        'password' => Hash::make('password'),
        'id_banjar' => '2',
        'alamat' => 'Br. Tengah, Sumita, Gianyar',
        'no_HP' => '08145446677',
        'jenis_kelamin' => 'Laki-laki',
        'role' => 'kelian_banjar', 
      ]);
        DB::table('users')->insert([
            'nama' => 'I Made Bawa',
            'username' => 'madebawa123',
            'password' => Hash::make('password'),
            'id_banjar' => '1',
            'alamat' => 'Br. Pande, Sumita, Gianyar',
            'no_HP' => '081333232442',
            'jenis_kelamin' => 'Laki-laki',
            'role' => 'kades', 
        ]);
      }
}
