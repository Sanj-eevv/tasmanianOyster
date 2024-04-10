<?php
declare(strict_types = 1);
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
        Schema::create('john_reserves', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
             $table->longText('description');
             $table->string('hero_image');
            $table->float('umami')->default(0);
            $table->float('saltiness')->default(0);
            $table->float('texture')->default(0);
            $table->float('finish')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('john_reserves');
    }
};
