<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notes = [];

        for ($i=0; $i < 10; $i++) { 
        	$notes[] = [
        		'title' => 'note ' . ($i + 1),
        		'content' => 'note ' . ($i + 1) . ' content',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	];
        }

        \App\Models\Note::insert($notes);
    }
}
