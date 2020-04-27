<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i += 1) {
            $user = User::fake();
            $user->save();
            $nb = rand(0, 10);
            for ($j = 0; $j < $nb; $j += 1) {
                $post = Post::fake($user->id);
                $post->save();
            }
        }
        // $this->call(UsersTableSeeder::class);
    }
}
