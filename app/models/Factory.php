<?php
namespace app\models;
use app\models\Service;
use app\models\Campain as cmp;
use app\models\Landing as lnd;
use app\models\Camp_user as campUser;

use Illuminate\Database\Eloquent\Model as eloquent;
class Factory extends eloquent{
private $db;
//protected $fillable=['email','password'];
public function __construct()
{
    
//$this->db=new Database();


}


public function InsertService($data){

    return Service::create([
      "implemented_class"=>$data['implemented_class'],
      "shortCode"=>$data['shortCode'],
      "token"=>$data['token'],
      "s_id"=>$data['service_identifier'],
      "service_name"=>$data['name']

    ]);
    

}

public function UpdateService($data){
    $srv=Service::find($data['id']);
    $srv->implemented_class=$data['implemented_class'];
    $srv->shortCode=$data['shortCode'];
    $srv->token=$data['token'];
    $srv->s_id=$data['service_identifier'];
    $srv->service_name=$data['name'];
    $srv->save();
    return $srv->save();;
}

public function FetchAllServices(){

return Service::all();

}

public function FetchSpecificService($id){

    return Service::find($id);
}


public function InsertLanding($data){
    $res=lnd::create([
    "landing_name"=>$data['landing_name'],
    "service_id1"=>$data['service_id1'],
    "background_color"=>$data['background_color'],
    "animate_image1"=>$data['animate_image1'],
    "step1_image"=>$data['step1_image'],
    "step2_image"=>$data['step2_image'],
    "step_send_text"=>$data['step_send_text'],
    "step_confirm_text"=>$data['step_confirm_text'],
    "is_double"=>$data['is_double'],
    "service_id2"=>$data['service_id2'],
    "success_text_firstService"=>$data['success_text_firstService'],
    "service2_send_text"=>$data['service2_send_text'],
    "service2_confirm_text"=>$data['service2_confirm_text'],
    "final_page_text"=>$data['final_page_text'],
    "final_page_image"=>$data['final_page_image'],
    "color_send_text"=>$data['color_send_text'],
    "color_step_confirm_text"=>$data['color_step_confirm_text'],
    "color_success_text_firstService"=>$data['color_success_text_firstService'],
    "color_service2_send_text"=>$data['color_service2_send_text'],
    "color_service2_confirm_text"=>$data['color_service2_confirm_text'],
    "color_final_text"=>$data['color_final_text'],
    "link_download_service1"=>$data['link_download_service1'],
    "link_download_service2"=>$data['link_download_service2'],
    "rules1"=>$data['rules1'],
    "rules2"=>$data['rules2'],
    "color_input_number"=>$data['color_input_number'],
    "color_button_submit"=>$data['color_button_submit']    

    ]);


if($res){

    return true;
}
return false;

}



public function fetchAllLanding()
{
return lnd::all();
}

public function fetchSpecificLanding($id)
{
return lnd::find($id)->first();
}

 
public function insertCampain($data){

  return  cmp::create([
      "camp_name"=>$data['name'],
      "camp_identifier"=>$data['camp_id'],
      "url"=>$data['link'],
      "land_id"=>$data['l_id'],
      "token1"=>$data['token1'],
      "token2"=>$data['token2']

    ]);
    
  
    


}

public function fetchCampainsWithLandID($id){
    return cmp::all()->where('land_id',$id);

}
public function deleteService($id){
return Service::where('id',$id)->delete();
}

public function deleteLandingWithDeleteServiceId($id){
    
      $res=lnd::where("service_id1",$id)>orWhere("service_id2",$id)->delete();

    if($res){
        return true;
    }
    return false;


}
public function deleteLanding($id){
   $res=lnd::where('id',$id)->delete();
    if($res){
        return true;
    }
    return false;

}

public function deleteCampWithLanding($id){
  return  cmp::where("land_id",$id)->delete();
   


}

public function DeleteCamp($id){
    return  cmp::where("id",$id)->delete();

}
public function updateCampain($data){
    $res=cmp::where("id",$data['id'])->first();
    $res->camp_identifier=$data['camp_id'];
    $res->camp_name=$data['name'];
    $res->url=$data['link'];
    $res->status=$data['status'];
    return $res->save();

}
public function fetchSpecificCampain($id){
return cmp::where("id",$id)->first();
}

public function fetchAllCampUsers(){
   return campUser::all()->where("status","=",1);


}
public function changeColor($id,$color){

    $res=lnd::where('id',$id)->first();
    $res->background_color=$color;
    return $res->save();


}
public function ChangeAnimePic($id,$name){


    $res=lnd::where('id',$id)->first();
    $res->animate_image1=$name;
    return $res->save();


    

}
public function ChangeFinlPic($id,$name)
{
    $res=lnd::where('id',$id)->first();
    $res->final_page_image=$name;
    return $res->save();

}
public function ChangeStepPic($id,$name)
{
    $res=lnd::where('id',$id)->first();
    $res->step1_image=$name;
    return $res->save();



}
public function ChangeStepPic2($id,$name){
    
    $res=lnd::where('id',$id)->first();
    $res->step2_image=$name;
    return $res->save();

}

public function changesendTextFirst($id,$color,$text,$color2){

    $res=lnd::where('id',$id)->first();
    $res->color_send_text=$color;
    $res->step_send_text=$text;
    $res->boxColor_send_text=$color2;
    
    return $res->save();


}

public function changesendTextSecond($id,$color,$text){
    $res=lnd::where('id',$id)->first();
    $res->color_step_confirm_text=$color;
    $res->step_confirm_text=$text;
    
    return $res->save();


}
public function editLanding($data){
    
    $this->db->query("UPDATE  landings set landing_name=:landing_name,
    animate_image1=:animate_image1,step1_image=:step1_image,step2_image=:step2_image,step_send_text=:step_send_text,
    step_confirm_text=:step_confirm_text,success_text_firstService=:success_text_firstService,
    service2_send_text=:service2_send_text,service2_confirm_text=:service2_confirm_text,final_page_text=:final_page_text,final_page_image=:final_page_image,
    link_download_service1=:link_download_service1,
    link_download_service2=:link_download_service2,rules1=:rules1,rules2=:rules2 WHERE id=:id");
   
    
    $this->db->bindVal(":landing_name",$data['landing_name']);
    $this->db->bindVal(":animate_image1",$data['animate_image1']);
    $this->db->bindVal(":step1_image",$data['step1_image']);
    $this->db->bindVal(":step2_image",$data['step2_image']);
    $this->db->bindVal(":step_send_text",$data['step_send_text']);
    $this->db->bindVal(":step_confirm_text",$data['step_confirm_text']);
    $this->db->bindVal(":success_text_firstService",$data['success_text_firstService']);
    $this->db->bindVal(":service2_send_text",$data['service2_send_text']);
    $this->db->bindVal(":service2_confirm_text",$data['service2_confirm_text']);
    $this->db->bindVal(":final_page_text",$data['final_page_text']);
    $this->db->bindVal(":final_page_image",$data['final_page_image']);
    $this->db->bindVal(":link_download_service1",$data['link_download_service1']);
    $this->db->bindVal(":link_download_service2",$data['link_download_service2']);
    $this->db->bindVal(":rules1",$data['rules1']);
    $this->db->bindVal(":rules2",$data['rules2']);
    $this->db->bindVal(":id",$data['id']);
    if($this->db->execute()){
    
        return true;
    }
    return false;
    















}
public function changeBoxNumColor($color,$id)
{
        $res=lnd::where('id',$id)->first();
        $res->color_input_number=$color;

    if($res->save()){
        return true;
    }
    return false;
    }
public function changeSubColor($color,$id){

    $res=lnd::where('id',$id)->first();
    $res->color_button_submit=$color;

    if($res->save()){
        return true;
    }
    return false;
    }


   public function changeSuccessSend($id,$color,$text)
   {
       
    $res=lnd::where('id',$id)->first();
    $res->color_success_text_firstService=$color;
    $res->success_text_firstService=$text;
    return $res->save();
  
   }
   public function changeSendText2($id,$color,$text)
   {
    $res=lnd::where('id',$id)->first();
    $res->color_service2_send_text=$color;
    $res->service2_send_text=$text;
    return $res->save();




   }
   public function changeConfirmSend($id,$color,$text)
   {
    $res=lnd::where('id',$id)->first();
    $res->color_service2_confirm_text=$color;
    $res->service2_confirm_text=$text;
    return $res->save();


   }
   public function changeFinaltext($id,$color,$text)
   {

    $res=lnd::where('id',$id)->first();
    $res->color_final_text=$color;
    $res->final_page_text=$text;
    return $res->save();
  
   }
   public function addtonalite($id,$color1,$color2){
    $res=lnd::where('id',$id)->first();
    $res->tonalite1=$color1;
    $res->tonalite2=$color2;
    return $res->save();

}
   

}