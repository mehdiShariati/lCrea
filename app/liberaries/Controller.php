<?php

namespace app\liberaries;
#this is the father controller and this load views and models

class Controller{
//load models

public function model($model){
//requeire model file


    require_once '../app/models/'.$model.".php";

    //instantiate Moedl

    return new $model();

}
//load views
public function view($view,$data=[]){
//check for view file


    if(file_exists("../app/views/" . $view . ".php")){

        require_once "../app/views/".$view.".php";



    }else{

        die('Did not Find Views');
    }





}





}