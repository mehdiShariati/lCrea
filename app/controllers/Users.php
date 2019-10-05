<?php
namespace app\controllers;
use app\liberaries\Controller;
use app\models\User;

class users extends Controller{
   

    public function login(){
   
       
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $user=User::where('email',$_POST['email'])->first();
        
            if($user){
            if($user->email=== $_POST['email'] && $user->password===$_POST['password'])
            {
             
               $_SESSION['email']=$user->email;
               $_SESSION['user_id']=$user->id;
         
               redirect('Home/index');
            }else{
              dd($_REQUEST);
            }
          }else{
        
          die("fail");

          }

     }else{

        $this->view('users/login');

     }

    }





}