<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::connection('mysql_database1')->unprepared('
        CREATE TRIGGER insert_testCases_into_database2
        AFTER INSERT ON testCases
        FOR EACH ROW
        BEGIN
            INSERT INTO mysql_database2.testCases (project_id, feature_id, received_message, type, created_at, updated_at)
            VALUES (NEW.project_id, NEW.feature_id, NEW.received_message, NEW.type, NOW(), NOW());
        END
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::connection('mysql_database1')->unprepared('
        DROP TRIGGER IF EXISTS insert_testCases_into_database2;
    ');
    }
};
