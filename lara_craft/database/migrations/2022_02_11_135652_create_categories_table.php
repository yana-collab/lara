<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string( 'name', 100);
            $table->timestamps();
        });

        Schema::table('news', function (Blueprint $table) {
            $table-> bigInteger('category_id')
            ->unsigned()
                ->nullable(true)
                ->default(null)
                ->index();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });

        \Illuminate\Support\Facades\DB::table('categories')
            ->insert([
                ['name' => 'Sport'],
                ['name' => 'Politics'],
                ['name' => 'Breaking news'],
                ['name' => 'Animals'],
                ['name' => 'Health']

            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('news', ['category_id']);
        Schema::dropIfExists('categories');

    }
}
