<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('security_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_type'); // LOGIN_SUCCESS, BRUTE_FORCE, PRIVILEGE_ESCALATION
            $table->string('source_ip');
            $table->enum('severity', ['info', 'warning', 'critical']);
            $table->text('payload')->nullable();
            $table->timestamps();
        });

        Schema::create('alerts', function (Blueprint $table) {
            $table->id();
            $table->string('rule_name');
            $table->enum('status', ['open', 'acknowledged', 'resolved'])->default('open');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('alerts');
        Schema::dropIfExists('security_events');
    }
};
