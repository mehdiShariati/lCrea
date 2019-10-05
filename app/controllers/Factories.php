<?php
namespace app\controllers;
use app\liberaries\Controller;
use app\models\Factory as factModel;

class Factories extends Controller{

    private $factoryModel;

    public function __construct(){

    }


    public function create(){
   
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $data=[
                "name"=>trim($_POST['name']),
                "implemented_class"=>trim($_POST['imp_class']),
                "service_identifier"=>trim($_POST['service_identifier']),
                "shortCode"=>trim($_POST['ShortCode']),
                "token"=>trim($_POST['token']),
                "name_err"=>"",
                "imp_err"=>"",
                "s_id_err"=>"",
                "shortC_err"=>"",
                "token_err"=>""];
                    
                if(empty($data['name'])){
                    $data['name_err']="نام سرویس نیمتواند خالی باشد";

                }
                if(empty($data['implemented_class'])){
                    $data['imp_err']="سرویس دهنده نمیتواند خالی باشد";

                }
                if(empty($data['service_identifier'])){
                    $data['s_id_err']="شناسه سرویس نمیتواند خالی باشد";

                }
                if(empty($data['shortCode'])){
                    $data['shortC_err']=" سرشماره سرویس نیمتواند خالی باشد";

                }
                if(empty($data['name_err']) && empty($data['imp_err']) && empty($data['s_id_err']) && empty($data['shortC_err']) ){



                    factModel::insertService($data);
                    redirect("Factories/manageServices");




                }










        }else{
          
         $data['imp_class']=["Pardis","hubShiraz","ErtebatCell"];
            
           $this->view("landing_factory/create_service",$data);
        }







    }
    public function editService($id){
        if($_SERVER['REQUEST_METHOD']=="POST"){
           
            $data=[
                "name"=>trim($_POST['name']),
                "implemented_class"=>trim($_POST['imp_class']),
                "service_identifier"=>trim($_POST['service_identifier']),
                "shortCode"=>trim($_POST['ShortCode']),
                "token"=>trim($_POST['token']),
                "id"=>$id,
                "name_err"=>"",
                "imp_err"=>"",
                "s_id_err"=>"",
                "shortC_err"=>"",
                "token_err"=>""];
                    
                if(empty($data['name'])){
                    $data['name_err']="نام سرویس نیمتواند خالی باشد";

                }
                if(empty($data['implemented_class'])){
                    $data['imp_err']="سرویس دهنده نمیتواند خالی باشد";

                }
                if(empty($data['service_identifier'])){
                    $data['s_id_err']="شناسه سرویس نمیتواند خالی باشد";

                }
                if(empty($data['shortCode'])){
                    $data['shortC_err']=" سرشماره سرویس نیمتواند خالی باشد";

                }
                if(empty($data['name_err']) && empty($data['imp_err']) && empty($data['s_id_err']) && empty($data['shortC_err']) ){
                    print_r($data);
                    factModel::UpdateService($data);
                    redirect("Factories/manageServices");

                }else{
        $data['srv']=factModel::FetchSpecificService($id);
        $data['imp_class']=GetAllclassesWithCertainInterface();
        $this->view("landing_factory/edit_service",$data);
                }
                
            }else{

                $data=[
                    "name"=>"",
                    "implemented_class"=>"",
                    "service_identifier"=>"",
                    "shortCode"=>"",
                    "token"=>"",
                    "name_err"=>"",
                    "imp_err"=>"",
                    "s_id_err"=>"",
                    "shortC_err"=>"",
                    "token_err"=>""
                ];

                $data['srv']=factModel::FetchSpecificService($id);
                $data['imp_class']=["hubShiraz","ErtebatCell","Pardis"];
                $this->view("landing_factory/edit_service",$data);
                }



    }



    public function createLanding(){
        $data['services']=factModel::FetchAllServices();
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['is_double'])){ $dbl=trim($_POST['is_double']);}else{$dbl=0;}
                
            $data=[
                "landing_name"=>trim($_POST['landing_name']),
                "service_id1"=>trim($_POST['service_id1']),
                "background_color"=>trim($_POST['background_color']),
                "step_send_text"=>trim($_POST['step_send_text']),
                "step_confirm_text"=>trim($_POST['step_confirm_text']),
                "link_download_service1"=>trim($_POST['link_download_service1']),
                "link_download_service2"=>trim($_POST['link_download_service2']),
                // colors
                "color_send_text"=>trim($_POST['color_step_send_text']),
                "color_step_confirm_text"=>trim($_POST['color_step_confirm_text']),
                "color_success_text_firstService"=>trim($_POST['color_success_text_firstService']),
                "color_service2_send_text"=>trim($_POST['color_service2_send_text']),
                "color_service2_confirm_text"=>trim($_POST['color_service2_confirm_text']),
                "color_final_text"=>trim($_POST['color_final_page_text']),
                "rules1"=>$_POST['rules1'],
                "rules2"=>$_POST['rules2'],
                //service 1 images
                "animate_image1"=>"",
                "step1_image"=>"",
                "step2_image"=>"",
                
                "color_input_number"=>trim($_POST['color_input_number']),
                "color_button_submit"=>trim($_POST['color_button_submit']),
                "is_double"=>$dbl,
               'service_id2'=>trim($_POST['service_id2']),
                "success_text_firstService"=>trim($_POST['success_text_firstService']),
                "service2_send_text"=>trim($_POST['service2_send_text']),
                "service2_confirm_text"=>trim($_POST['service2_confirm_text']),
                "final_page_text"=>trim($_POST['final_page_text']),
                //service 1 errors
                "landing_name_err"=>"",
                "service_id_err"=>"",
                "background_color_err"=>"",
                "step_send_text_err"=>"",
                "step_confirm_text_err"=>"",
                //service 2 errors
                "service_id2_err"=>"",
                "success_text_firstService_err"=>"",
                "service2_send_text_err"=>"",
                "service2_confirm_text_err"=>"",
                "final_page_text_err"=>"",
                //final page image
                "final_page_image"=>"",
            ];


            //this section for uploading images
            $data['animate_image1']=upImage("animate_image1");
            $data['step1_image']=upImage("step1_image");
            $data['step2_image']=upImage("step2_image");
            $data['final_page_image']=upImage("final_page_image");
            //validate data
            if($data['service_id1']==""){$data['landing_name_err']="نام لندینگ نمیتواند خالی باشد";}
            if($data['landing_name']==""){$data['service_id_err']="  سرویس دهدنه نمیتواند خالی باشد";}
            if($data['background_color']==""){$data['background_color_err']="رنگ پس ضمینه نمیتواند خالی باشد";}
            if($data['step_send_text']==""){$data['step_send_text_err']="متن اصلی سرویس دهنده نمیتواند خالی باشد";}
            if($data['step_confirm_text']==""){$data['service2_confirm_text_err']="متن تایید نمیتواند خالی باشد";}
           
            if(empty($data['landing_name_err'])){
           
            if(factModel::InsertLanding($data)){

                redirect("Factories/showAllLandings");
            }else{
                back();
            }
            
            }else{

                $data['services']=factModel::FetchAllServices();
                $data=[
                    "landing_name"=>"",
                    "service_id1"=>"",
                    "background_color"=>"",
                    "step_send_text"=>"",
                    "step_confirm_text"=>"",
                    //service 1 images
                    "animate_image1"=>"",
                    "step1_image"=>"",
                    "step2_image"=>"",
                    
                    "is_double"=>"",
                   'service_id2'=>"",
                    "success_text_firstService"=>"",
                    "service2_send_text"=>"",
                    "service2_confirm_text"=>"",
                    "final_page_text"=>"",
                ];
                $this->view("landing_factory/create_landing",$data);

            }






            
            

            }else{
          


          $this->view("landing_factory/create_landing",$data);

        }






    }
    

