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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('phone')->unique()->nullable();
            $table->integer('role')->default(2);
            // Role User :
            // 1 = Admin
            // 2 = Agent
            $table->string('img')->nullable();
            $table->string('kode_akses')->unique();
            $table->enum('status', ['active', 'inactive'])->default('inactive'); // Enum dengan default 'inactive'
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('kode_akses');
        });
    }
};
