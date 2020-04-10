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
        for ($i = 0; $i < 10; $i += 1) {
            $user = User::fake();
            $user->save();
        }
        // $this->call(UsersTableSeeder::class);
    }
}
