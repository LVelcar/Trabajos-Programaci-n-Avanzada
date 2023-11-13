<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carro = new Carro();
        $carro->name = 'Fiesta';
        $carro->description = 'Es un auto de la marca Ford';
        $carro->year = "2015";
        $carro->save();   

        $carro2 = new Carro();
        $carro2->name = 'Focus';
        $carro2->description = 'Es un auto de la marca Ford';
        $carro2->year = "2018";
        $carro2->save();   

        $carro3 = new Carro();
        $carro3->name = 'Onix';
        $carro3->description = 'Es un auto de la marca Chevrolet';
        $carro3->year = "2022";
        $carro3->save(); 
    }
}
