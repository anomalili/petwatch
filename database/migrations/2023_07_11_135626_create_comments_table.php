<?php

use App\Models\Comment;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('commentId');
            $table->foreignId('reportId')->references('reportId')->on('reports');
            $table->foreignId('from')->references('user_id')->on('users');
            $table->longText('text');
            $table->timestamp('date')->useCurrent();

        });

        Comment::create(['reportId'=>1,'from'=>1,'text'=>'MEG VAN!']);
        Comment::create(['reportId'=>1,'from'=>2,'text'=>'az egy cica']);
        Comment::create(['reportId'=>2,'from'=>4,'text'=>'szép kerítés']);
        Comment::create(['reportId'=>3,'from'=>3,'text'=>'ég nálatok a lámpa']);
        Comment::create(['reportId'=>3,'from'=>2,'text'=>'SZIA ERZSI']);
        Comment::create(['reportId'=>3,'from'=>1,'text'=>':)']);
        Comment::create(['reportId'=>2,'from'=>3,'text'=>'csokolom egytiszdsa ed énybol evtem emg a hus']);
        Comment::create(['reportId'=>1,'from'=>2,'text'=>'titkos üzenet']);
        Comment::create(['reportId'=>1,'from'=>5,'text'=>'száll a széllel']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};