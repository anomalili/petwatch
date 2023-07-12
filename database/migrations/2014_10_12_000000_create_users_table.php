<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            //$table->Integer('locationData')->nullable();
            $table->string('email', 32);
            $table->string('password');
            $table->string('name', 50);
            $table->boolean('state')->default(0); // 0 - felhasználó, 1 - admin
            $table->timestamp('timestamp')->useCurrent();
        });


        User::create(['email'=>'ember1@gmail.com','password'=>Hash::make('ember1'),'name'=>'Ember1 Vagyok']);
        User::create(['email'=>'ember2@gmail.com','password'=>Hash::make('ember2'),'name'=>'Ember2 Vagyok']);
        User::create(['email'=>'ember3@gmail.com','password'=>Hash::make('ember3'),'name'=>'Ember3 Vagyok']); 
        User::create(['email'=>'ember4@gmail.com','password'=>Hash::make('ember4'),'name'=>'Ember4 Vagyok']); 
        User::create(['email'=>'ember5@gmail.com','password'=>Hash::make('ember5'),'name'=>'Ember5 Vagyok']); 
        User::create(['email'=>'ember6@gmail.com','password'=>Hash::make('ember6'),'name'=>'Ember6 Vagyok']); 
        User::create(['email'=>'ember7@gmail.com','password'=>Hash::make('ember7'),'name'=>'Ember7 Vagyok']); 
        User::create(['email'=>'ember8@gmail.com','password'=>Hash::make('ember8'),'name'=>'Ember8 Vagyok']);         
        User::create(['email'=>'admin@gmail.com','password'=>Hash::make('admin'),'name'=>'Admin','state'=>1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};