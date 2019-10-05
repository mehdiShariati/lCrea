<?php

//namespace app\liberaries;
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule=new Capsule();
$capsule->addConnection([
    'driver'=>'mysql',
    'database'=>DB_NAME,
    'host' => DB_HOST,
    "username"=>USERNAME,
    "password"=>PASSWORD,
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'=>""
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
#database impelemented by PDO mehod
#this will connect to database
#query safe with place holder
#execute query with this section of my  project
// class Database{
//     #refrence to config file
//     private $host=DB_HOST;
//     private $dbName=DB_NAME;
//     private $user=USERNAME;
//     private  $password=PASSWORD;
//     private $stmt;
//     private $dbh;
//     private $error;
//     public function __construct()
//     {
//       $option=array(   
//          PDO::ATTR_PERSISTENT=>true,
//             PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//         );
//         //PDO instantiate with PDO
//         // this is optional and i use it because its better than use with out try catch block
//         try{
//         $this->dbh=new PDO("mysql:host=" .$this->host . ";dbname=$this->dbName",$this->user,$this->password,$option);
//         }catch (PDOException $e){
//             $this->error=$e->getMessage();
//                 echo $this->error;
//         }
//     }
//     public function query($sql){
//         $this->stmt=$this->dbh->prepare($sql);
//     }
//     public function bindVal($param,$value,$type=null){
//     if(is_null($type)){
//     switch (true){
//         case is_int($value):
//             $type=PDO::PARAM_INT;
//             break;
//         case is_bool($value):
//             $type=PDO::PARAM_INT;
//             break;
//         case is_null($value):
//             $type=PDO::PARAM_NULL;
//             break;
//         default:
//             $type=PDO::PARAM_STR;
//     }
//     $this->stmt->bindValue($param,$value,$type);
//     }
//     }
//     //execute prepare statement
//     public function execute(){
//         return $this->stmt->execute();
//     }
//     //get result set as array of objects
//     public function resultSet()
//     {
//          $this->execute();
//             return $this->stmt->fetchAll(PDO::FETCH_OBJ);
//     }
//     //for single querys obj model
//     public function single(){
//         $this->execute();
//         return $this->stmt->fetch(PDO::FETCH_OBJ);
//     }
//     public function rowCount(){
//     return $this->stmt->rowCount();
//     }
// }