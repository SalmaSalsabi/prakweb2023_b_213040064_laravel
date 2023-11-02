<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint temporibus alias odio quod ipsam, quas dolores excepturi corrupti quos minus quidem voluptas blanditiis architecto iste sed asperiores accusamus, doloremque recusandae eos ea doloribus, consequuntur nobis fugit magni! Iusto ullam corporis nam ratione quia aliquid dolores vero pariatur distinctio cumque praesentium voluptatibus necessitatibus, reprehenderit repellendus ex enim! Quas minus inventore magnam hic dolor itaque, cum ipsam odit alias dignissimos recusandae explicabo labore reprehenderit quis? Neque iure impedit molestias cum rem eligendi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde ad beatae quibusdam fugiat magnam obcaecati dolor minima sunt deleniti quod, molestiae esse harum aliquam facere labore quas! Qui neque dicta culpa, explicabo commodi rem quos iusto delectus facilis fuga. Nam explicabo quaerat labore distinctio cupiditate ipsam molestias consequatur quam. Pariatur atque mollitia obcaecati delectus odio omnis provident voluptas perspiciatis, tempore inventore ipsa sit iusto eos velit repellat quaerat possimus, rem, officia illo excepturi praesentium facere. Non neque voluptatibus facere commodi, assumenda iste libero tempore repudiandae ad esse corrupti nostrum ipsum expedita facilis laudantium eius ipsa aliquam rem sunt. Odit?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    } 

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}