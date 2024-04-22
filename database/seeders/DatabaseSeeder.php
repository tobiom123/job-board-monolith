<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();
        User::factory(50)->unverified()->create();

        Job::factory(100)->create();
        Tag::factory(7)->create();

        $tags = Tag::all();
        Job::all()->each(function ($job) use ($tags) {
            $randomTags = $tags->random(rand(1, $tags->count()))->pluck('id');
            $job->tags()->attach($randomTags);
        });
    }
}
