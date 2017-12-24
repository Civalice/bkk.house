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
				$conditions[] = "`RentPrice` between $priceFrom and $priceTo AND `RentPrice` != 0";
			} else {
				$conditions[] = "`SalePrice` between $priceFrom and $priceTo AND `SalePrice` != 0";
			}
		}
		else {
			if($hiddensalesorRent == 'rent') {
				$conditions[] = "`RentPrice` != 0";
			} else {
				$conditions[] = "`SalePrice` != 0";
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
	
	function gethomepagedata($type)
	{
			$conn = connect();
			if ($type == 'sales')
			{
				$query = "select * from propertydetails where IsFeatured = 'no' AND `SalePrice` != 0 order by CreatedDate DESC Limit 2";
				$result = mysqli_query($conn,$query);			
			}
			else if ($type == 'rentals')
			{
				$query = "select * from propertydetails where IsFeatured = 'no' AND `RentPrice` != 0 order by CreatedDate DESC Limit 2";
				$result = mysqli_query($conn,$query);			
			}
			return $result;
	}
	function gethomelandproperty($type)
	{
			$conn = connect();
			if ($type == 'sales')
			{
				$query = "select * from propertydetails where IsFeatured = 'yes' AND `SalePrice` != 0 order by CreatedDate DESC Limit 2";
				$result = mysqli_query($conn,$query);			
			}
			else
			{
				$query = "select * from propertydetails where IsFeatured = 'yes' AND `RentPrice` != 0 order by CreatedDate DESC Limit 2";
				$result = mysqli_query($conn,$query);			
			}
			return $result;
	}
	function getfeatureproperty($type, $propertytype)
	{
			$conn = connect();
			if ($type == 'sales')
			{
				$query = "select * from propertydetails where PropertyType = '$propertytype' AND IsFeatured = 'yes' AND `SalePrice` != 0 order by CreatedDate DESC Limit 3";
				$result = mysqli_query($conn,$query);			
			}
			else
			{
				$query = "select * from propertydetails where PropertyType = '$propertytype' AND IsFeatured = 'yes' AND `RentPrice` != 0 order by CreatedDate DESC Limit 3";
				$result = mysqli_query($conn,$query);			
			}
			return $result;
	}
	function gethouseproperty($type)
	{
			$conn = connect();
			if ($type == 'sales')
			{
				$query = "select * from propertydetails where PropertyType = 'House' AND `SalePrice` != 0 order by CreatedDate DESC Limit 1";
				$result = mysqli_query($conn,$query);			
			}
			else if ($type == 'rentals')
			{
				$query = "select * from propertydetails where PropertyType = 'House' AND `RentPrice` != 0 order by CreatedDate DESC Limit 1";
				$result = mysqli_query($conn,$query);			
			}
			return $result;
	}
	
	function getrestofthailand($type)
	{
			$conn = connect();
			if ($type == 'sales')
			{
				$query = "select * from propertydetails where PropertyType = 'RestofThailand' AND `SalePrice` != 0  order by CreatedDate DESC Limit 3";
				$result = mysqli_query($conn,$query);			
			}
			else if ($type == 'rentals')
			{
				$query = "select * from propertydetails where PropertyType = 'RestofThailand' AND `RentPrice` != 0 order by CreatedDate DESC Limit 3";
				$result = mysqli_query($conn,$query);			
			}
			return $result;
	}
	
}
?>