<?php

namespace Database\Seeders;

use App\Models\Item;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<10;$i++){

           $faker=Factory::create();
           Item::create([
               'name'=>$faker->paragraph(2,5),
               'status'=>$faker->randomElement(["task","completed","deleted"]),
               'completed_at'=>$faker->date()
           ]);
       }
    }
}
