<?php

use App\Models\Coworker;
use App\Models\Partner;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coworker_partner', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Coworker::class);
            $table->foreignIdFor(Partner::class);
            $table->boolean('active');
            $table->json('answers');
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
        Schema::dropIfExists('coworker_partner');
    }
};
