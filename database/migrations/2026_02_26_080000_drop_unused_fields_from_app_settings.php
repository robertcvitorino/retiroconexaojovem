<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('app_settings', function (Blueprint $table) {
            if (Schema::hasColumn('app_settings', 'app_name')) {
                $table->dropColumn('app_name');
            }

            if (Schema::hasColumn('app_settings', 'organization_name')) {
                $table->dropColumn('organization_name');
            }

            if (Schema::hasColumn('app_settings', 'support_email')) {
                $table->dropColumn('support_email');
            }

            if (Schema::hasColumn('app_settings', 'pix_key')) {
                $table->dropColumn('pix_key');
            }
        });
    }

    public function down(): void
    {
        Schema::table('app_settings', function (Blueprint $table) {
            if (! Schema::hasColumn('app_settings', 'app_name')) {
                $table->string('app_name')->default('Retiro Conexao Jovem')->after('id');
            }

            if (! Schema::hasColumn('app_settings', 'organization_name')) {
                $table->string('organization_name')->nullable()->after('app_name');
            }

            if (! Schema::hasColumn('app_settings', 'support_email')) {
                $table->string('support_email')->nullable()->after('organization_name');
            }

            if (! Schema::hasColumn('app_settings', 'pix_key')) {
                $table->string('pix_key')->nullable()->after('support_phone');
            }
        });
    }
};
