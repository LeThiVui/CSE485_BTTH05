<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\ForeignKeyDefinition;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->increments('ma_bviet');
            $table->string('tieude',200);
            $table->string('ten_bhat',100);
            $table->unsignedInteger('ma_tloai');
            $table->text('tomtat');
            $table->text('noidung')->nullable();
            $table->unsignedInteger('ma_tgia');
            $table->dateTime('ngayviet')->default(DB::raw('CURRENT_TIMESTAMP'));//gọi lớp use Illuminate\Support\Facades\DB;
            $table->string('hinhanh',200)->nullable();
            //khai báo khóa ngoại để khi code đỡ phải xử lý
            $table->foreign('ma_tloai')->references('ma_tloai')->on('theloai')->onDelete('cascade');
            $table->foreign('ma_tgia')->references('ma_tgia')->on('tacgia')->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baiviet');
    }
};
