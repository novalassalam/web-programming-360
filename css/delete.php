<?php
// Process delete operation after confirmation
require_once "config.php";

if(isset($_GET["id"])){
$id= $_GET["id"];
$query = "DELETE from user where id_user = $id";
    // Prepare a delete statement
    $sql = $mysqli->query($query);

    if($sql){
       header( 'Location: http://localhost/github/PW_phb/css/index.php' );
    } else{
        echo "Something went wrong. Please try again later.";
    }

    

}
?>