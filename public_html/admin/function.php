<?php 
require_once "../Database/db.php";
class user
{
	function login($username, $password)
	{
		$conn = connect();	
		$password = md5($password);
		$query = mysqli_query($conn,"SELECT * from user WHERE Email='$username' and Password='$password'");
		$user_data = mysqli_fetch_array($query);
		$count_row = mysqli_num_rows($query);
	
		if ($count_row >0) {			
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['uid'] = $user_data['Email'];
	            return true;
	        }			
		else{return false;}
	}
	
}

class property
{
	function getAllPropertyData()
	{
		$conn = connect();
		$query = mysqli_query($conn,"SELECT * from propertydetails");
		return $query;
	}
	
	function get_dataByID($id)
	{
		$conn = connect();
		$query = mysqli_query($conn,"SELECT * from propertydetails WHERE ID = '$id'");
		return mysqli_fetch_array($query);
	}
	
	function addproperty($id,$ownername,$ownertelephone,$owneremail,$confirmemail,$propertyname,$propertytype,$location,$locationbymetro,$bedrooms,$bathrooms,$sizesqure,$floor,$rentprice,$saleprice,$propertycomment,$nigotiable,$featured,$highlite,$amenities,$image1)
	{
		$conn = connect();
		if($owneremail != $confirmemail){
			echo "<script> alert('Email not matched');</script>";
		}
		else {
			if($id == "") {
			$sql = mysqli_query($conn,"INSERT INTO `propertydetails`(`OwnerName`, `OwnerTelephone`, `OwnerEmail`, OwnerConfirmEmail, `PropertyName`, `PropertyType`, Location, LocationByMetro, `Bedrooms`, `Bathrooms`, `Sizesqm`, `Floor`, `RentPrice`,`SalePrice`, `PropertyComment`, `Negotiable`,`IsFeatured`,`Highlites`,`Amenities`, `Image1`) VALUES ('$ownername','$ownertelephone','$owneremail','$confirmemail','$propertyname','$propertytype','$location','$locationbymetro','$bedrooms','$bathrooms','$sizesqure','$floor','$rentprice','$saleprice','$propertycomment','$nigotiable','$featured','$highlite','$amenities','$image1')");
			}
			else 
			{
				$sql = mysqli_query($conn,"UPDATE `propertydetails` SET `OwnerName`='$ownername',`OwnerTelephone`='$ownertelephone',`OwnerEmail`='$owneremail',OwnerConfirmEmail='$confirmemail',`PropertyName`='$propertyname',`PropertyType`='$propertytype',Location='$location',LocationByMetro='$locationbymetro',`Bedrooms`='$bedrooms',`Bathrooms`='$bathrooms',`Sizesqm`='$sizesqure',`Floor`='$floor',`RentPrice`='$rentprice',`SalePrice`='$saleprice',`PropertyComment`='$propertycomment',`Negotiable`='$nigotiable',`IsFeatured`='$featured',`Highlites`='$highlite',`Amenities`='$amenities',`Image1`='$image1' WHERE ID='$id'");
			}
				if($sql)
				{
					return true;
				}
				else{return false;}
		
		}
	}
	
	public function deleteproperty($id)
	{
		$conn = connect();
		$sql = mysqli_query($conn,"delete from propertydetails where ID='$id'"); 
		if($sql)
		{
			return true;
		}
		}
}
?>