<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    
       /* Schema::create('posts', function (Blueprint $table){
            $table-> increments('id');
            $table-> unsignedBigInteger('author_id');
            $table-> foreign('author_id')-> references('id') -> on ('users')-> onDelete('restrict');
            $table-> string ('title');
            $table-> string ('slug')-> unique();
            $table-> text ('excerpt');
            $table-> text('body');
            $table-> string ('image')-> nullable();
            $table-> timestamps();
        
        }); */
        public function up (): void
        {
        Schema::create('posts', function (Blueprint $table){
            $table-> id();
            $table-> string("title", 100);
            // $table-> foreign("author_id")-> references('id') -> on ('users')-> onDelete('restrict');
            $table-> string ("image");
            $table-> text ("excerpt");
            $table-> text("content");
            $table-> foreignId("author_id")-> constrained("users");
            $table->timestamps();
        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
