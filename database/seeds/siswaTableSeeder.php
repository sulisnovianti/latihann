<?php

use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $s=[
        ['Nama'=>'Sulis','Alamat'=>'Sukamenak','Jk'=>'Perempuan'],
        ['Nama'=>'maman','Alamat'=>'Rancamnayar','Jk'=>'Laki-laki'],
        ['Nama'=>'Mimin','Alamat'=>'Sukamenak','Jk'=>'Laki-laki'],
        ['Nama'=>'sasa','Alamat'=>'Cibadyut','Jk'=>'Perempuan'],
        ['Nama'=>'sisi','Alamat'=>'Sukamenak','Jk'=>'Perempuan'],
        ];

        DB::table('siswa')->insert($s);    
    }
}
