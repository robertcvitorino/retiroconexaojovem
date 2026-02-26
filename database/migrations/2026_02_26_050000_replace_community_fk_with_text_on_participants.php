<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('participants', function (Blueprint $table) {
            $table->string('community')->nullable()->after('cpf');

            if (Schema::hasColumn('participants', 'community_id')) {
                $table->dropConstrainedForeignId('community_id');
            }
        });

        Schema::dropIfExists('communities');
    }

    public function down(): void
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::table('participants', function (Blueprint $table) {
            if (Schema::hasColumn('participants', 'community')) {
                $table->dropColumn('community');
            }

            $table->foreignId('community_id')->nullable()->constrained()->nullOnDelete()->after('cpf');
        });
    }
};
