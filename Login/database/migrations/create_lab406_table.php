php <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLab406Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab406', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('localitzacio');
            $table->string('nom');
            $table->float('quantitat_inicial');
            $table->float('quantitat_actual');
            $table->float('percentatge_minim');
            $table->string('proveidor');
            $table->string('referencia_proveidor');
            $table->string('marca_equip');
            $table->string('n_lot');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab406');
    }
}
