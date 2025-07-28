<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert( array(
            array(
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 1,
                'nama_perusahaan' => 'umt',
                'phone' => '082184617900',
                'alamat_perusahaan' => 'jakarta',
                'kode_akses' => 'UMT1234'
            ),
            array(
                'name' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 2,
                'nama_perusahaan' => 'jaya',
                'phone' => '089765432132',
                'alamat_perusahaan' => 'jambi',
                'kode_akses' => 'UMT5678'
            ),
        ));
    }
}
