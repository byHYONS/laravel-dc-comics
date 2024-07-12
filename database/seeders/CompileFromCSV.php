<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompileFromCSV extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //? esempio per importare dati da file csv, bisogna campbiare il nome della nuova istanza in base al nome del Model:
        // $file = __DIR__ . '/csv/trains.csv';

        // $data = Helpers::getCSV($file);

        // foreach ($data as $train_data) {
        //     $train = new Train();
        //     foreach ($train_data as $key => $value) {
        //         $train[$key] = $value;
        //     }
        //     $train->save();
        // }
    }
}
