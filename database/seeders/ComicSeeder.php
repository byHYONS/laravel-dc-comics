<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');

        DB::table('comics')->truncate();

        foreach($data as $comics_db) {
            $comic = new Comic();

            $comic->title = $comics_db['title'];
            $comic->description = $comics_db['description'];
            $comic->thumb = $comics_db['thumb'];
            $comic->price = $comics_db['price'];
            $comic->series = $comics_db['series'];
            $comic->sale_date = $comics_db['sale_date'];
            $comic->type = $comics_db['type'];
            $comic->artists = implode(', ', $comics_db['artists']);
            $comic->writers = implode(', ', $comics_db['writers']);

            $comic->save();

        }


    }
}
