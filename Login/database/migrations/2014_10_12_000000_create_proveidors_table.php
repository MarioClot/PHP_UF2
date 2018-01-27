php <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveidors', function (Blueprint $table) {
            /*columnes de proveidor*/
            $table->increments('id')->unique();
            $table->string('referencia');
            $table->string('nom');
            $table->string('NIF_CIF');
            $table->string('localitzacio');
            $table->float('telefon');
            $table->string('email');
            $table->string('contacte');
            $table->string('web');
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
        Schema::dropIfExists('proveidors');
    }
}
