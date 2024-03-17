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
        Schema::table('settings', function (Blueprint $table) {
            /// smtp
            $table->string('software_smtp_type', 30)->nullable();
            $table->string('software_smtp_mail_host', 100)->nullable();
            $table->string('software_smtp_mail_port', 30)->nullable();
            $table->string('software_smtp_mail_username', 191)->nullable();
            $table->string('software_smtp_mail_password', 100)->nullable();
            $table->string('software_smtp_mail_encryption', 30)->nullable();
            $table->string('software_smtp_mail_from_address', 191)->nullable();
            $table->string('software_smtp_mail_from_name', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('software_smtp_type');
            $table->dropColumn('software_smtp_mail_host');
            $table->dropColumn('software_smtp_mail_port');
            $table->dropColumn('software_smtp_mail_username');
            $table->dropColumn('software_smtp_mail_password');
            $table->dropColumn('software_smtp_mail_encryption');
            $table->dropColumn('software_smtp_mail_from_address');
            $table->dropColumn('software_smtp_mail_from_name');
        });
    }
};
