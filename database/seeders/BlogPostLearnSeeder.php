<?php

namespace Database\Seeders;

use App\Models\BlogPostLearn;
use Illuminate\Database\Seeder;

class BlogPostLearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogPostLearn = [

            [
                'title'=> 'tajuk satu',
                'body'=> 'body satu',
                'user_id'=> '123456789',
            ]
        ];

        for ($i=0; $i<count($blogPostLearn); $i++)
        {
            BlogPostLearn::create($blogPostLearn[$i]);
        } 
    }
}
