<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity')->nullable();
            $table->integer('price');
            $table->text('description');
            $table->boolean('is_service');
            $table->string('address')->nullable();
            $table->text('experience');
            $table->string('img')->nullable();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Schedule::class)->constrained();
            $table->foreignIdFor(Category::class)->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplies');
    }
};
