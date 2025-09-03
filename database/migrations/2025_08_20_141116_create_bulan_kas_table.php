<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bulan_kas', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');           // misal "Agustus 2025"
            $table->integer('jumlah_target');  // target kas per bulan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bulan_kas');
    }
};
