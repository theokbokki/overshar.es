<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->create([
            'content' => <<<HEREDOC
            Welcome to overshar.es. This is the place where I say whatever comes through my brain wether it makes sense or not. It’s weird, it’s raw and can be cringe at times. It’s a window to my mind that I’m inviting you to look through.

            If you have thoughts, opinions or simply want to say hi, do it at [theo@overshar.es](mailto:theo@overshar.es)
            HEREDOC,
            'color' => '0, 0%, 0%',
        ]);

        if(env('APP_ENV') === 'local') {
            Post::factory(20)->create();
        }
    }
}
