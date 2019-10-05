<?php
namespace app\models;
use Illuminate\Database\Eloquent\Model as eloquent;
class User extends eloquent{
protected $fillable=['email','password'];

public function findUser(){

    //dd(User::all());
}

}