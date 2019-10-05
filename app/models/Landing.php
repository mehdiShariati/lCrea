<?php
namespace app\models;
use app\models\Camp_user as cmpUser;
use app\models\Service as srvModel;
use app\models\Campain as cmp;
use Illuminate\Database\Eloquent\Model as eloquent;
class Landing extends eloquent{
protected $guarded = [];



public function fetchLanding($id)
{
  return Landing::where("id",$id)->first();
}

public function callServiceByID($id)
{
   return srvModel::where("id",$id)->first();

}

public function InsertUser($data){

    $result=cmpUser::create([
        "number"=>$data['number'],
        "otp_refrence"=>$data['otp_refrence'],
        "camp_id"=>$data['camp_id'],
        "shortCode"=>$data['shortCode'],
        "landing_id"=>$data['landing_id']
    ]);
    if($result)
    {
        return true;
    }
    else
    {
        return false;

    }


}

public function UpdateUser($data){
    $this->db->query("UPDATE  camp_users set status=1 WHERE otp_refrence=:otp_refrence");
    $this->db->bindVal(":otp_refrence",$data);
   
    if($this->db->execute()){
        return true;
    }
    return false;
    
    }
    public function checkCamp($name){
        $res=cmp::where('camp_identifier',"=",$name)->where("status","=",1)->count();
      
        if($res>0){

            return true;
        }
        return false;
    }
    public function getLandId($name){
       $res=cmp::where('camp_identifier',"=",$name)->first();
       return $res->land_id;
   
      
    }








}