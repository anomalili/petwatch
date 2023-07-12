<?php

use App\Models\Report;
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
        Schema::create('report', function (Blueprint $table) {
            $table->bigIncrements('reportId');
            $table->smallInteger('animalState')->nullable(); // állat állapota 1 - eltűnt 2 - talált
            $table->smallInteger('reportState')->default(1); // bejelentés állapota 1 - ellenörzés alatt, 2 - látható, 3 - törölt
            $table->foreignId('locationData')->references('locationDataId')->on('locationDatas');
            $table->foreignId('user')->references('user_id')->on('users');
            $table->longText('imgUrl')->default("pics/0.jpg");
            $table->string('species');
            $table->string('breed');
            $table->smallInteger('sex')->nullable(); // 1 fiú, 2 lány
            $table->smallInteger('fixed')->nullable(); // 0 igen, 1 sex
            $table->date('birthDate')->nullable();
            $table->string('color')->nullable();
            $table->string('size');
            $table->string('body');
            $table->smallInteger('chip'); // 0 igen, 1 sex
            $table->longText('description')->nullable();
            $table->timestamp('reportDate')->useCurrent();
        });
        


        Report::create([
            'reportState' => 1, 'animalState'=> 2, 'locationData' => 101, 'user' => 2, 'species' => 'Kutya', 'breed' => 'angol bulldog', 'sex' => 1, 'fixed' => 0,
            'birthDate' => '20220311', 'color' => 'Fekete', 'size' => 'kis termetű', 'body' => 'nagy testű', 'chip' => 0, 'description' => 'Eltűnt a fekete kiscicám. HELP'
        ]);
        Report::create([
            'reportState' => 1, 'animalState'=> 2, 'locationData' => 101, 'user' => 2, 'imgUrl' => "pics/1.jpg",'species' => 'Macska', 'breed' => 'sziámi', 'sex' => 1, 'fixed' => 0,
            'birthDate' => '20220311', 'color' => 'Fekete', 'size' => 'kis termetű', 'body' => 'nagy testű', 'chip' => 0, 'description' => 'Eltűnt a fekete kiscicám. HELP'
        ]);
        Report::create([
            'reportState' => 2, 'animalState'=> 1, 'locationData' => 102, 'user' => 1, 'imgUrl' => "pics/2.jpg", 'species' => 'Hüllő', 'breed' => 'ékszerteknős', 'sex' => 2, 'fixed' => 1,
            'birthDate' => '20220311', 'color' => 'Barna', 'size' => 'kis termetű', 'body' => 'telt', 'chip' => 1, 'description' => "Eltűnt az ékszerteknősöm! Talán a főút felé szökhetett.."
        ]);

        Report::create([
            'reportState' => 3, 'animalState'=> 2, 'locationData' => 103, 'user' => 3, 'imgUrl' => "pics/3.webp", 'species' => 'Madár', 'breed' => 'hullámos', 'sex' => 2, 'fixed' => 1,
            'birthDate' => '20220311', 'color' => 'Egyéb', 'size' => '40cm', 'body' => 'kecses', 'chip' => 0, 'description' => 'A Polly névre hallgat, a Damjanich utcáról repült ki.. '
        ]);

        Report::create([
            'reportState' => 2, 'animalState'=> 2,'locationData' => 104, 'user' => 3, 'imgUrl' => "pics/4.jpg", 'species' => 'Rágcsáló', 'breed' => 'házi patkány', 'sex' => 2, 'fixed' => 1,
            'birthDate' => '20220311', 'color' => 'Fehér', 'size' => 'kb 25cm', 'body' => 'dagadt', 'chip' => 0, 'description' => 'A bal füle hiányzik'
        ]);

        Report::create([
            'reportState' => 1,'animalState'=> 1, 'locationData' => 105, 'user' => 4, 'imgUrl' => "pics/5.jpg",'species' => 'Kutya', 'breed' => 'bernáthegyi', 'sex' => 2, 'fixed' => 0,
            'birthDate' => '20220311', 'color' => 'Fekete, fehér, sárga', 'size' => 'nagy', 'body' => 'vékonyabb', 'chip' => 1, 'description' => 'Sárinak hívják, barátságos, az ételt meghálálja'
        ]);
        
         Report::create([
            'reportState' => 2, 'animalState'=> 2, 'locationData' => 102, 'user' => 1, 'imgUrl' => "pics/6.jpg",'species' => 'Egyéb', 'breed' => 'vörös róka', 'fixed' => 1,
            'birthDate' => '20220311', 'color' => 'Vörös', 'size' => 'kifejlett', 'body' => 'közepes', 'chip' => 0, 'description' => 'Igen félénk.. de nagy vadász'
        ]);


        Report::create([
            'reportState' => 1, 'animalState'=> 1, 'locationData' => 101, 'user' => 2, 'imgUrl' => "pics/7.jpg",'species' => 'Macska', 'breed' => 'sziámi', 'sex' => 1, 'fixed' => 1,
            'birthDate' => '20220111', 'color' => 'Fekete', 'size' => 'kis termetű', 'body' => 'nagy testű', 'chip' => 0, 'description' => 'Eltűnt a fekete kiscicám. HELP'
        ]); 

