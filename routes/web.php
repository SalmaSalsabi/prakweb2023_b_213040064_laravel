<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Salma",
        "email" => "salma.213040064@mail.unpas.ac.id",
        "image" => "salma.jpg",
    ]);
});



Route::get('/blog', function () { 
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, officiis. Provident magni rerum porro nisi consequatur quam voluptates ut possimus qui nostrum ad doloribus reprehenderit doloremque itaque, dicta consectetur laboriosam eius dolorem atque? Tempore, quibusdam! Commodi, recusandae. Libero inventore tempora modi vitae eius expedita iusto hic obcaecati. Accusamus saepe sed qui aliquam debitis unde tempore repudiandae velit asperiores nihil quaerat eum impedit hic non iste, temporibus esse nisi! Vel eligendi officia cumque molestias reiciendis dicta sed eum veniam consequatur? Quasi."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizka",
            "body" => " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere similique fugit consequuntur quis in eos perspiciatis minima. Cumque recusandae asperiores amet accusantium alias exercitationem natus. Temporibus alias deleniti incidunt inventore debitis reiciendis assumenda sed aspernatur perferendis labore amet quasi nobis accusamus voluptatem earum, vero repellat tempore qui eveniet provident nisi aliquid. Recusandae rerum aspernatur, est voluptas beatae quae nobis impedit soluta atque voluptatum tempore commodi ipsa molestias perspiciatis alias. Aperiam, vitae inventore, aliquid ab deleniti at animi ex magnam consequatur autem quibusdam necessitatibus recusandae atque alias nesciunt beatae asperiores nostrum voluptatum dicta sed exercitationem? Ea adipisci quas dolorem tenetur nihil!"
        ],
    ];
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});



// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, officiis. Provident magni rerum porro nisi consequatur quam voluptates ut possimus qui nostrum ad doloribus reprehenderit doloremque itaque, dicta consectetur laboriosam eius dolorem atque? Tempore, quibusdam! Commodi, recusandae. Libero inventore tempora modi vitae eius expedita iusto hic obcaecati. Accusamus saepe sed qui aliquam debitis unde tempore repudiandae velit asperiores nihil quaerat eum impedit hic non iste, temporibus esse nisi! Vel eligendi officia cumque molestias reiciendis dicta sed eum veniam consequatur? Quasi."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizka",
            "body" => " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere similique fugit consequuntur quis in eos perspiciatis minima. Cumque recusandae asperiores amet accusantium alias exercitationem natus. Temporibus alias deleniti incidunt inventore debitis reiciendis assumenda sed aspernatur perferendis labore amet quasi nobis accusamus voluptatem earum, vero repellat tempore qui eveniet provident nisi aliquid. Recusandae rerum aspernatur, est voluptas beatae quae nobis impedit soluta atque voluptatum tempore commodi ipsa molestias perspiciatis alias. Aperiam, vitae inventore, aliquid ab deleniti at animi ex magnam consequatur autem quibusdam necessitatibus recusandae atque alias nesciunt beatae asperiores nostrum voluptatum dicta sed exercitationem? Ea adipisci quas dolorem tenetur nihil!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
