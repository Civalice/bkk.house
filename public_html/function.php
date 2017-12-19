<?php
include("Database/db.php");
class searching
{
	function searchsales()
	{
			$conn = connect();
			$query = "select * from propertydetails";
			$result = mysqli_query($conn,$query);			
			return $result;
	}
	
	
	function searchByfilter($location,$locationBymetro,$propertytype ,$hiddensalesorRent, $priceFrom ,$priceTo ,$bedrooms ,$bathroom)
	{
		$conn = connect();
		$query = "SELECT * FROM propertydetails";
		$conditions = array();
		
		if(! empty($location)) {
		  $conditions[] = "Location ='$location'";
		}		
		if(! empty($locationBymetro)) {
		  $conditions[] = "LocationByMetro = '$locationBymetro'";
		}
		if(! empty($propertytype)) {
		  $conditions[] = "PropertyType = '$propertytype'";
		}
		if(! empty($priceFrom || $priceTo)) {
			if($hiddensalesorRent == 'rent') {
				$conditions[] = "RentPrice between $priceFrom and $priceTo";
			} else {
			$conditions[] = "SalePrice between $priceFrom and $priceTo";
			}
		}
		if(! empty($bedrooms)) {
		  $conditions[] = "Bedrooms = '$bedrooms'";
		}
		if(! empty($bathroom)) {
		  $conditions[] = "Bathrooms = '$bathroom'";
		}
		$sql = $query;
		if (count($conditions) > 0) {
		  $sql .= " WHERE " . implode(' AND ', $conditions);
		}
		$result = mysqli_query($conn,$sql);
		return $result;
		}
		
	function buildingsearch($location,$locationBymetro)
	{
		$conn = connect();
		$query = "SELECT * FROM propertydetails";
		$conditions = array();
		if(! empty($location)) {
		  $conditions[] = "Location = '$location'";
		}
		if(! empty($locationBymetro)) {
		  $conditions[] = "LocationByMetro = '$locationBymetro'";
		}
		$sql = $query;
		if (count($conditions) > 0) {
		  $sql .= " WHERE " . implode(' AND ', $conditions) . " limit 3";
		}
		$result = mysqli_query($conn,$sql);
		return $result;
	}
	
	function getdetailsByProperty($id)
	{
			$conn = connect();
			$query = mysqli_query($conn,"select * from propertydetails where ID = '$id'");
			return mysqli_fetch_array($query);
	}
	
	function gethomepagedata()
	{
			$conn = connect();
			$query = "select * from propertydetails where IsFeatured = 'no' order by CreatedDate DESC Limit 2";
			$result = mysqli_query($conn,$query);			
			return $result;
	}
	function gethomelandproperty()
	{
			$conn = connect();
			$query = "select * from propertydetails where IsFeatured = 'yes' order by CreatedDate DESC Limit 2";
			$result = mysqli_query($conn,$query);			
			return $result;
	}
	function gethouseproperty()
	{
			$conn = connect();
			$query = "select * from propertydetails where PropertyType = 'House' order by CreatedDate DESC Limit 1";
			$result = mysqli_query($conn,$query);			
			return $result;
	}
	
	function getrestofthailand()
	{
			$conn = connect();
			$query = "select * from propertydetails where PropertyType = 'RestofThailand' order by CreatedDate DESC Limit 3";
			$result = mysqli_query($conn,$query);			
			return $result;
	}
	
}
?>