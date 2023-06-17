<?php

use App\Domain\Enums\RoleEnum;
use App\Domain\User\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->string('suname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string("phone")->nullable();
            $table->integer('role_id')->nullable();
            $table->boolean('status')->nullable();
            $table->text('biography')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            "name" => "kisenga",
            "suname" => "jocelin",
            "email" =>  "kisengajocelin7@gmail.com",
            "phone" => "0991161449",
            "password" => Hash::make("construire un monde meilleur"),
            "role_id" => RoleEnum::ADMIN,
            "status" => true

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
