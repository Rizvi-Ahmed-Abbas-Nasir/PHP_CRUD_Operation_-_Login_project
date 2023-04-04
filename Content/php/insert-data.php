<?php

include 'config.php';

// if(isset($_POST["name"]) || isset($_POST["age"]) || isset($_POST["country"])){
   $input1 = file_get_contents("php://input");
    $decode=json_decode($input1,true);

    $name=$decode["name"];
    $enroll=$decode["enroll"];
    $stclass=$decode["stclass"];

    $sql="INSERT INTO student_data (std_name,std_enroll,std_class) VALUES ('{$name}', {$enroll},'{$stclass}')";
    $run_sql=mysqli_query($conn,$sql);
    if($run_sql){
        echo json_encode(["success"=>true,"message"=>"Student Add Succcessfully"]);
    }else{
        echo json_encode(["success"=>false,"message"=>"Server Problem"]);
    }
// }

?>