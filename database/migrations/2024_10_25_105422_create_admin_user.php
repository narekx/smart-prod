<?php

use Carbon\Carbon;
use App\Models\User;
use App\Enums\EnumUserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        User::query()
            ->create([
                "name" => "Admin",
                "role" => EnumUserRole::ADMIN->value,
                "email" => "admin@admin.com",
                "email_verified_at" => now(),
                "password" => Hash::make("password"),
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        User::query()
            ->where("email", "admin@admin.com")
            ->delete();
    }
};
