<?php
namespace app\liberaries;
use app\controllers;
    #
    #Class Core
    #this class create urls and loadcontroller man classses
    #URL FORMAT /controller/method/params



    class Core {

    protected $currentController="Home";
    protected $currentMethod="index";
    protected $params=[];
    protected $url;
    public function __construct()
    {
          
      $url=  $this->getUrl();
   

    #search for controller if first value of url equal to an exist url for controller initial
    if(file_exists("../app/controllers/".ucwords($url[0]).".php")){
    #if exists set as $currentController
    $this->currentController=ucwords($url[0]);
    //unset 0 Index
    unset($url[0]);
    }


        


        //instantiate controllers class
        $Controller_Class="\app\controllers\\".$this->currentController;

        $this->currentController=new $Controller_Class();



        //looking for method
        if(isset($url[1])){
          if(method_exists($this->currentController,$url[1])){


              $this->currentMethod=$url[1];

              unset($url[1]);

          }




        }

        //get params

        $this->params=$url ? array_values($url) : [];



        //call a callback with arrays

        call_user_func_array([$this->currentController,$this->currentMethod],$this->params);









    }

    public function getUrl(){

    if(isset($_GET['url'])){
    #below line clear everything from right
     $url=rtrim($_GET['url'],"/");
     #trim it like url
    $url=filter_var($url,FILTER_SANITIZE_URL);
    #delete / and make it array
     $url=explode('/',$url);

    return $url;

    }






    }





    }