public function showAllLandings(){

$data=factModel::fetchAllLanding();


$this->view("landing_factory/showAllLandings",$data);



}


public function preView($id)
{

$data=fetchSpecificLanding($id);

$this->view("landing_factory/preView",$data);


}


public function createCampain($id){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $data=[
            "name"=>trim($_POST['name']),
            "camp_id"=>trim($_POST['camp_id']),
            "link"=>trim($_POST['link']),
            "l_id"=>trim($_POST['land_id']),
            "token1"=>"",
            "token2"=>"",
            "name_err"=>"",
            "camp_id_err"=>"",
            "link_err"=>'',
            "insert_result"=>""    
        ];     
        if(empty($data['name'])){

            $data['name_err']="نام کمپین نمیتواند خالی باشد";
        }
        if(empty($data['camp_id'])){

            $data['camp_id_err']="شناسه کمپین نمیتواند خالی باشد";
        }
        if(empty($data['link'])){

            $data['camp_id_err']="url نمیتواند خالی باشد";
        }
     
     

        if(empty($data['camp_id_err']) && empty($data['name_err']) && empty($data['link_err'])){
                
            $temp=factModel::fetchSpecificLanding($data['l_id']);
            if($temp->is_double==1){
                //if 2 service exist in db
                $helper_value_for_service1=factModel::FetchSpecificService($temp->service_id1);
                $data['token1']=$helper_value_for_service1->shortCode.uniqid("-xaswertyuixcbo");
                $helper_value_for_service2=factModel::FetchSpecificService($temp->service_id2);
                $data['token2']=$helper_value_for_service2->shortCode.uniqid("-xaswertyuixcbo");
                print_r($data);
            }else{
                //if just have 1 service
                $helper_value_for_service1=factModel::FetchSpecificService($temp->service_id1);
                $data['token1']=$helper_value_for_service1->shortCode.uniqid("-xaswertyuixcbo");
            }




            if(factModel::insertCampain($data)){
                redirect("Factories/showCampains/".$data['l_id']);
            }else{
           $data['landing']=$this->factoryModel->fetchSpecificLanding($id);
            $this->view("landing_factory/createCampain",$data);
        }
            
    }else{
        $data['landing']=factModel::fetchSpecificLanding($id);
        $this->view("landing_factory/createCampain",$data);

    }
    

    }else{

        $data=[

            "name"=>"",
            "camp_id"=>"",
            "name_err"=>"",
            "camp_id_err"=>""
          
        ];

        $data['landing']=factModel::fetchSpecificLanding($id);



        $this->view("landing_factory/createCampain",$data);

    }



}


