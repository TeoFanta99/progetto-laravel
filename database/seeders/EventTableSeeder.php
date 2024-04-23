<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonEvents = file_get_contents(public_path('events.json'));
        $eventsDecoded = json_decode($jsonEvents, true);

        foreach ($eventsDecoded as $event) {

            $newEvent = new Event();
            $newEvent->name = $event['name'];
            $newEvent->date = $event['date'];
            $newEvent->save();
            
        }
    }
}
