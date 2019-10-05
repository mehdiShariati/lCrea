<?php

class ErtebatCell implements IotpHandler {

    function send($phone_number,$token,$service_id=null,$service_name=null){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>"http://79.175.151.229/ertebat/otp/mci_request.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "mobile=".$phone_number."&token=".$token,
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Content-Type: application/x-www-form-urlencoded",
            "Postman-Token: 9610ff3e-224b-4a5a-a988-6af2ba4dab6c"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        $temp=json_decode($response);

        if($temp->status=="1"){
          $data["status"]="true";
          $data["transActionId"]=$temp->data->transcode;
          $data["otpRefrence"]=$temp->data->otpreference;

          $data=json_encode($data);
          return $data;

        }







    }
    function confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id=null,$service_name=null){

        
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://79.175.151.229//ertebat/otp/mci_confirm.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "mobile=".$mobile."&token=".$token."&code=".$confirm_code."&transcode=".$transaction_id."&otpreference=".$otpreferenceCode,
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Content-Type: application/x-www-form-urlencoded",
    "Postman-Token: 9610ff3e-224b-4a5a-a988-6af2ba4dab6c"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$temp=json_decode($response);
if($temp->status=="1"){
  $data["status"]="true";
  $data["otp_refrence"]=$temp->data->otpreference;
 

  $data=json_encode($data);
  return $data;

}

    }






}






?>