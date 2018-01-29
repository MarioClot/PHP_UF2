php <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagatzemsanitatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magatzemsanitats', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('localitzacio');
            $table->string('nom');
            $table->float('stock_inici');
            $table->float('stock_final');
            $table->float('necessitem');
            $table->float('percentatge_minim');
            $table->string('proveidor');
            $table->string('referencia_proveidor');
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
        Schema::dropIfExists('magatzemsanitats');
    }
}
