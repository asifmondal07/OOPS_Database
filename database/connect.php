<?php
class databse{
    public function connect(){
        $this->host='localhost';
        $this->user='root';
        $this->pass='';
        $this->database='oopscrud';
        $conn= new mysqli( $this->host,$this->user,$this->pass,$this->database);
        
        return $conn;
    }
    
}
class queries extends databse{
    public function getdata(){
        $sql="SELECT * FROM data";
        $data=$this->connect()->query($sql);
        if($data->num_rows>0){
        $arr= array();
            while($result=$data->fetch_assoc()){
                $arr[]=$result;
            }
            return $arr;
        }
        else{
            echo "No Data Found";
        }
    }
  public  function adddata($data){
    $userid=mt_rand(11111,99999);
    $username=$data['username'];
    $useremail=$data['useremail'];
    $sql="INSERT INTO `data` (`user_id`, `user name`, `user email`, `datetime`) VALUES      ('$userid', '$username', '$useremail', current_timestamp())";
    $data=$this->connect()->query($sql);
    if($data){
        echo "YOUR DATA HAS BEEN ADDED";
    }
    else{
        echo"YOUR DATA NOT ADDED";
    }
    }
    public function showdataupdate($id){
        $sql="SELECT * FROM `data` WHERE user_id=$id";
        $data=$this->connect()->query($sql);
        $result=$data->fetch_assoc();
             return $result;
        }
    public function updatedata($data){
        $username=$data['username'];
        $useremail=$data['useremail'];
        $userid=$data['userid'];
        $sql="UPDATE `data` SET `user name` = '$username',`user email` = '$useremail' WHERE `data`.`user_id` = '$userid'";
        $data=$this->connect()->query($sql);
        if($data){
            echo "Update Data";
        }
    }
    public function deletedata($delid){
        $sql="DELETE FROM `data` WHERE `data`.`user_id` = $delid";
        $data=$this->connect()->query($sql);
        if($data){
            header('location:view-data.php');
        }
    }
}
// $obj= new databse();
// $obj->connect();
$obj= new queries();
$fetch_data=$obj->getdata();
// echo "<pre>";
// print_r($fecth_data);
if(isset($_POST['submit'])){
    $obj->adddata($_POST);
}
if(isset($_POST['update'])){
    $obj->updatedata($_POST);
}
if(isset($_GET['delid'])){
    $obj->deletedata($_GET['delid']);
}
?>