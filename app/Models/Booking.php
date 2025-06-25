<?php
Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('phone');
    $table->date('event_date');
    $table->string('package');
    $table->integer('price');
    $table->timestamps();
});
?>