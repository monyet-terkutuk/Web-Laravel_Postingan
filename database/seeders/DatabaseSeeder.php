<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Category;
use App\Model\post;
use App\Model\User;
use App\Models\Category as ModelsCategory;
use App\Models\post as ModelsPost;
use App\Models\User as ModelsUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        ModelsUser::create([
            'name' => 'Gabriel Yonathan',
            'username' => 'gabriel',
            'email' => 'Gabriel@gmail.com',
            'password' => bcrypt('gabriel3321')
        ]);

        // ModelsUser::create([
        //     'name' => 'Haris Munandar',
        //     'email' => 'HAris@gmail.com',
        //     'password' => bcrypt('boriss')
        // ]);

        // Kategori Seed

        ModelsCategory::create([
            'name' => 'Political',
            'slug' => 'political',
            'image' => 'political.jpg'
        ]);

        ModelsCategory::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'image' => 'w-design.jpeg'
        ]);

        ModelsCategory::create([
            'name' => 'Education',
            'slug' => 'education',
            'image' => 'education.jpg'
        ]);

        ModelsCategory::create([
            'name' => 'App Programming',
            'slug' => 'app-programming',
            'image' => 'app-programming.jpg'
        ]);

        // seed menggunakan factory

        \App\Models\User::factory(5)->create();
        \App\Models\post::factory(20)->create();
        // ModelsPost::create([
        //     'title' => 'Konten Politik Ke 1',
        //     'slug' => 'konten-politik-ke-1',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 1,
        //     'category_id' => 1
        // ]);

        // ModelsPost::create([
        //     'title' => 'Konten Politik Ke 2',
        //     'slug' => 'konten-politik-ke-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 2,
        //     'category_id' => 1
        // ]);

        // ModelsPost::create([
        //     'title' => 'Konten Politik Ke 3',
        //     'slug' => 'konten-politik-ke-3',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 1,
        //     'category_id' => 1
        // ]);

        // ModelsPost::create([
        //     'title' => 'Konten Ngaco Ke 1',
        //     'slug' => 'konten-ngaco-ke-1',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 2,
        //     'category_id' => 3
        // ]);

        // ModelsPost::create([
        //     'title' => 'Konten Ngaco Ke 3',
        //     'slug' => 'konten-ngaco-ke-3',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 8,
        //     'category_id' => 2
        // ]);
        //fdsf
        // ModelsPost::create([
        //     'title' => 'Konten Ngaco Ke 2',
        //     'slug' => 'konten-ngaco-ke-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 3,
        //     'category_id' => 4
        // ]);

        // ModelsPost::create([
        //     'title' => 'Konten Pembunuh Pelupa',
        //     'slug' => 'konten-pembunuh-pelupa',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 4,
        //     'category_id' => 4
        // ]);

        // ModelsPost::create([
        //     'title' => 'Superman Is Dead',
        //     'slug' => 'superman-in-dead',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 5,
        //     'category_id' => 4
        // ]);

        // ModelsPost::create([
        //     'title' => 'Metallica In Tokyo',
        //     'slug' => 'metallica-in-tokyo',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 6,
        //     'category_id' => 4
        // ]);

        // ModelsPost::create([
        //     'title' => 'Comedy In Alive',
        //     'slug' => 'comedy-in-alive',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 7,
        //     'category_id' => 4
        // ]);

        // ModelsPost::create([
        //     'title' => 'Firehouse Mulai Surut',
        //     'slug' => 'firehouse-mulai-surut',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 8,
        //     'category_id' => 4
        // ]);

        // ModelsPost::create([
        //     'title' => 'Vokalis Suicide Silent Meninggal',
        //     'slug' => 'vokalis-suicide-silent-meninggal',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 9,
        //     'category_id' => 2
        // ]);

        // ModelsPost::create([
        //     'title' => 'SpongeBob Membuat Kraby Patty',
        //     'slug' => 'spongebob-membuat-kraby-patty',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 10,
        //     'category_id' => 2
        // ]);

        // ModelsPost::create([
        //     'title' => 'Aksi Hacker Mengguncang Dunia',
        //     'slug' => 'aksi-hacker-mengguncang-dunia',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eum velit soluta dolorem possimus atque quas numquam amet, enim, autem consectetur id laudantium rerum mollitia harum sint eos et nobis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo expedita facilis debitis sequi enim tenetur nihil ipsam ab maxime minus excepturi rerum alias laudantium ad similique tempore eaque, qui illum quasi cumque quaerat molestias beatae! Impedit nam saepe omnis similique explicabo cupiditate harum et dignissimos sed nesciunt consequuntur numquam incidunt itaque consectetur placeat molestiae quaerat quidem eum quia sint adipisci corrupti, corporis, quam veritatis. Ab sed vel modi voluptatibus asperiores placeat nam ullam perferendis beatae quis! Quaerat, porro pariatur. Laborum ad voluptas reprehenderit libero nam voluptatibus, debitis velit natus quisquam? Neque accusamus, vel eum porro obcaecati rerum. Id, corporis nemo!',
        //     'user_id' => 11,
        //     'category_id' => 2
        // ]);
    }
}
