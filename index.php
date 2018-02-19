<?php 


include_once 'include/setting.php';
// This Error 

$url = explode("/", $_SERVER["REQUEST_URI"]);
$path = $url[2] == "" ? "MPage": $url[2];

if ( sizeof($url) > 3 ){
    header("Location:/".$url[1]."/".$path);
}

$url = explode("?",$path);

if (sizeof($url) == 2){

    $path = $url[0];
    
}



include_once "Pages/layout/header.php";



if (file_exists("Pages/".$path.".php")){

    include_once("Pages/".$path.".php");

}else{ 

    include_once("Pages/MPage.php");

}


include_once "Pages/layout/foter.php";


?>
