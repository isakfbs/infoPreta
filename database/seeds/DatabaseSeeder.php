<?php

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
        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder {
	
	public function run()
	    {
	        Categoria::create(['nome' => 'Computadores & Laptops']);
	        Categoria::create(['nome' => 'Cameras & Photos']);
	        Categoria::create(['nome' => 'Smartphones & Tablets']);
            Categoria::create(['nome' => 'TV & Audio']);
            Categoria::create(['nome' => 'Acessorios']);
            Categoria::create(['nome' => 'Gadgets']);
	        Categoria::create(['nome' => 'Video Games & Consoles']);
	    } 
}