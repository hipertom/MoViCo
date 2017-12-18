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
      // Create foreing keys
      Schema::table('projects', function (Blueprint $table) {
        $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
      });

      Schema::table('project_links', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('type_id')->references('id')->on('link_types')->onUpdate('cascade')->onDelete('cascade');
      });

      Schema::table('project_languages', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('language_id')->references('id')->on('languages')->onUpdate('cascade')->onDelete('cascade');
      });

      Schema::table('project_frameworks', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('framework_id')->references('id')->on('frameworks')->onUpdate('cascade')->onDelete('cascade');
      });

      Schema::table('project_cms', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('cms_id')->references('id')->on('cms')->onUpdate('cascade')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Drop foreign keys
      Schema::table('projects', function (Blueprint $table) {
        $table->dropForeign(['status_id']);
      });

      Schema::table('project_links', function (Blueprint $table) {
        $table->dropForeign(['project_id']);
        $table->dropForeign(['type_id']);
      });

      Schema::table('project_languages', function (Blueprint $table) {
        $table->dropForeign(['project_id']);
        $table->dropForeign(['language_id']);
      });

      Schema::table('project_frameworks', function (Blueprint $table) {
        $table->dropForeign(['project_id']);
        $table->dropForeign(['framework_id']);
      });

      Schema::table('project_cms', function (Blueprint $table) {
        $table->dropForeign(['project_id']);
        $table->dropForeign(['cms_id']);
      });
    }
}
