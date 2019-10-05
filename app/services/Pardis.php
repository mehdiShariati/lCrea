<?php

class Pardis implements IotpHandler {

    function send($phone_number,$token,$service_id=null,$service_name=null){

        $curl = curl_init();

        $json = '{"token":"1acac612c129235f9c31aa75adaabc48","serviceid":"'.$service_id.'","method":"Request","mobile":"'.$phone_number.'"}';
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://94.232.169.68/pardis/otp.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "json=".$json,
          CURLOPT_HTTPHEADER => array(
            //"Cache-Control: no-cache",
            //"Content-Type: application/json",
            //"Postman-Token: 9610ff3e-224b-4a5a-a988-6af2ba4dab6c"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        $temp=json_decode($response);
       
        if($temp->StatusCode=="200"){

          $outPut["status"]="true";
          $outPut["transActionId"]=$temp->OTPTransactionId;
          $outPut["otpRefrence"]=$temp->ReferenceCode;

          $outPut=json_encode($outPut);
          return $outPut;
        }



    }




    function confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id=null,$service_name=null){


        $curl = curl_init();

        $json = '{"token":"1acac612c129235f9c31aa75adaabc48","serviceid":"'.$service_id.'","method":"Confirm","mobile":"'.$mobile.'","OTPTransactionId":"'.$transaction_id.'","PIN":"'.$confirm_code.'"}';
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://94.232.169.68/pardis/otp.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "json=".$json,
          CURLOPT_HTTPHEADER => array(
            //"Cache-Control: no-cache",
            //"Content-Type: application/json",
            //"Postman-Token: 9610ff3e-224b-4a5a-a988-6af2ba4dab6c"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        $temp=json_decode($response);
        
        if($temp->StatusCode=="200"){

          $outPut["status"]="true";
          $outPut["otp_refrence"]=$otpreferenceCode;
         
        
          $outPut=json_encode($outPut);
          return $outPut;
        }







    }




}