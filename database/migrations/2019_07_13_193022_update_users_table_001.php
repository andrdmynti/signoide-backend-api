<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable001 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('jenis_kelamin')->nullable()->after('name');          
            $table->string('tempat_lahir')->nullable()->after('jenis_kelamin');            
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            $table->string('no_hp')->nullable()->after('tanggal_lahir');            
            $table->string('username')->unique()->nullable()->after('no_hp');
            $table->string('alamat')->nullable()->after('password');
            $table->integer('provinsi_id')->nullable()->after('alamat');
            $table->integer('kota_id')->nullable()->after('provinsi_id');
            $table->integer('kecamatan_id')->nullable()->after('kota_id');
            $table->integer('kelurahan_id')->nullable()->after('kecamatan_id');
            $table->string('picture')->nullable()->after('kelurahan_id');
            $table->string('path')->nullable()->after('picture');
            $table->string('dimension')->nullable()->after('path');
            $table->string('role_id')->nullabe()->after('dimension');
            $table->string('token')->nullable()->after('role_id');
            $table->integer('is_active')->nullable()->after('token')->default(0);
            $table->timestamp('deleted_at')->nullable()->after('updated_at');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
