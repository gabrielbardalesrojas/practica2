<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateRecintoactividads extends Migration{
	public function up(){ 
 		Schema::create('recintoactividads', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->integer('recinto_id');
			$table->integer('actividad_id');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}