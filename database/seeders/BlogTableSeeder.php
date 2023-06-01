<?php

namespace Database\Seeders;
use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
               'title'=>' Life in the Himalayas',
               'type'=>'Travel, Lifestyle',

               'a_content'=>'Considered the home ground of Mt. Everest, Lukla, situated in Solukhumbu, is one of the most visited places enroute to the worlds highest peak. It is impossible to reach the Everest Base Camp without travelling through the small town of Lukla. Another popular tourist spot in the area is Namche Bazar which lies just a little ahead of Lukla',

               'author'=>'Anesh pant'

            ],
            [
                'title'=>' science and technology',
                'type'=>'Travel, Lifestyle',

                'a_content'=>'Considered the home ground of Mt. Everest, Lukla, situated in Solukhumbu, is one of the most visited places enroute to the worlds highest peak. It is impossible to reach the Everest Base Camp without travelling through the small town of Lukla. Another popular tourist spot in the area is Namche Bazar which lies just a little ahead of Lukla',

                'author'=>'Anesh pant'
            ]


        ];
            Blog::truncate();
            foreach($blogs as $blog){
                Blog::create($blog);
            }
    }
}
