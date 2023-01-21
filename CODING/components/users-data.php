<?php require_once("./config.php") ?>

<?php 

header("Access-Control-Allow-Origin:*");

header("Content-type: application/json ; charset=UTF-8");

header("Access-Control-Allow-Methods:*");

header("Access-Control-Max-Age:3600:*");

header("Access-Control-Allow-Headers:*");


$callUsersData = $connect->prepare("SELECT * FROM users");
$callUsersData->execute();
$usersData = $callUsersData->fetchAll(PDO::FETCH_ASSOC);

if(!empty($usersData)){
    $JSON_data=json_encode($usersData);
    print_r($JSON_data);
    
}else{
    echo "user not found";
}
die;

?>