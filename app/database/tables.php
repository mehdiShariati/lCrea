<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$Db=Capsule::schema();
if(!$Db->hasTable("users")){
   $Db->create("users",function($table){
    $table->increments("id");
    $table->string('email');
    $table->string('password');
    $table->timestamps();
   });

}
if(!$Db->hasTable("services")){
   $Db->create("services",function($table){
    $table->increments("id");
    $table->string('implemented_class');
    $table->integer('shortCode');
    $table->string('token');
    $table->integer('s_id');
    $table->string('service_name');

    $table->timestamps();
   });

}
if(!$Db->hasTable("Camp_users")){
   $Db->create("Camp_users",function($table){
    $table->increments("id");
    $table->integer('number');
    $table->string('otp_refrence');
    $table->string('camp_id');
    $table->integer('shortCode');
    $table->integer('status');
    $table->integer('landing_id');

    $table->timestamps();
   });

}
if(!$Db->hasTable("Campains")){
   $Db->create("Campains",function($table){
    $table->increments("id");
    $table->integer('land_id');
    $table->string('camp_name');
    $table->string('camp_identifier');
    $table->string('url');
    $table->integer('status')->default(1);
    $table->string('token1');
    $table->string('token2');
    $table->timestamps();
   });

}
if(!$Db->hasTable("landings")){
   $Db->create("landings",function($table){
    $table->increments("id");
    $table->integer('service_id1');
    $table->string('landing_name');
    $table->string('background_color');
    $table->string('animate_image1');
    $table->string('step1_image');
    $table->string('step2_image');
    $table->string('step_send_text');
    $table->string('step_confirm_text');
    $table->string('color_send_text');
    $table->string('boxColor_send_text');
    $table->integer('is_double')->default(0);
    $table->integer('service_id2')->nullable();
    $table->string('success_text_firstService')->nullable();
    $table->string('service2_send_text')->nullable();
    $table->string('service2_confirm_text')->nullable();
    $table->string('final_page_text');
    $table->string('final_page_image');
    $table->string('color_service2_confirm_text');
    $table->string('color_step_confirm_text')->nullable();
    $table->string('color_success_text_firstService')->nullable();
    $table->string('color_service2_send_text')->nullable();
    $table->string('color_final_text');
    $table->string('link_download_service1');
    $table->string('link_download_service2')->nullable();
    $table->string('rules1');
    $table->string('rules2')->nullable();
    $table->string('color_input_number')->default("#ff0000");
    $table->string('color_button_submit')->default("#ff0000");
    $table->string('tonalite1')->default("#ff0000");
    $table->string('tonalite2')->default("#ff0000");

 
    $table->timestamps();
   });

}







