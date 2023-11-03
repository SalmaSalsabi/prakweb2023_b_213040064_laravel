<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();




        User::create([
            'name' => 'Salma'
            'email' => 'salma.213040064@mail.unpas.ac.id'
            'password' => bcrypt('12345')

        ]);

        // User::create([
        //     'name' => 'Salma'
        //     'email' => 'salma.213040064@mail.unpas.ac.id'
        //     'password' => bcrypt('12345')

        // ]);

        User::create([
            'name' => 'Rizka'
            'email' => 'rizka@gmail.com'
            'password' => bcrypt('12345')

        ]);

        // User::create([
        //     'name' => 'Rizka'
        //     'email' => 'rizka@gmail.com'
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming'
            'slug' => 'web-Programming'
        ]);

        Category::create([
            'name' => 'Networking'
            'slug' => 'networking'
        ]);

            Post::factory(20)->create();

            // Post::create([
            //     'title' => 'Judul Pertama'
            //     'slug' => 'judul-pertama'
            //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
    
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);
            
        Post::create([
            'title' => 'Judul Pertama'
            'slug' => 'judul-pertama'
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',

            'category_id' => 1,
            'user_id' => 1
        ]);
    
    Post::create([
        'title' => 'Judul Ke Dua',
        'slug' => 'judul-ke-dua',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
        'category_id' => 1,
        'user_id' => 1
    ]);

    Post::create([
        'title' => 'Judul Ke Tiga',
        'slug' => 'judul-ke-tiga',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
        'category_id' => 2,
        'user_id' => 1
    ]);

    Post::create([
        'title' => 'Judul Ke Empat',
        'slug' => 'judul-ke-empat',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
        'category_id' => 2,
        'user_id' => 2
    ]);

    // Post::create([
    //     'title' => 'Judul Ke Dua',
    //     'slug' => 'judul-ke-dua',
    //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
    //     'category_id' => 1,
    //     'user_id' => 1
    // ]);

    // Post::create([
    //     'title' => 'Judul Ke Tiga',
    //     'slug' => 'judul-ke-tiga',
    //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
    //     'category_id' => 2,
    //     'user_id' => 1
    // ]);

    // Post::create([
    //     'title' => 'Judul Ke Empat',
    //     'slug' => 'judul-ke-empat',
    //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero harum itaque vel fugiat dolor corporis ratione deserunt esse sed, enim praesentium voluptates ducimus cum recusandae dolores dolorum quam dolorem, quibusdam sapiente neque rerum. Magni dolorem obcaecati, architecto eligendi deleniti suscipit unde nobis esse iste voluptatum atque sequi debitis exercitationem nemo? Neque illo voluptas facilis repellendus odio mollitia rem blanditiis saepe dolores deleniti itaque corrupti iure dolor doloribus ad temporibus, ratione sit doloremque assumenda similique facere possimus laboriosam atque. Dolore aut distinctio laboriosam voluptate libero quisquam expedita id officia. Provident animi illo iusto recusandae autem possimus, incidunt unde accusantium obcaecati error?',
    //     'category_id' => 2,
    //     'user_id' => 2
    // ]);
    
}

}
