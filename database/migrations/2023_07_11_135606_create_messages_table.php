<?php

use App\Models\Message;
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
        
        Schema::create('Messages', function (Blueprint $table) {
            
            $table->bigIncrements('messageId');
            $table->foreignId('from')->references('user_id')->on('users'); // sex kell a 32
            $table->foreignId('to')->references('user_id')->on('users'); // sex kell a 32
            $table->longText('content', 150);
            $table->boolean('state')->default(0); // 0 - új üzenet, 1 - már látott üzenet
            $table->timestamp('date')->useCurrent(); // sex kell a 150
        });


        Message::create(['from'=>2,'to'=>1,'content'=>'Szia Ember1!', 'state'=>1]);
        Message::create(['from'=>1,'to'=>2,'content'=>'Láttam a cicádat. Minden rendben van vele?', 'state'=>1]);
        Message::create(['from'=>2,'to'=>1,'content'=>'Igen Ember1. Köszönöm kérdésed', 'state'=>1]);
        Message::create(['from'=>1,'to'=>2,'content'=>'Én köszönöm Ember2', 'state'=>1]);
        Message::create(['from'=>2,'to'=>1,'content'=>'Szívesen', 'state'=>1]);

        Message::create(['from'=>3,'to'=>2,'content'=>'Ember2. Nem tudom szóltak e már de kint van a cicád a kertben', 'state'=>1]);
        Message::create(['from'=>2,'to'=>3,'content'=>'Igen Ember3 már tudok róla, köszönöm, hogy értesítettél', 'state'=>1]);
        Message::create(['from'=>3,'to'=>2,'content'=>'Csak ne szarjon a kertbe. Na szia Ember2', 'state'=>1]);
        Message::create(['from'=>1,'to'=>2,'content'=>'Ez lesz az utolsó üzenet(elvileg)', 'state'=>1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Messages');
    }
};