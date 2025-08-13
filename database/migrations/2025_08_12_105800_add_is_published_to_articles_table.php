<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // Aggiungiamo la nostra colonna
             $table->boolean('is_published')->default(false)->after('description');          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // Se facciamo un "rollback", la colonna viene rimossa
            $table->dropColumn('is_published');
        });
    }
};