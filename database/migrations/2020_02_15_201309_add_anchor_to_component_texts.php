<?php

use Culpa\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Culpa\Facades\Schema;

class AddAnchorToComponentTexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('component_texts', function (Blueprint $table) {
            $table->string('headline')->nullable()->change();
            $table->string('anchor')->after('headline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('component_texts', function (Blueprint $table) {
            $table->dropColumn('anchor');
            //
        });
    }
}