public function showCampains($id){
$data['camps']=factModel::fetchCampainsWithLandID($id);
$data['camp_users']=factModel::fetchAllCampUsers();
$data['id']=$id;
$this->view("landing_factory/showCampainsOfLand",$data);

}

public function manageCampains(){
    $data=factModel::fetchAllLanding();

    $this->view("landing_factory/manageCampain",$data);


}

public function manageServices(){
   $data=factModel::FetchAllServices();
    $this->view("landing_factory/manageServices",$data);
}
public function delService($id){
    factModel::deleteService($id);
    back();
}

public function delLanding($id){

    factModel::deleteLanding($id);

    back();
}

public function delCamp($id){

    factModel::DeleteCamp($id);
    back();


}

public function edit_camp($id){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $data=[
            "name"=>trim($_POST['name']),
            "camp_id"=>trim($_POST['camp_id']),
            "link"=>trim($_POST['link']),
            "l_id"=>trim($_POST['land_id']),
            "id"=>$id,
            "name_err"=>"",
            "camp_id_err"=>"",
            "link_err"=>'',
            "status"=>trim($_POST['status']) 
        ];     
        if(empty($data['name'])){

            $data['name_err']="نام کمپین نمیتواند خالی باشد";
        }
        if(empty($data['camp_id'])){

            $data['camp_id_err']="شناسه کمپین نمیتواند خالی باشد";
        }
        if(empty($data['link'])){

            $data['camp_id_err']="url نمیتواند خالی باشد";
        }
     
     

        if(empty($data['camp_id_err']) && empty($data['name_err']) && empty($data['link_err'])){
                 
            factModel::updateCampain($data);
            redirect("Factories/showCampains/".$data['l_id']);


        }
        
    }else{



$data['update']=factModel::fetchSpecificCampain($id);
$this->view("landing_factory/edit_camp",$data);
        }
}


