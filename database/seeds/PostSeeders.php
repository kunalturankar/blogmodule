<?php

use Illuminate\Database\Seeder;

class PostSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                "post_title"=>"Introduction to PHP",
                "post_description"=>"PHP is a popular general-purpose scripting language that is especially suited to web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.",
                "user_id"=>1,
            ],
            [
                "post_title"=>"Instroduction to CSS",
                "post_description"=>"Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.",
                "user_id"=>2,
            ],
            [
                "post_title"=>"Instroduction to JavaScript",
                "post_description"=>"JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.",
                "user_id"=>3,
            ],
            [
                "post_title"=>"Instroduction to Laravel",
                "post_description"=>"Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.",
                "user_id"=>4,
            ],

        ]);
    }
}
