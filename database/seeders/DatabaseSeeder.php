<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Reviews;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        Book::factory(30)->create()->each(function($book){
            $numReviews = random_int(5,30);
            Reviews::factory()->count($numReviews)
                ->good()
                ->for($book)
                ->create();
        });

        Book::factory(35)->create()->each(function($book){
            $numReviews = random_int(5,30);
            Reviews::factory()->count($numReviews)
                ->bad()
                ->for($book)
                ->create();
        });

        Book::factory(35)->create()->each(function($book){
            $numReviews = random_int(5,30);
            Reviews::factory()->count($numReviews)
                ->average()
                ->for($book)
                ->create();
        });
        
    }
}