public function preViews($id,$is_double=null,$final=null){
    
    $data=factModel::fetchSpecificLanding($id);
    $_SESSION['id']=$id;
    $_SESSION['is_double']=$data->is_double;
    if(isset($final) && $final == "okey" ){
    
        $this->view("landing_factory/preView3",$data);
    
    }else{
    $tmp_srvic=factModel::FetchSpecificService($data->service_id1);

if(isset($is_double) && $is_double == 1 ){
    $tmp_srvic2=factModel::FetchSpecificService($data->service_id2);
    $this->view("landing_factory/preView2",$data);
}else{
$this->view("landing_factory/preView1",$data);
}


    }
}

public function ChangeBgColor($id){

if(isset($_POST['color'])){
    $color=$_POST['color'];

    factModel::changeColor($id,$color);
echo "true";    
}else{
    echo "false";
}
}

public function ChangeAnimateImage($id){
   
    $name=upImage("fileup");

    factModel::ChangeAnimePic($id,$name);
  echo $name;
}
public function ChangeStepImage($id){
  
    $name=upImage("stepUp");

    factModel::ChangeStepPic($id,$name);
  echo $name;
}
public function ChangeFinalImage($id){
  $name=upImage("fileup");

  factModel::ChangeFinlPic($id,$name);
  echo $name;
}



public function changeSendText($id){

if(isset($_POST['color_text']) &&  isset($_POST['sendText'])){

    $color=$_POST['color_text'];
    $text=$_POST['sendText'];
    $color2=$_POST['boxclrTxt'];
    factModel::changesendTextFirst($id,$color,$text,$color2);
    echo $text."-".$color;
    
}



}
public function ChangeBoxColor()
{
$color=$_POST['color'];
$id=$_POST['id'];
if(factModel::changeBoxNumColor($color,$id)){
    echo $color;
}
echo false;

}
public function ChangeSubmitColor(){
    $color=$_POST['color'];
    $id=$_POST['id'];
    if(factModel::changeSubColor($color,$id)){
        echo $color;
    }
    echo false;


}
public function ChangeStep2Image($id){
  
    $name=upImage("stepUp2");

    factModel::ChangeStepPic2($id,$name);
  echo $name;
}

public function changeSendText2($id){

    if(isset($_POST['color_text2']) &&  isset($_POST['sendText2'])){
    
        $color=$_POST['color_text2'];
        $text=$_POST['sendText2'];
        factModel::changesendTextSecond($id,$color,$text);
        echo $text."-".$color;
        
    }
}
public function changeSuccessSendText($id){
    if(isset($_POST['color_text']) &&  isset($_POST['sendText1'])){
    
        $color=$_POST['color_text'];
        $text=trim($_POST['sendText1']);
        factModel::changeSuccessSend($id,$color,$text);
        echo $text."-".$color;
        
    }

}
public function changeconfirmService2($id){
    if(isset($_POST['color_text3']) &&  isset($_POST['sendText3'])){
    
        $color=$_POST['color_text3'];
        $text=trim($_POST['sendText3']);
        factModel::changeConfirmSend($id,$color,$text);
        echo $text."-".$color;
        
    }

}
public function changeFinal($id){
    if(isset($_POST['color_text3']) &&  isset($_POST['sendText3'])){
    
        $color=$_POST['color_text3'];
        $text=trim($_POST['sendText3']);
        factModel::changeFinaltext($id,$color,$text);
        echo $text."-".$color;
        
    }

}








