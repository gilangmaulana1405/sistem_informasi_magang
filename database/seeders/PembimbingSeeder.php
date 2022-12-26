<?php

namespace Database\Seeders;

use App\Models\Pembimbing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PembimbingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i<10; $i++){
            Pembimbing::create([
                'nidn' => $faker->numerify('1############'),
                'nama' => $faker->firstName. " ".$faker->lastName,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address(),
                'ttl' => $faker->date(),
            ]);
        }
    }
}
