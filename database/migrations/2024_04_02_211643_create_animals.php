<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateAnimals extends Migration{
	public function up(){ 
 		Schema::create('animals', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->String('nombre');
			$table->integer('edad');
			$table->string('sexo');
			$table->integer('especie_id');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}