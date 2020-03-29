<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeders::class);
        $this->call(PostSeeders::class);
        $this->call(CommentSeeders::class);        
    }
}
