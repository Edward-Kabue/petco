<?php

use App\Models\User;
use App\Models\Clinic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clinic_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Clinic::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clinic_user', function (Blueprint $table) {
            //
        });
    }
};
