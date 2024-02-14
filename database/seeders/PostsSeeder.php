<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Post;

use Faker\Factory as Faker;



class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        $usuarios = Usuario::all();

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->titulo = $faker->sentence;
            $post->contenido = $faker->paragraph;
            $post->usuario_id = $usuarios->random()->id;
            $post->save();
        }
    }
}
