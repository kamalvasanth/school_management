<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $date_time = Carbon::now();
        $data = [['id'=>1, 'name'=>"Term 1", 'created_at'=>$date_time, 'updated_at'=>$date_time],
                 ['id'=>2, 'name'=>"Term 2", 'created_at'=>$date_time, 'updated_at'=>$date_time],
                 ['id'=>3, 'name'=>"Term 2", 'created_at'=>$date_time, 'updated_at'=>$date_time],
                 ['id'=>4, 'name'=>"Term 4", 'created_at'=>$date_time, 'updated_at'=>$date_time],
                 ['id'=>5, 'name'=>"Term 5", 'created_at'=>$date_time, 'updated_at'=>$date_time]];

        DB::table('terms')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms');
    }
};
