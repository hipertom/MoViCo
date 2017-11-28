<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultData extends Migration
{
    //properties for default data
    private $languages = array("HTML","CSS","PHP","JavaScript","C#","SQL","Java","Json");
    private $frameworks = array("Bootstrap","AngularJS","Angular Material","JQuery","AJAX","Skeleton",".NET");
    private $cms = array("WordPress","WooCommerce","Magento","Concrete5");
    private $link = array("demo","live","github");


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // add languages
      foreach ($this->languages as $key => $value) {
        DB::table('languages')->insert(array('id' => $key+1,'name' => $value,'created_at' => now(),'updated_at' => now()));
      }
      // add frameworks
      foreach ($this->frameworks as $key => $value) {
        DB::table('frameworks')->insert(array('id' => $key+1,'name' => $value,'created_at' => now(),'updated_at' => now()));
      }
      // add cms
      foreach ($this->cms as $key => $value) {
        DB::table('cms')->insert(array('id' => $key+1,'name' => $value,'created_at' => now(),'updated_at' => now()));
      }
      // add link_types
      foreach ($this->link as $key => $value) {
        DB::table('link_types')->insert(array('id' => $key+1,'name' => $value,'created_at' => now(),'updated_at' => now()));
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // delete default data from table:languages
        foreach ($this->languages as $key => $value) {
          DB::table('languages')->where('name', $value)->delete();
        }

        // delete default data from table:languages
        foreach ($this->frameworks as $key => $value) {
          DB::table('frameworks')->where('name', $value)->delete();
        }

        // delete default data from table:languages
        foreach ($this->cms as $key => $value) {
          DB::table('cms')->where('name', $value)->delete();
        }

        // delete default data from table:languages
        foreach ($this->link as $key => $value) {
          DB::table('link_types')->where('name', $value)->delete();
        }
    }
}
