<?php

/*Los seeder son datos que introducimos a la base de datos para no estarlo haciendo a mano
los seeder se hacen desde la consola usando el comando 'php artisan make:seeder' seguido del nombre de la tabla que queremos añadir;
el nombre de la tabla se añade en plural o sea en vez de Post ponemos Posts; seguido de TableSeeder por conveniencia; ejemplo

php artisan make:seeder PostsTableSeeder

Este comando nos creará un archivo que en este caso se llama PostsTableSeeder.php que se encuentra en la carpeta databases->seeds

Ahí es dónde ejecutaremos el código para incrustar datos a la base de datos

Para crear un nuevo post debemos crear la variable $post y le asignamos una nueva instancia de la clase Post
y cómo estamos usando namespace debemos añadir la dirección completa

use App\Post;

Y después añadimos lo que queremos en la base de datos de la siguiente manera:

        $post = new Post;
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "Contenido de mi primer post";
        $post->published_at = Carbon::now();
        $post->save();      CON ESTO LE DECIMOS QUE GUARDE EL SEED EN LA BASE DE DATOS

Dónde cada parámetro después de $post-> es un campo en la base de datos a llenar.

NOTA: Los campos created_at, updated_at y id no se ponen en el seed ya que se llenan de manera automática


Una vez que tengamos los campos llenos, debemos ejecutamos en consola el comando

php artisan db:seed

Para que se ejecute el seed...

Sin embargo si vuelvo a ejecutar esa línea de comando en la consola nos ejecuta 2 veces el comando y nos llenaría la base
de datos de lo mismo 2 veces por lo que al principio del método debemos poner la función:

Post::truncate();

Para que limpie la tabla Post y luego me cree el post

Si queremos añadir un nuevo campo campo los añadimos en el código y ejecutamos el comando

php artisan migrate:refresh --seed

Para poder hacer todo en un sólo comando; o sea

Borra la base de datos actual y la actualiza con los seeders



*/


use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        $category = new Category;
        $category->name = "Videojuegos";
        $category->save();

        $category = new Category;
        $category->name = "Cine";
        $category->save();


        $post = new Post;
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "Contenido de mi primer post";
        $post->published_at = Carbon::now()->subDays(5);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi segundo post";
        $post->excerpt = "Extracto de mi segundo post";
        $post->body = "Contenido de mi segundo post";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi tercer post";
        $post->excerpt = "Extracto de mi tercer post";
        $post->body = "Contenido de mi tercer post";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi cuarto post";
        $post->excerpt = "Extracto de mi cuarto post";
        $post->body = "Contenido de mi cuarto post";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi quinto post";
        $post->excerpt = "Extracto de mi quinto post";
        $post->body = "Contenido de mi quinto post";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->save();

    }
}


