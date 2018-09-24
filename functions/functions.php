<?php 

include "db.php";

function isloggedin(){
	session_start(); 
	if(isset($_SESSION["user_type"])){
    	if($_SESSION["user_type"] == 0){
        	header('Location: ./index.php');
    	}
	}else{
    	header('Location: ./index.php');
	}	
}

function fetchFeatured($con,$id){
	$sql = "SELECT tbl_products.*,tbl_category.name as category_name FROM `tbl_products` JOIN tbl_category ON tbl_products.category_id = tbl_category.id";
	if($id!=0){
		$sql = $sql." WHERE category_id = '$id'";
	}
	$sql = $sql." ORDER BY `quantity` DESC LIMIT 6";
    $featured = $con->query($sql);
    if(!$featured){
    	return($con->error);
    }
    return($featured); 
}

function fetchPopular($con,$id){
	$sql = "SELECT tbl_products.*,tbl_category.name as category_name FROM `tbl_products` JOIN tbl_category ON tbl_products.category_id = tbl_category.id";
	if($id!=0){
		$sql = $sql." WHERE category_id = '$id'";
	}
	$sql = $sql." LIMIT 6";
    $popular = $con->query($sql);
    if(!$popular){
    	return($con->error);
    }
    return($popular);
}

function fetchNewArrivals($con,$id){
	$sql = "SELECT tbl_products.*,tbl_category.name as category_name FROM `tbl_products` JOIN tbl_category ON tbl_products.category_id = tbl_category.id";
	if($id!=0){
		$sql = $sql." WHERE category_id = '$id'";
	}
	$sql = $sql." ORDER BY `created_at` DESC LIMIT 6";
    $newArrivals = $con->query($sql);
    if(!$newArrivals){
    	return($con->error);
    }
    return($newArrivals);
}

?>