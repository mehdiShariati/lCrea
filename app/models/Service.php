<?php
namespace app\models;
use Illuminate\Database\Eloquent\Model as eloquent;
class Service extends eloquent{
    protected $fillable=["implemented_class","shortCode","token","s_id","service_name"];


}