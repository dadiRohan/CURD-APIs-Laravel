<?php

use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate if exist
        Note::truncate();

        //make fakter 
        $faker = \Faker\Factory::create();

        //insert Random Records
        for($i=0; $i<200; $i++){
        	Note::create([
        		'subject' => $faker->sentence(),
        		'body' => $faker->paragraph(),
        	]);
        }	
    }
}
