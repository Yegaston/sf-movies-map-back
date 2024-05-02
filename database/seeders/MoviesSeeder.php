<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load assets/sf_movies_locations.csv file
        $csvFile = fopen(base_path('assets/sf_movies_locations.csv'), 'r');
        $header = fgetcsv($csvFile);
        $movies = [];
        while (($row = fgetcsv($csvFile)) !== false) {
            $movies[] = array_combine($header, $row);
        }
        fclose($csvFile);
        // Insert movies into the database

        Movies::insert($movies);
    }
}
