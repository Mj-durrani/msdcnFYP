<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionHistoryDistributorsTable extends Migration
{
    private $primaryKey = 'HistoryId';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_history_distributors', function (Blueprint $table) {
            $table->integer('HistoryId')->autoIncrement();
            $table->integer('SubscriptionPackageId');
            $table->integer('DistributorId');
            $table->date('startDate');
            $table->timestamps();

            $table->foreign('SubscriptionPackageId')->references('PackageId')->on('subscription_packages');
            $table->foreign('DistributorId')->references('DistributorShopId')->on('distributor_shops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_history_distributors');
    }
}
