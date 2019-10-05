<?php
### in ro baraye tavabeyi k braye jabe jaye beyne safahat niaz darami mminivisim


function redirect($page){

    return header("location:".URL_ROOT."/".$page);
}
function back(){

    header("location:".$_SERVER["HTTP_REFERER"]);
}


// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
   // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
   
    curl_close($curl);

    return $result;
}


function GetAllclassesWithCertainInterface(){

    dd($classes = get_declared_classes());
    $implementsIModule = array();
    foreach($classes as $klass) {
       $reflect = new ReflectionClass($klass);
       if($reflect->implementsInterface('IotpHandler')) 
          $implementsIModule[] = $klass;
      
    }


return $implementsIModule;



}

//function for upload image
function upImage($name){
    $uploadDirectory = PUBLIC_ROOT."/image/";
    $fileName = $_FILES[$name]['name'];
    $fileTmpName  = $_FILES[$name]['tmp_name'];
    $uploadPath =$uploadDirectory.$fileName; 
    if(move_uploaded_file($fileTmpName, $uploadPath)){
        return $fileName;
        
    }

}

function getServiceName($id){
   
   $res= \app\models\Service::where('id',$id)->first();
    return $res->service_name;





}
//this function is for dashboard
function getLandingCount(){
    $db=\app\models\Landing::all()->count();
            
    return $db; 
    }
    function getCampainCount(){
        $db=\app\models\Campain::all()->count();
            
        return $db; 
        }
        function getTotalUser(){
            $db=\app\models\Camp_user::all()->count();
            
            return $db; 
            }
            function getActiveUsers(){
                $db=\app\models\Camp_user::all()->where('status',"=","1");
            
                return $db; 
            }
            //end function dashboard

             function countTotalUser($camp_id){
               $db=\app\models\Camp_user::where("camp_id","=",$camp_id )->where('status',"=","1");
              
               return $db;
                }

                function countUserWithToken($token,$camp_id){
                    $temp=explode("-",$token);
                    $db=\app\models\Camp_user::where("camp_id","=",$camp_id)->where("shortCode","=",$temp['0'])->where("status","=","1")->count();
                  
                    echo $db;

                }
                
 function isLogin(){

    if(isset($_SESSION['user_id'])){

        return true;
    }else{

        return false;
    }


}