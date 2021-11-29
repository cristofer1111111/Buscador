<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Search;
use Illuminate\Database\Seeder;

class SearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pato
      Images::create([
          'image'=>'pato.jpg'
      ]);

      Search::create([
        'name'=>'pato',
        'description'=>'este es un pato',
        'type'=>'herviboro',
        'images_id'=>1
      ]);

        //conejo
        Images::create([
            'image'=>'conejo.jpg'
        ]);
        Search::create([
          'name'=>'conejo',
          'description'=>'este es un conejo',
          'type'=>'herviboro',
          'images_id'=>2
        ]);

        //cocodrilo
        Images::create([
            'image'=>'cocodrilo.jpg'
        ]);

        Search::create([
          'name'=>'cocodrilo',
          'description'=>'este es un cocodrilo',
          'type'=>'carnivoro',
          'images_id'=>3
        ]);
    }
}
