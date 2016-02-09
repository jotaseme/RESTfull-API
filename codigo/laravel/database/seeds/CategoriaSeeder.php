<?php
 
use Illuminate\Database\Seeder;
 

use App\Categoria;

use Faker\Factory as Faker;
 
class CategoriaSeeder extends Seeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		$faker = Faker::create();
 
		
		for ($i=0; $i<4; $i++)
		{
			
			Categoria::create(
				[
					'nombre'=>$faker->word()
					
				]
			);
		}
 
	}
 
}