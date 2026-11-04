<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dragon;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $d = new Dragon;
        $d->name = 'Astalos_Prince_Orage';
        $d->type = 'technique';
        $d->level = 5;
        $d->height = 3.08;
        $d->born_at = '2026-01-03';
        $d->is_in_team = false;
        $d->image_path = 'https://i.redd.it/nqikxlsf9sj71.png';
        $d->save();
    }
}
