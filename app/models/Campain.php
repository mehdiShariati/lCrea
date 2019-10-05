<?php
namespace app\models;
use Illuminate\Database\Eloquent\Model as eloquent;
class Campain extends eloquent{
    protected $fillable=['camp_name','camp_identifier',"url","land_id","token1","token2"];

}