public function changesendTextService2($id){
    if(isset($_POST['color_text2']) &&  isset($_POST['sendText2'])){
    
        $color=$_POST['color_text2'];
        $text=trim($_POST['sendText2']);
        factModel::changeSendText2($id,$color,$text);
        echo $text."-".$color;
        
    }

}
public function addTonalite($id){
$color1=$_POST['fclr'];
$color2=$_POST['eclr'];

factModel::addtonalite($id,$color1,$color2);

echo true;
}


 public function editLanding($id){
      
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $temp=factModel::fetchSpecificLanding($id);
            $data=[
                "landing_name"=>trim($_POST['landing_name']),
                "id"=>$id,
          
              
                "step_send_text"=>trim($_POST['step_send_text']),
                "step_confirm_text"=>trim($_POST['step_confirm_text']),
                "link_download_service1"=>trim($_POST['link_download_service1']),
                "link_download_service2"=>trim($_POST['link_download_service2']),
               
               
                "rules1"=>$_POST['rules1'],
                "rules2"=>$_POST['rules2'],
                //service 1 images
                "animate_image1"=>"",
                "step1_image"=>"",
                "step2_image"=>"",
                
           

                "success_text_firstService"=>trim($_POST['success_text_firstService']),
                "service2_send_text"=>trim($_POST['service2_send_text']),
                "service2_confirm_text"=>trim($_POST['service2_confirm_text']),
                "final_page_text"=>trim($_POST['final_page_text']),
                //service 1 errors
                "landing_name_err"=>"",
                "service_id_err"=>"",
              
                "step_send_text_err"=>"",
                "step_confirm_text_err"=>"",
                //service 2 errors
                "service_id2_err"=>"",
                "success_text_firstService_err"=>"",
                "service2_send_text_err"=>"",
                "service2_confirm_text_err"=>"",
                "final_page_text_err"=>"",
                //final page image
                "final_page_image"=>"",
            ];


            if($nm1=upImage("animate_image1")){
                $data['animate_image1']=$nm1;
            }else{
                $data['animate_image1']=$temp->animate_image1;
            }

            if($nm2=upImage("step1_image")){
                $data['step1_image']=$nm2;
            }else{
                $data['step1_image']=$temp->step1_image;
            }

            if($nm3=upImage("step2_image")){
                $data['step2_image']=$nm3;
            }else{
                $data['step2_image']=$temp->step2_image;
            }

            if($nm4=upImage("final_page_image")){
                $data['final_page_image']=$nm4;
            }else{
                $data['final_page_image']=$temp->final_page_image;
            }


            if($data['landing_name']==""){$data['service_id_err']="  &#1587;&#1585;&#1608;&#1740;&#1587; &#1583;&#1607;&#1583;&#1606;&#1607; &#1606;&#1605;&#1740;&#1578;&#1608;&#1575;&#1606;&#1583; &#1582;&#1575;&#1604;&#1740; &#1576;&#1575;&#1588;&#1583;";}
          
            if($data['step_send_text']==""){$data['step_send_text_err']="&#1605;&#1578;&#1606; &#1575;&#1589;&#1604;&#1740; &#1587;&#1585;&#1608;&#1740;&#1587; &#1583;&#1607;&#1606;&#1583;&#1607; &#1606;&#1605;&#1740;&#1578;&#1608;&#1575;&#1606;&#1583; &#1582;&#1575;&#1604;&#1740; &#1576;&#1575;&#1588;&#1583;";}
            if($data['step_confirm_text']==""){$data['service2_confirm_text_err']="&#1605;&#1578;&#1606; &#1578;&#1575;&#1740;&#1740;&#1583; &#1606;&#1605;&#1740;&#1578;&#1608;&#1575;&#1606;&#1583; &#1582;&#1575;&#1604;&#1740; &#1576;&#1575;&#1588;&#1583;";}

            if(empty($data['landing_name_err'])){
           
                if(factModel::editLanding($data)){
    
                    redirect("Factories/showAllLandings");
                }else{
                    back();
                }
                
                }else{
    
                    $data['services']=factModel::FetchAllServices();
                    $data=[
                        "landing_name"=>"",
                        "service_id1"=>"",
                      
                        "step_send_text"=>"",
                        "step_confirm_text"=>"",
                        //service 1 images
                        "animate_image1"=>"",
                        "step1_image"=>"",
                        "step2_image"=>"",
                        
                        "is_double"=>"",
                       'service_id2'=>"",
                        "success_text_firstService"=>"",
                        "service2_send_text"=>"",
                        "service2_confirm_text"=>"",
                        "final_page_text"=>"",
                    ];
                    $this->view("landing_factory/editLanding",$data);
    
                }


                


            
        }else{

            $data=factModel::fetchSpecificLanding($id);
            $this->view("landing_factory/editLanding",$data);

        }

      

        




    }
    









}