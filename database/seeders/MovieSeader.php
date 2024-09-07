<?php

namespace Database\Seeders;

use App\Models\Movie_statuses;
use App\MovieStatusesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movieStatuses = MovieStatusesEnum::cases();
        foreach($movieStatuses as $status){
            Movie_statuses::create([
                'name' =>$status->value
            ]);
        }
    }
}
