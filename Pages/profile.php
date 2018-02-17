<?php 




if (isset($_GET["id"]) && $_GET["id"] != "" ){
	include "Pages/Profile/".$_GET["id"].".html";
}else{

	echo "Not Found Profile ";
	
}
