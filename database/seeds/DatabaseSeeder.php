<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 3)->create();

        // User::create([
        //     'name' => 'Eka Nazar Fajriansyah',
        //     'email' => 'nazarfajri@gmail.com',
        //     'password' => bcrypt('mcmxlv123')
        // ]);
        // User::create([
        //     'name' => 'Arthur Morgan',
        //     'email' => 'arthur@gmail.com',
        //     'password' => bcrypt('mcmxlv123')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        factory(Post::class, 20)->create();

        $this->command->info('Database seeding completed successfully!');

        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        //     Adiam, consectetur in consectetur et, consectetur ut metus.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. A
        //     diam, consectetur in consectetur et, consectetur ut metus. Sed
        //     euismod, purus sit amet ultricies luctus, nunc nisl semper nisl,
        //     et consequat nunc nisl sit amet nisl. Sed euismod, purus sit amet
        //     ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl
        //     sit amet nisl. Sed euismod, purus sit amet ultricies luctus, nunc
        //     nisl semper nisl, et consequat nunc nisl sit amet nisl. Sed euismod,
        //     purus sit amet ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl sit amet nisl.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        //     Adiam, consectetur in consectetur et, consectetur ut metus.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. A
        //     diam, consectetur in consectetur et, consectetur ut metus. Sed
        //     euismod, purus sit amet ultricies luctus, nunc nisl semper nisl,
        //     et consequat nunc nisl sit amet nisl. Sed euismod, purus sit amet
        //     ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl
        //     sit amet nisl. Sed euismod, purus sit amet ultricies luctus, nunc
        //     nisl semper nisl, et consequat nunc nisl sit amet nisl. Sed euismod,
        //     purus sit amet ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl sit amet nisl.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        //     Adiam, consectetur in consectetur et, consectetur ut metus.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. A
        //     diam, consectetur in consectetur et, consectetur ut metus. Sed
        //     euismod, purus sit amet ultricies luctus, nunc nisl semper nisl,
        //     et consequat nunc nisl sit amet nisl. Sed euismod, purus sit amet
        //     ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl
        //     sit amet nisl. Sed euismod, purus sit amet ultricies luctus, nunc
        //     nisl semper nisl, et consequat nunc nisl sit amet nisl. Sed euismod,
        //     purus sit amet ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl sit amet nisl.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Fourth Post',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        //     Adiam, consectetur in consectetur et, consectetur ut metus.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. A
        //     diam, consectetur in consectetur et, consectetur ut metus. Sed
        //     euismod, purus sit amet ultricies luctus, nunc nisl semper nisl,
        //     et consequat nunc nisl sit amet nisl. Sed euismod, purus sit amet
        //     ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl
        //     sit amet nisl. Sed euismod, purus sit amet ultricies luctus, nunc
        //     nisl semper nisl, et consequat nunc nisl sit amet nisl. Sed euismod,
        //     purus sit amet ultricies luctus, nunc nisl semper nisl, et consequat nunc nisl sit amet nisl.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
