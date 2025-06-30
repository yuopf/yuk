<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null')->comment('ID пользователя, сделавшего заказ');
            $table->float('length', 8, 2)->comment('Длина комнаты в метрах');
            $table->float('width', 8, 2)->comment('Ширина комнаты в метрах');
            $table->unsignedInteger('corners')->default(0)->comment('Количество углов');
            $table->unsignedInteger('pipes')->default(0)->comment('Количество труб');
            $table->string('profile')->comment('Тип профиля: пластиковый, алюминиевый, теневой');
            $table->unsignedInteger('chandeliers')->default(0)->comment('Количество люстр');
            $table->unsignedInteger('lights')->default(0)->comment('Количество светильников');
            $table->string('window_type')->comment('Тип оформления окна');
            $table->float('window_length', 8, 2)->comment('Длина карниза/гардины в метрах');
            $table->unsignedInteger('total_price')->comment('Итоговая цена заказа в рублях');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
