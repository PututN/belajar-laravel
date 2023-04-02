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
    return view("home", [
        "title" => "Home",
    ]);
});
Route::get('/blog', function () {
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nardianto",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod eius facilis repellat adipisci, molestiae, porro id reiciendis consequatur vero ipsam temporibus harum nemo debitis quam illum quis voluptatibus excepturi aspernatur!
            Veritatis obcaecati nihil similique, magnam, tempore placeat doloribus non vitae veniam ipsa maxime laudantium quisquam molestiae et quod dignissimos quo pariatur dicta odit eos ex illum? Natus a illo voluptate?
            Praesentium incidunt tempore, culpa dolore rem, ea sit ipsam eum animi nisi, doloremque corrupti ratione aut reiciendis error neque deleniti nam minus odio pariatur architecto cupiditate asperiores libero quis? Repellat!
            Eligendi, hic beatae. Ipsum libero necessitatibus rem cupiditate dignissimos aperiam amet blanditiis maxime debitis omnis. Eos delectus, vero libero sapiente beatae cumque ipsum consectetur nihil dolorum numquam consequuntur? Aliquid, nam?
            Neque nisi culpa eaque exercitationem porro esse nostrum repudiandae aperiam pariatur architecto doloremque vitae veniam maiores quia cumque, aut laborum, ut ad earum ex consequuntur provident. Laudantium maxime quisquam repellat.
            Quidem error in facilis ducimus a non quos ipsum ipsam, dolorem optio deleniti delectus nulla. Voluptatem earum deleniti, adipisci facere eius doloremque explicabo, alias nostrum perferendis, accusamus sint officiis ullam?
            Commodi numquam vero, laborum eaque animi, facilis assumenda ratione laudantium dolor nihil similique aperiam impedit nobis laboriosam atque quis quo quos saepe vel fugiat, aspernatur fuga exercitationem iure! Impedit, atque!
            Omnis autem nobis, quibusdam reprehenderit molestias id quaerat aliquid soluta voluptate nulla, culpa nam! Velit omnis itaque necessitatibus, quasi id cumque molestiae? Pariatur, quae tenetur nihil autem reprehenderit cupiditate officia."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Laksono",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod eius facilis repellat adipisci, molestiae, porro id reiciendis consequatur vero ipsam temporibus harum nemo debitis quam illum quis voluptatibus excepturi aspernatur!
            Veritatis obcaecati nihil similique, magnam, tempore placeat doloribus non vitae veniam ipsa maxime laudantium quisquam molestiae et quod dignissimos quo pariatur dicta odit eos ex illum? Natus a illo voluptate?
            Praesentium incidunt tempore, culpa dolore rem, ea sit ipsam eum animi nisi, doloremque corrupti ratione aut reiciendis error neque deleniti nam minus odio pariatur architecto cupiditate asperiores libero quis? Repellat!
            Eligendi, hic beatae. Ipsum libero necessitatibus rem cupiditate dignissimos aperiam amet blanditiis maxime debitis omnis. Eos delectus, vero libero sapiente beatae cumque ipsum consectetur nihil dolorum numquam consequuntur? Aliquid, nam?
            Neque nisi culpa eaque exercitationem porro esse nostrum repudiandae aperiam pariatur architecto doloremque vitae veniam maiores quia cumque, aut laborum, ut ad earum ex consequuntur provident. Laudantium maxime quisquam repellat.
            Quidem error in facilis ducimus a non quos ipsum ipsam, dolorem optio deleniti delectus nulla. Voluptatem earum deleniti, adipisci facere eius doloremque explicabo, alias nostrum perferendis, accusamus sint officiis ullam?
            Commodi numquam vero, laborum eaque animi, facilis assumenda ratione laudantium dolor nihil similique aperiam impedit nobis laboriosam atque quis quo quos saepe vel fugiat, aspernatur fuga exercitationem iure! Impedit, atque!
            Omnis autem nobis, quibusdam reprehenderit molestias id quaerat aliquid soluta voluptate nulla, culpa nam! Velit omnis itaque necessitatibus, quasi id cumque molestiae? Pariatur, quae tenetur nihil autem reprehenderit cupiditate officia."
        ],
        ];
    return view("blog", [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

//halaman single blog
Route::get('/blog/{slug}', function($slug) {
        $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nardianto",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod eius facilis repellat adipisci, molestiae, porro id reiciendis consequatur vero ipsam temporibus harum nemo debitis quam illum quis voluptatibus excepturi aspernatur!
            Veritatis obcaecati nihil similique, magnam, tempore placeat doloribus non vitae veniam ipsa maxime laudantium quisquam molestiae et quod dignissimos quo pariatur dicta odit eos ex illum? Natus a illo voluptate?
            Praesentium incidunt tempore, culpa dolore rem, ea sit ipsam eum animi nisi, doloremque corrupti ratione aut reiciendis error neque deleniti nam minus odio pariatur architecto cupiditate asperiores libero quis? Repellat!
            Eligendi, hic beatae. Ipsum libero necessitatibus rem cupiditate dignissimos aperiam amet blanditiis maxime debitis omnis. Eos delectus, vero libero sapiente beatae cumque ipsum consectetur nihil dolorum numquam consequuntur? Aliquid, nam?
            Neque nisi culpa eaque exercitationem porro esse nostrum repudiandae aperiam pariatur architecto doloremque vitae veniam maiores quia cumque, aut laborum, ut ad earum ex consequuntur provident. Laudantium maxime quisquam repellat.
            Quidem error in facilis ducimus a non quos ipsum ipsam, dolorem optio deleniti delectus nulla. Voluptatem earum deleniti, adipisci facere eius doloremque explicabo, alias nostrum perferendis, accusamus sint officiis ullam?
            Commodi numquam vero, laborum eaque animi, facilis assumenda ratione laudantium dolor nihil similique aperiam impedit nobis laboriosam atque quis quo quos saepe vel fugiat, aspernatur fuga exercitationem iure! Impedit, atque!
            Omnis autem nobis, quibusdam reprehenderit molestias id quaerat aliquid soluta voluptate nulla, culpa nam! Velit omnis itaque necessitatibus, quasi id cumque molestiae? Pariatur, quae tenetur nihil autem reprehenderit cupiditate officia."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Laksono",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod eius facilis repellat adipisci, molestiae, porro id reiciendis consequatur vero ipsam temporibus harum nemo debitis quam illum quis voluptatibus excepturi aspernatur!
            Veritatis obcaecati nihil similique, magnam, tempore placeat doloribus non vitae veniam ipsa maxime laudantium quisquam molestiae et quod dignissimos quo pariatur dicta odit eos ex illum? Natus a illo voluptate?
            Praesentium incidunt tempore, culpa dolore rem, ea sit ipsam eum animi nisi, doloremque corrupti ratione aut reiciendis error neque deleniti nam minus odio pariatur architecto cupiditate asperiores libero quis? Repellat!
            Eligendi, hic beatae. Ipsum libero necessitatibus rem cupiditate dignissimos aperiam amet blanditiis maxime debitis omnis. Eos delectus, vero libero sapiente beatae cumque ipsum consectetur nihil dolorum numquam consequuntur? Aliquid, nam?
            Neque nisi culpa eaque exercitationem porro esse nostrum repudiandae aperiam pariatur architecto doloremque vitae veniam maiores quia cumque, aut laborum, ut ad earum ex consequuntur provident. Laudantium maxime quisquam repellat.
            Quidem error in facilis ducimus a non quos ipsum ipsam, dolorem optio deleniti delectus nulla. Voluptatem earum deleniti, adipisci facere eius doloremque explicabo, alias nostrum perferendis, accusamus sint officiis ullam?
            Commodi numquam vero, laborum eaque animi, facilis assumenda ratione laudantium dolor nihil similique aperiam impedit nobis laboriosam atque quis quo quos saepe vel fugiat, aspernatur fuga exercitationem iure! Impedit, atque!
            Omnis autem nobis, quibusdam reprehenderit molestias id quaerat aliquid soluta voluptate nulla, culpa nam! Velit omnis itaque necessitatibus, quasi id cumque molestiae? Pariatur, quae tenetur nihil autem reprehenderit cupiditate officia."
        ],
        ];
$new_post = [];

foreach ($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('/about', function () {
    return view("about", [
        "title" => "About",
        "name" => "putut nardianto",
        "image" => "profile.png",
        "email" => "putut@mail.com"
    ]);
});

