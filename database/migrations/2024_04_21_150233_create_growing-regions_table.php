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
        Schema::create('growing_regions', function (Blueprint $table) {
             $table->id();
             $table->string('title');
             $table->string('slug');
             $table->string('subtitle');
             $table->longText('description');
             $table->longText('characteristics');
             $table->longText('tasting_note');
             $table->string('hero_image');
             $table->string('hero_image_sub');
             $table->boolean('is_active')->default(true);
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growing_regions');
    }
};
