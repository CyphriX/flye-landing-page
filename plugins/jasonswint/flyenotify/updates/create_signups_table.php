<?php namespace JasonSwint\FlyeNotify\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSignupsTable extends Migration
{
    public function up()
    {
        Schema::create('jasonswint_flyenotify_signups', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jasonswint_flyenotify_signups');
    }
}
