<?php

class hubShiraz implements IotpHandler {

    function send($phone_number,$token,$service_id=null,$service_name){

        $curl = curl_init();


        $data=array( "phone"=>$phone_number,"serviceName"=>$service_name,"type"=>"send");
        $data=json_encode($data);
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://79.175.166.98/hubshiraz/sendOtp.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data,
          CURLOPT_HTTPHEADER => array(
            "Content-Type:application/x-www-form-urlencoded",
            "api-key:".$token
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        $temp=json_decode($response,true);
        
    
        

         if($temp['code']=="200"){
           $new["status"]="true";
           $new["transActionId"]=$temp['OtpTransactionId'];
           $new["otpRefrence"]=$temp['OtpTransactionId'];
         
           $new=json_encode($new);
         
           return $new;

     }
  }

    function confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id=null,$service_name){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>"http://79.175.166.98/hubshiraz/subscribeOtp.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{\n  \"phone\":\"$mobile\",\n  \"code\":\"$confirm_code\",\n  \"OtpTransactionId\":\"$transaction_id\",\n  \"serviceName\":\"$service_name\"\n}",
          CURLOPT_HTTPHEADER => array(
            "Content-Type:application/x-www-form-urlencoded",
            "api-key:".$token
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
       
          $temp=json_decode($response);
         
          if($temp->code=="200"){
  
            $data["status"]="true";
          $data["otp_refrence"]=$transaction_id;
 

         $data=json_encode($data);
          return $data;
          }
        } 
        


    





      }
    
  