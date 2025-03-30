<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eka Nazar Fajriansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aspernatur nulla incidunt ipsum, nisi consequuntur exercitationem
            dignissimos similique, non nesciunt saepe ad voluptatibus quas quidem
            maxime magnam earum alias quisquam temporibus sapiente. Natus qui ad
            alias odit rerum adipisci. Veritatis dolores odit repellat nesciunt,
            vero voluptates laboriosam id consectetur provident et nostrum voluptatum
            veniam perferendis culpa odio, ipsam molestias mollitia labore incidunt quae
            consequuntur sequi neque amet itaque. Officiis perspiciatis nostrum voluptate
            ratione molestias qui fugit ipsum, aliquam dolor, consequatur explicabo!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Artur Morgan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aspernatur nulla incidunt ipsum, nisi consequuntur exercitationem
            dignissimos similique, non nesciunt saepe ad voluptatibus quas quidem
            maxime magnam earum alias quisquam temporibus sapiente. Natus qui ad
            alias odit rerum adipisci. Veritatis dolores odit repellat nesciunt,
            vero voluptates laboriosam id consectetur provident et nostrum voluptatum
            veniam perferendis culpa odio, ipsam molestias mollitia labore incidunt quae
            consequuntur sequi neque amet itaque. Officiis perspiciatis nostrum voluptate
            ratione molestias qui fugit ipsum, aliquam dolor, consequatur explicabo!",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
