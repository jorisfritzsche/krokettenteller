<?php

use Illuminate\Database\Seeder;

class KrokettenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counters')->insert([
            'type' => 'Normaal',
            'image' => 'http://zeldenrijksnacks.nl/wp-content/uploads/2013/07/kroket_rundvlees_1.jpg',
            'count' => 1,
        ]);
        DB::table('counters')->insert([
            'type' => 'Saté',
            'image' => 'http://zeldenrijksnacks.nl/wp-content/uploads/2013/07/kroket_sate_1.jpg',
            'count' => 1,
        ]);
        DB::table('counters')->insert([
            'type' => 'Vega',
            'image' => 'http://zeldenrijksnacks.nl/wp-content/uploads/2013/07/kroket_groente_1.jpg',
            'count' => 0,
        ]);
    }
}
