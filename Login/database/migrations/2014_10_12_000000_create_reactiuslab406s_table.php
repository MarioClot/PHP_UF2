php <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactiuslab406sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactiuslab406s', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('localitzacio');
            $table->string('nom');
            $table->float('quantitat');
            $table->float('stock_actual');
            $table->float('stock_final');
            $table->float('percentatge_minim');
            $table->string('proveidor');
            $table->string('referencia_proveidor');
            $table->string('marca_equip');
            $table->string('n_lot');
            $table->string('data_caducitat');
            $table->string('referencia_marca');
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
        Schema::dropIfExists('reactiuslab406s');
    }
}
