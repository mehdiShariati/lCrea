<?php
namespace app\controllers;
use app\liberaries\Controller;
use app\models\Landing;

class Landings extends Controller{
private $landingModel;

public function __construct()
{
    
}
public function getCurrentDate(){
    $tz = 'Asia/Tehran';
    //$timestamp = time();
    $dt = new \DateTime("now", new \DateTimeZone($tz)); //first argument "must" be a string
    //$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
    return $dt->format('Y-m-d H:i:s');
}


public function showLan($id,$camp,$number=null,$is_double=null){




    if($camp==null){
        die('Cannot Access This Page Without Camp_identifier');
    }else{

        if(Landing::checkCamp($camp)){


            $_SESSION['landing_id']=Landing::getLandId($camp);
            $_SESSION['camp_id']=$camp;
            $loger=new \UserLoger();
            $_SESSION['ip']=$loger->getRealIpAddr();
            $_SESSION['os']=$loger->os;
            $_SESSION['browser']=$loger->browser;
            $_SESSION['type']=$loger->type;




        }else{
            die("this identifier does not exist");
        }
    }
    $data=Landing::fetchLanding($id);
  if($data==null){
die("There is No Landing Here");
}
     $_SESSION['land_name']=$data->landing_name;
    $_SESSION['id']=$id;
    $_SESSION['is_double']=$data->is_double;
$_SESSION['request_data']= $this->getCurrentDate();
   // if($data->is_double == 1){
        $tmp_srvic=Landing::callServiceByID($data->service_id1);
        $_SESSION['service1']=$tmp_srvic->implemented_class;
        $_SESSION['serviceId']=$tmp_srvic->s_id;
        $_SESSION['token1']=$tmp_srvic->token;
        $_SESSION['serviceName']=$tmp_srvic->service_name;
        $_SESSION['ShortCode1']=$tmp_srvic->shortCode;
         
   
    if(isset($number) && $is_double == 1 ){
        $tmp_srvic2=Landing::callServiceByID($data->service_id2);
        $_SESSION['service2']=$tmp_srvic2->implemented_class;
        $_SESSION['token2']=$tmp_srvic2->token;
        $_SESSION['serviceId2']=$tmp_srvic2->s_id;
        $_SESSION['serviceName2']=$tmp_srvic2->service_name;
        $_SESSION['ShortCode2']=$tmp_srvic2->shortCode;
        $this->view("landings/second_service",$data);
    }else{
    $this->view("landings/first_service",$data);
    }
    

}


public function final($id){

    $data=Landing::fetchLanding($id);

$this->view("landings/final",$data);

}

public function SendOTPrequest1($service,$mobileNumber,$token1=null,$service_id=null,$service_name=null,$shortCode){
    

    if($service=="ErtebatCell"){

$obj=new $service;

$data= $obj->send($mobileNumber,$token1);

$data=json_decode($data,true);
    if($data['status']=="true"){
$_SESSION['confirm_data']=$this->getCurrentDate();
        $ins=[
            "number"=>$mobileNumber,
            "otp_refrence"=>$data['otpRefrence'],
            "camp_id"=>$_SESSION['camp_id'],
            "shortCode"=>$shortCode,
            "landing_id"=>$_SESSION['landing_id']->land_id
        ];

        Landing::InsertUser($ins);
    $data=json_encode($data);
    print_r($data);
    }
    }
    
    if($service=="Pardis"){
        $obj1=new $service;
    
        $out= $obj1->send($mobileNumber,$token1,$service_id);

        $out=json_decode($out,true);
        if($out['status']=="true"){
$_SESSION['confirm_data']=$this->getCurrentDate();
            $ins=[
                "number"=>$mobileNumber,
                "otp_refrence"=>$out['otpRefrence'],
                "camp_id"=>$_SESSION['camp_id'],
                "shortCode"=>$shortCode,
                "landing_id"=>$_SESSION['landing_id']->land_id
            ];
    
            Landing::InsertUser($ins);
        $out=json_encode($out);
        print_r($out);
        }

    }
    if($service=="hubShiraz"){
        $obj2=new $service;
    
        $dataa= $obj2->send($mobileNumber,$token1,$service_id,$service_name);
        $dataa=json_decode($dataa,true);
        if($dataa['status']=="true"){
$_SESSION['confirm_data']=$this->getCurrentDate();
            $ins=[
                "number"=>$mobileNumber,
                "otp_refrence"=>$dataa['otpRefrence'],
                "camp_id"=>$_SESSION['camp_id'],
                "shortCode"=>$shortCode,
                "landing_id"=>$_SESSION['landing_id']->land_id
            ];
    
            Landing::InsertUser($ins);
        $dataa=json_encode($dataa);
        print_r($dataa);
        }

    }

}
public function SendConfirmRequest($service,$confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id=null,$service_name=null,$shortCode){
    
    if($service=="ErtebatCell"){
    $obj=new $service;

    $data= $obj->confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile);
    $data=json_decode($data,true);
    if($data['status']=="true"){
        $ins=$data['otp_refrence'];
        Landing::UpdateUser($ins);
        $_SESSION['success_data']=$this->getCurrentDate();
            
           $param=[
            "phone_number"=>$mobile,
            "userip"=>$_SESSION['ip'],
            "otp_request_date"=>$_SESSION['request_data'],
            "otp_confirm_date"=>$_SESSION['confirm_data'],
            "otp_success_date"=>$_SESSION['success_data'],
            "transaction_id"=>$transaction_id,
            "device_model"=>$_SESSION['type'],
            "os"=>$_SESSION['os'],
            "browser"=>$_SESSION['type'],
            "service_id"=>$shortCode
           ];
           $arr['data']=json_encode($param);
           
        
       echo CallAPI("POST","http://log.paneltaak.com/logapi.php",$arr);
      
        //echo "true";
    }
   
    

    }


