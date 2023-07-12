<?php

use App\Models\Helyadatok;
use App\Models\LocationData;
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
        Schema::create('locationDatas', function (Blueprint $table) {
            $table->bigIncrements('locationDataId');
            
            $table->Integer('zip')->unsigned();
            $table->string('city', 32)->default("");
            $table->string('gps_width', 32)->default(0);
            $table->string('gps_lenght', 32)->default(0);
           // $table->primary('locationData_id');
        });

        LocationData::create(['locationDataId'=> 101,'zip'=>2234, 'city'=>'Maglód']);
        LocationData::create(['locationDataId'=> 102,'zip'=>6000, 'city'=>'Kecskemét']);
        LocationData::create(['locationDataId'=> 103,'zip'=>4000, 'city'=>'Debrecen']);
        LocationData::create(['locationDataId'=> 104,'zip'=>4031, 'city'=>'Debrecen']);
        LocationData::create(['locationDataId'=> 105,'zip'=>1022, 'city'=>'Budapest']);
        LocationData::create(['locationDataId'=> 106,'zip'=>1026, 'city'=>'Budapest']);
        LocationData::create(['locationDataId'=> 107,'zip'=>1011, 'city'=>'Budapest']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locationDatas');
    }
};