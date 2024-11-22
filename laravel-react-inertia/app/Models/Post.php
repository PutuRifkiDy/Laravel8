<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
            [
                "title" => "Blog Sandika",
                "slug" => "blog-pertama",
                "description" => "Ini adalah blog pertama saya dan saya baru membuat suatu blog yang cantik",
            ],
            [
                "title" => "Blog Evan",
                "slug" => "blog-kedua",
                "description" => "Ini adalah blog kedua saya dan saya baru membuat suatu blog yang cantik",
            ]
        ];

        public static function getBlogPosts()
        {
            return collect(self::$blog_posts);
        }


        public static function find($slug)
        {
            $posts = static::getBlogPosts();
            // $blog = [];
            // foreach($posts as $p){
            //     if($p["slug"] === $slug) {
            //         $blog = $p;
            //     }
            // }

            return $posts->firstWhere("slug", $slug);
        }
}