    if($service=="Pardis"){
        $obj1=new $service;
    
        $ou= $obj1->confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id,$shortCode);
        $ou=json_decode($ou,true);
        if($ou['status']=="true"){
            $ins=$ou['otp_refrence'];
            Landing::UpdateUser($ins);
            $_SESSION['success_data']=$this->getCurrentDate();
            $param=[
                "phone_number"=>$mobile,
                "userip"=>$_SESSION['ip'],
                "otp_request_date"=>$_SESSION['request_data'],
            "otp_confirm_date"=>$_SESSION['confirm_data'],
            "otp_success_date"=>$_SESSION['success_data'],
                "transaction_id"=>$transaction_id,
                "device_model"=>$_SESSION['type'],
                "os"=>$_SESSION['os'],
                "browser"=>$_SESSION['type'],
                "service_id"=>$shortCode
               ];
               $arr['data']=json_encode($param);
            
          echo  CallAPI("POST","http://log.paneltaak.com/logapi.php",$arr);
           // echo "true";
        }

    }

    if($service=="hubShiraz"){
        $obj2=new $service;
    
        $dat= $obj2->confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id=null,$service_name);
        $dat=json_decode($dat,true);
        if($dat['status']=="true"){
            $ins=$dat['otp_refrence'];
            Landing::UpdateUser($ins);
            $_SESSION['success_data']=$this->getCurrentDate();
            $param=[
                "phone_number"=>$mobile,
                "userip"=>$_SESSION['ip'],
                "otp_request_date"=>$_SESSION['request_data'],
            "otp_confirm_date"=>$_SESSION['confirm_data'],
            "otp_success_date"=>$_SESSION['success_data'],
                "transaction_id"=>$transaction_id,
                "device_model"=>$_SESSION['type'],
                "os"=>$_SESSION['os'],
                "browser"=>$_SESSION['type'],
                "service_id"=>$shortCode
               ];
               $arr['data']=json_encode($param);
            
          echo  CallAPI("POST","http://log.paneltaak.com/logapi.php",$arr);
          //  echo "true";
        }
       

    }


}
public function addToken(){

if(isset($_POST['token'])){

$tk=trim($_POST['token']);

if(Landing::addTkn($tk)){

  echo "token Added";
}else{
  echo "somthing Wrong";
}



}




}











}



