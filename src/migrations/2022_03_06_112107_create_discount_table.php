<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('ردیف کاربر');
            $table->string('name')->nullable()->comment('نام تخفیف');
            $table->string('code')->nullable()->comment('کد تخفیف');
            $table->string('countUse')->nullable()->comment('تعداد دفعات استفاده از کد تخفیف');
            $table->string('priceDiscount')->nullable()->comment('قیمت تخفیف');

            $table->string('user')->nullable()->comment('کاربران مورد تخفیف');
            $table->string('groupUser')->nullable()->comment('گروه کاربران مورد تخفیف');
            $table->string('category')->nullable()->comment('دسته مورد تخفیف');
            $table->string('product')->nullable()->comment('محصول مورد تخفیف');
            $table->string('dataIn')->nullable()->comment('زمان شروع تخفیف');
            $table->string('dataOut')->nullable()->comment('زمان پایان تخفیف');
            $table->string('minprice')->nullable()->comment('حداقل قیمت تخفیف');
            $table->string('maxprice')->nullable()->comment('حداکثر قیمت تخفیف');
            $table->string('percentDiscount')->nullable()->comment('درصد تخفیف');
            $table->boolean('typeDiscount')->default(0)->nullable()->comment('نوع تخفیف');
            $table->boolean('status')->default(1)->comment('وضعیت');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount');
    }
};
