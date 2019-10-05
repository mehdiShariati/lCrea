<?php
namespace app\models;
use Illuminate\Database\Eloquent\Model as eloquent;
class Camp_user extends eloquent{
    protected $fillable=['number','otp_refrence',"camp_id","shortCode","landing_id","status"];

}
