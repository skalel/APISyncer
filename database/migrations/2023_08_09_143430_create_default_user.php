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
      DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['admin', 'a@a.com', '$2y$10$sPq/bv8HB.KHaCjQA5214.bVRECWPwC4kQuD0kwK0oaX1wKlVwKl6']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::delete('delete from users where email = ?', ['a@a.com']);
    }
};
