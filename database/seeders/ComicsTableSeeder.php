<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // recupero il contenuto del file comic
        $comics = config('comic');
        // ciclo il contenuto assegnato a comics
        foreach($comics as $comic){
            $new_comic = new Comics();
            // popolo la tabella
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->artists = jason_encode($comic['artists']);
            $new_comic->writers = jason_encode($comic['writers']);

            // salvo new_comic nel db
            $new_comic->save();
        }
    }
}
