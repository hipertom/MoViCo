<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('project_links', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('set null');
        $table->foreign('type_id')->references('id')->on('link_types')->onUpdate('cascade')->onDelete('set null');
      });

      Schema::table('project_languages', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('set null');
        $table->foreign('language_id')->references('id')->on('languages')->onUpdate('cascade')->onDelete('set null');
      });

      Schema::table('project_frameworks', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('set null');
        $table->foreign('framework_id')->references('id')->on('frameworks')->onUpdate('cascade')->onDelete('set null');
      });

      Schema::table('project_cms', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('set null');
        $table->foreign('cms_id')->references('id')->on('cms')->onUpdate('cascade')->onDelete('set null');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}