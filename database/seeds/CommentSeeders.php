<?php

use Illuminate\Database\Seeder;

class CommentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_comments')->insert([
            [
                "name"=>"Ankit P.",
                "email"=>"ankit@gmail.com",
                "comment"=>"This article was written very well. It helped me to understand the concept. 
                Thank you.",
                "post_id"=>1
            ],
            [
                "name"=>"Vijay D.",
                "email"=>"vijay@gmail.com",
                "comment"=>"Thanks for sharing this article. It was very interesting.",
                "post_id"=>1
            ],
            [
                "name"=>"Komal P.",
                "email"=>"komal@gmail.com",
                "comment"=>"Hey, Thanks for sharing such knowledgable information.",
                "post_id"=>2
            ],
            [
                "name"=>"Kajal S.",
                "email"=>"kajal@gmail.com",
                "comment"=>"Adding Advantages and Disadvantes will make a good point. Thanks BTW.",
                "post_id"=>2
            ],
            
        ]);
    }
}
