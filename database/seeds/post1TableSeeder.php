<?php

use Illuminate\Database\Seeder;

class post1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
        ['titleee'=>'Tips Cepat Lulus','content'=>'lorem ipsum'],
        ['titleee'=>'Haruskah Menunda Kelulusan?','content'=>'lorem ipsum'],
        ['titleee'=>'Membangun Visi Misi ','content'=>'lorem ipsum'],
        ];

        DB::table('post1')->insert($a);    }
}
