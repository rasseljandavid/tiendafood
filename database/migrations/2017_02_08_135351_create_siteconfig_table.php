<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\SiteConfig;

class CreateSiteconfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteconfig', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });

        $config = new SiteConfig;
        $config->key = 'CHIKKA_API_ID';
        $config->value = 'cfba28848766023b53d6c13f9bef947ef296544b5c0c3acc872a9c2e45090bb0';
        $config->save();

        $config = new SiteConfig;
        $config->key = 'CHIKKA_API_KEY';
        $config->value = '3b09ad0fe73e90ad6fb75e22c0016c240d65e2e453eac372b862e153bfaf4fee';
        $config->save();

        $config = new SiteConfig;
        $config->key = 'CHIKKA_SHORTCODE';
        $config->value = '29290180';
        $config->save();

        $config = new SiteConfig;
        $config->key = 'CHIKKA_CHEF_NUMBER';
        $config->value = '639283011834';
        $config->save();

        $config = new SiteConfig;
        $config->key = 'CHIKKA_ADMIN_NUMBER';
        $config->value = '639155300315';
        $config->save();

        $config = new SiteConfig;
        $config->key = 'SITE_MAINTENANCE_MODE';
        $config->value = 0;
        $config->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siteconfig');
    }
}
