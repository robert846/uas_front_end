<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUsersCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Buat collection di MongoDB
        Schema::connection('mongodb')->create('users', function ($collection) {
            $collection->index('email'); // Membuat index pada email
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Hapus collection jika rollback
        Schema::connection('mongodb')->drop('users');
    }
}