/////
        Report::create([
            'reportState' => 1, 'animalState'=> 1, 'locationData' => 102, 'user' => 2, 'imgUrl' => "pics/20.jpg",'species' => 'Macska', 'breed' => 'Házi macska', 'sex' => 1, 'fixed' => 1,
            'birthDate' => '20220111', 'color' => 'Fekete', 'size' => 'Közepes', 'body' => 'Közepes', 'chip' => 1, 'description' => 'Eltűnt a fekete fehér kiscicám. HELP'
        ]);  
        Report::create([
            'reportState' => 2, 'animalState'=> 2, 'locationData' => 103, 'user' => 2, 'imgUrl' => "pics/21.jpg",'species' => 'Kutya', 'breed' => 'Keverék', 'sex' => 1, 'fixed' => 0,
            'birthDate' => '20220111', 'color' => 'Barna', 'size' => 'kis termetű', 'body' => 'Közepes', 'chip' => 0, 'description' => 'Találtam egy barna fehér kiskutyát. HELP'
        ]);  
        Report::create([
            'reportState' => 2, 'animalState'=> 1, 'locationData' => 104, 'user' => 2, 'imgUrl' => "pics/22.jpg",'species' => 'Kutya', 'breed' => 'Keverék', 'sex' => 1, 'fixed' => 1,
            'birthDate' => '20220111', 'color' => 'Barna', 'size' => 'Nagy', 'body' => 'Nagy', 'chip' => 1, 'description' => 'Találtam egy barna nagykutyát. HELP'
        ]);  
        Report::create([
            'reportState' => 2, 'animalState'=> 2, 'locationData' => 105, 'user' => 2, 'imgUrl' => "pics/23.jpg",'species' => 'Kutya', 'breed' => 'Amerikai bulldog', 'sex' => 1, 'fixed' => 0,
            'birthDate' => '20220111', 'color' => 'Fekete', 'size' => 'Közepes', 'body' => 'Közepes', 'chip' => 0, 'description' => 'Eltűnt a fekete fehér nagy kutyám. HELP'
        ]);  
        Report::create([
            'reportState' => 2, 'animalState'=> 1, 'locationData' => 106, 'user' => 4, 'imgUrl' => "pics/25.jpg",'species' => 'Macska', 'breed' => 'Keverék', 'sex' => 1, 'fixed' => 0,
            'birthDate' => '20220111', 'color' => 'Fekete', 'size' => 'kis termetű', 'body' => 'telt', 'chip' => 0, 'description' => 'Eltűnt a fekete kiscicát. HELP'
        ]);  
        Report::create([
            'reportState' => 2, 'animalState'=> 1, 'locationData' => 107, 'user' => 2, 'imgUrl' => "pics/24.jpg",'species' => 'Kutya', 'breed' => 'Keverék', 'sex' => 1, 'fixed' => 1,
            'birthDate' => '20220111', 'color' => 'Fekete', 'size' => 'Közepes', 'body' => 'Nagy', 'chip' => 0, 'description' => 'Találtam egy fekete-fehér kutyust. HELP'
        ]);  
        Report::create([
            'reportState' => 2, 'animalState'=> 2, 'locationData' => 102, 'user' => 2, 'imgUrl' => "pics/27.jpg",'species' => 'Kutya', 'breed' => 'Amerikai bulldog', 'sex' => 1, 'fixed' => 1,
            'birthDate' => '20220111', 'color' => 'Fekete', 'size' => 'Nagy', 'body' => 'Nagy', 'chip' => 0, 'description' => 'Eltűnt a fekete-fehér kiskutyám. HELP'
        ]);  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
};