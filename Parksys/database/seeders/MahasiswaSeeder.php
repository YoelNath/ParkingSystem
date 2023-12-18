<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        for($i = 0; $i<50; $i++){
            \DB::table('mahasiswa')->insert([
                // 'jurusan_id' => $faker -> numberBetween(1,3),
                // 'kampus_binus_id' => $faker -> numberBetween(1,2),
                'nim' => $faker -> numberBetween(11111,99999),
                'nama' => $faker -> name,
                'alamat' => $faker -> address
            ]);
        }
        }
    }

