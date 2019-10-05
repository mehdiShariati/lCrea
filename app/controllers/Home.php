<?php
namespace app\controllers;
use app\liberaries\Controller;


class Home extends Controller {
    public function __construct()
    {
         
           // User::create(['email'=>"mehdishariati12@gmail.com",'password'=>'123456']);
           
            if(!isLogin()){

                redirect("users/login");


            }


    }



    public function  index(){



     
    // dd(Order::all("title")->toArray());
      $this->view('Home/index');


    }



}
