<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();

        Event::create([
            'title' => 'Laravel Meetup',
            'description' => 'A meetup for Laravel enthusiasts.',
            'date' => Carbon::now()->addDays(7),
            'location' => 'Bucharest',
        ]);

        Event::create([
            'title' => 'Web Dev Conference',
            'description' => 'Annual web development conference.',
            'date' => Carbon::now()->addWeeks(3),
            'location' => 'Cluj',
        ]);

        Event::create([
            'title' => 'Community Hackathon',
            'description' => '48-hour hackathon for students.',
            'date' => Carbon::now()->addMonths(1),
            'location' => 'Iasi',
        ]);
    }
}
