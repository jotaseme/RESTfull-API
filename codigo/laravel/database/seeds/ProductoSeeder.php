<?php
 
use Illuminate\Database\Seeder;
 

use App\Producto;
use App\Categoria;
use Faker\Factory as Faker;
 
class ProductoSeeder extends Seeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		$faker = Faker::create();
 
		$num_categorias= Caegoria::all()->count();
		for ($i=0; $i<20; $i++)
		{
			
			Producto::create(
				[
					'nombre'=>$faker->word()
					'categoria_id'=> $faker->numberBetween(1,$num_categorias)
				]
			);
		}
 
	}
 
}