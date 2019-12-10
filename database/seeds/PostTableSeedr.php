<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostTableSeedr extends Seeder
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
                'id' => 1,
                'title' => 'Có 600 triệu mua xe sedan cỡ B nào?',
                'summary' => 'Tầm tiền này, tôi phân vân giữa Toyota Vios, Hyundai Accent và Mazda2 đều số tự động.',
                'image_posts' => 'image_post_1574223157.jpeg',
                'content' => '',
                'user_id' => 1,
                'cate_id' => 1,
                'status' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Có 600 triệu mua xe sedan cỡ B nào?',
                'summary' => 'Tầm tiền này, tôi phân vân giữa Toyota Vios, Hyundai Accent và Mazda2 đều số tự động.',
                'image_posts' => 'image_post_1574223157.jpeg',
                'content' => '',
                'user_id' => 2,
                'cate_id' => 2,
                'status' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Có 600 triệu mua xe sedan cỡ B nào?',
                'summary' => 'Tầm tiền này, tôi phân vân giữa Toyota Vios, Hyundai Accent và Mazda2 đều số tự động.',
                'image_posts' => 'image_post_1574223157.jpeg',
                'content' => '',
                'user_id' => 3,
                'cate_id' => 4,
                'status' => 1,
            ],
            [
                'id' => 4,
                'title' => 'Có 600 triệu mua xe sedan cỡ B nào?',
                'summary' => 'Tầm tiền này, tôi phân vân giữa Toyota Vios, Hyundai Accent và Mazda2 đều số tự động.',
                'image_posts' => 'image_post_1574223157.jpeg',
                'content' => '',
                'user_id' => 3,
                'cate_id' => 5,
                'status' => 1,
            ],
        ]);
    }
}
