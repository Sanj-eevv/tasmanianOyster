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
        Schema::create('growing_region_galleries', function (Blueprint $table) {
             $table->id();
             $table->foreignId('growing_region_id')->constrained()->cascadeOnDelete();
             $table->string('file_name');
             $table->string('file_extension');
             $table->string('file_url');
             $table->float('file_size')->comment('File Size in Kb');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growing_region_galleries');
    }
};
