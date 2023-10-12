<?php

use App\Models\Clinic;
use App\Models\Appointment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_clinic', function (Blueprint $table) {
            $table->foreignIdFor(Clinic::class);
            $table->foreignIdFor(Appointment::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment_clinic', function (Blueprint $table) {
            //
        });
    }
};
