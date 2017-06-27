<?php
class database{
private static $con=null;
private static function connect(){
    self::$con=mysqli_connect('localhost','root','','test1');
    return self::$con;
}

private static function disconnect(){
    mysqli_close(self::$con);
    self::$con=null;
}

public function getCat(){
    $conn=database::connect();
    $sql="select * from cat_tbl";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}
public function addCat($cat_name){

    $conn=database::connect();
    $sql="insert into cat_tbl (cat_name) values('". $cat_name ."')";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}






public function deleteCat($cat_id){
    $conn=database::connect();
    $sql="delete from cat_tbl where cat_id='".$cat_id."'";
    $res=$conn->query($sql);
    database::disconnect();
    return $res;
}

public function updateCat($cat_id,$cat_name)
{
 $conn=database ::connect();
    $sql="update cat_tbl set cat_name='". $cat_name ."' where cat_id='". $cat_id ."'";
    $res=$conn->query($sql);
    database ::disconnect();
    return $res;
   
}


}

?>