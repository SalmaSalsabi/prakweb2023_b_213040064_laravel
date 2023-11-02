<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| be assigned to the "web" middleware gr    oup. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Salma",
        "email" => "salma.213040064@mail.unpas.ac.id",
        "image" => "salma.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint temporibus alias odio quod ipsam, quas dolores excepturi corrupti quos minus quidem voluptas blanditiis architecto iste sed asperiores accusamus, doloremque recusandae eos ea doloribus, consequuntur nobis fugit magni! Iusto ullam corporis nam ratione quia aliquid dolores vero pariatur distinctio cumque praesentium voluptatibus necessitatibus, reprehenderit repellendus ex enim! Quas minus inventore magnam hic dolor itaque, cum ipsam odit alias dignissimos recusandae explicabo labore reprehenderit quis? Neque iure impedit molestias cum rem eligendi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde ad beatae quibusdam fugiat magnam obcaecati dolor minima sunt deleniti quod, molestiae esse harum aliquam facere labore quas! Qui neque dicta culpa, explicabo commodi rem quos iusto delectus facilis fuga. Nam explicabo quaerat labore distinctio cupiditate ipsam molestias consequatur quam. Pariatur atque mollitia obcaecati delectus odio omnis provident voluptas perspiciatis, tempore inventore ipsa sit iusto eos velit repellat quaerat possimus, rem, officia illo excepturi praesentium facere. Non neque voluptatibus facere commodi, assumenda iste libero tempore repudiandae ad esse corrupti nostrum ipsum expedita facilis laudantium eius ipsa aliquam rem sunt. Odit?"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint temporibus alias odio quod ipsam, quas dolores excepturi corrupti quos minus quidem voluptas blanditiis architecto iste sed asperiores accusamus, doloremque recusandae eos ea doloribus, consequuntur nobis fugit magni! Iusto ullam corporis nam ratione quia aliquid dolores vero pariatur distinctio cumque praesentium voluptatibus necessitatibus, reprehenderit repellendus ex enim! Quas minus inventore magnam hic dolor itaque, cum ipsam odit alias dignissimos recusandae explicabo labore reprehenderit quis? Neque iure impedit molestias cum rem eligendi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde ad beatae quibusdam fugiat magnam obcaecati dolor minima sunt deleniti quod, molestiae esse harum aliquam facere labore quas! Qui neque dicta culpa, explicabo commodi rem quos iusto delectus facilis fuga. Nam explicabo quaerat labore distinctio cupiditate ipsam molestias consequatur quam. Pariatur atque mollitia obcaecati delectus odio omnis provident voluptas perspiciatis, tempore inventore ipsa sit iusto eos velit repellat quaerat possimus, rem, officia illo excepturi praesentium facere. Non neque voluptatibus facere commodi, assumenda iste libero tempore repudiandae ad esse corrupti nostrum ipsum expedita facilis laudantium eius ipsa aliquam rem sunt. Odit?"
        ],
    ];

    $new_post = [];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]); 
}); 
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);