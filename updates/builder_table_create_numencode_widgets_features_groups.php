<?php namespace NumenCode\Widgets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNumencodeWidgetsFeaturesGroups extends Migration
{
    public function up()
    {
        Schema::create('numencode_widgets_features_groups', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->boolean('is_published');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('numencode_widgets_features_groups');
    }
}