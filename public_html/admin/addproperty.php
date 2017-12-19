<?php 
error_reporting(0);
include("header.php");
include("function.php");
$property = new property();
$id = base64_decode($_GET['value']);
$databyid = "";
if($_GET['value'] != "")
{
	$databyid = $property->get_dataByID($id);
}
else{ $databyid = ""; }

if(isset($_POST['submitproperty']))
{
	$ownername = $_POST['ownername'];
	$ownertelephone = $_POST['ownertelephone'];
	$owneremail = $_POST['owneremail'];
	$confirmemail = $_POST['confirmemail'];
	$propertyname = $_POST['propertyname'];
	$propertytype = $_POST['propertytype'];
	$location = $_POST['location'];
	$locationbymetro = $_POST['locationbymetro'];
	$bedrooms = $_POST['bedrooms'];
	$bathrooms = $_POST['bathrooms'];
	$sizesqure = $_POST['sizesqure'];
	$floor = $_POST['floor'];
	$rentprice = $_POST['rentprice'];
	$saleprice = $_POST['saleprice'];
	$propertycomment = $_POST['propertycomment'];
	$nigotiable = $_POST['nigotiable'];	
	$featured = $_POST['featured'];	
	$highlite = $_POST['highlites'];
	$amenities = $_POST['amenities'];
	
	/* FILE UPLOADING AND UPDATING START HERE */
	
		if($_FILES['image1']['name'][0]!=''){
			$image1 = "";
			foreach($_FILES["image1"]["error"] as $key => $error) {
				if($error == UPLOAD_ERR_OK)
				{
			$tmp_name = $_FILES["image1"]["tmp_name"][$key];
			$namefile = $_FILES["image1"]["name"][$key];
			//$ext = end(explode(".",$namefile));
			//$name = explode(".",$namefile);
			//$name = $name[0]."_".rand().".".$ext.",";
			$fileupload = move_uploaded_file($tmp_name,"uploadimages/".$namefile);
			$image1 = $image1.$namefile.",";
			
				}
				
			}
			
		}
		else {	$image1 = $databyid['Image1'];	}
		
		// if($_FILES['image2']['name']!='')	{
			// $tmp_name = $_FILES["image2"]["tmp_name"];
			// $namefile = $_FILES["image2"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image2 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image2);
		// }
		// else {	$image2 = $databyid['Image2'];	}
		
		// if($_FILES['image3']['name']!='')	{
			// $tmp_name = $_FILES["image3"]["tmp_name"];
			// $namefile = $_FILES["image3"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image3 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image3);
		// }
		// else {	$image3 = $databyid['Image3'];	}
		
		// if($_FILES['image4']['name']!='')	{
			// $tmp_name = $_FILES["image4"]["tmp_name"];
			// $namefile = $_FILES["image4"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image4 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image4);
		// }
		// else {	$image4 = $databyid['Image4'];	}
		
		// if($_FILES['image5']['name']!='')	{
			// $tmp_name = $_FILES["image5"]["tmp_name"];
			// $namefile = $_FILES["image5"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image5 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image5);
		// }
		// else {	$image5 = $databyid['Image5'];	}
		
		// if($_FILES['image6']['name']!='')	{
			// $tmp_name = $_FILES["image6"]["tmp_name"];
			// $namefile = $_FILES["image6"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image6 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image6);
		// }
		// else {	$image6 = $databyid['Image6'];	}
		
		// if($_FILES['image7']['name']!='')	{
			// $tmp_name = $_FILES["image7"]["tmp_name"];
			// $namefile = $_FILES["image7"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image7 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image7);
		// }
		// else {	$image7 = $databyid['Image7'];	}
		
		// if($_FILES['image8']['name']!='')	{
			// $tmp_name = $_FILES["image8"]["tmp_name"];
			// $namefile = $_FILES["image8"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image8 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image8);
		// }
		// else {	$image8 = $databyid['Image8'];	}
		
		// if($_FILES['image9']['name']!='')	{
			// $tmp_name = $_FILES["image9"]["tmp_name"];
			// $namefile = $_FILES["image9"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image9 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image9);
		// }
		// else {	$image9 = $databyid['Image9'];	}
		
		// if($_FILES['image10']['name']!='')	{
			// $tmp_name = $_FILES["image10"]["tmp_name"];
			// $namefile = $_FILES["image10"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image10 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image10);
		// }
		// else {	$image10 = $databyid['Image10'];	}
		
		// if($_FILES['image11']['name']!='')	{
			// $tmp_name = $_FILES["image11"]["tmp_name"];
			// $namefile = $_FILES["image11"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image11 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image11);
		// }
		// else {	$image11 = $databyid['Image11'];	}
		
		// if($_FILES['image12']['name']!='')	{
			// $tmp_name = $_FILES["image12"]["tmp_name"];
			// $namefile = $_FILES["image12"]["name"];
			// $ext = end(explode(".",$namefile));
			// $name = explode(".",$namefile);
			// $image12 = $name[0]."_".rand().".".$ext;
			// $fileupload = move_uploaded_file($tmp_name,"uploadimages/".$image12);
		// }
		// else {	$image12 = $databyid['Image12'];	}
		
		/* FILE UPLOADING AND UPDATING END HERE */
		
	//$success = $property->addproperty($id,$ownername,$ownertelephone,$owneremail,$confirmemail,$propertyname,$propertytype,$location,$locationbymetro,$bedrooms,$bathrooms,$sizesqure,$floor,$rentprice,$saleprice,$propertycomment,$nigotiable,$highlite,$amenities,$image1,$image2,$image3,$image4,$image5,$image6,$image7,$image8,$image9,$image10,$image11,$image12);
	
	$success = $property->addproperty($id,$ownername,$ownertelephone,$owneremail,$confirmemail,$propertyname,$propertytype,$location,$locationbymetro,$bedrooms,$bathrooms,$sizesqure,$floor,$rentprice,$saleprice,$propertycomment,$nigotiable,$featured,$highlite,$amenities,$image1);
	if($success)
	{
		echo "<script> alert('data inserted successfull'); </script>";
	}
	
}
?>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Property</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <h4>OWNERS DETAILS</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group col-lg-6">
                                            <label>Name *</label>
                                            <input class="form-control" type="text" name="ownername" value="<?=$databyid['OwnerName'];?>">
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Telephone *</label>
                                            <input class="form-control" type="text" name="ownertelephone" value="<?=$databyid['OwnerTelephone'];?>">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email *</label>
                                            <input class="form-control" type="text" name="owneremail" value="<?=$databyid['OwnerEmail'];?>">
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Confirm Email *</label>
                                            <input class="form-control" type="text" name="confirmemail" value="<?=$databyid['OwnerConfirmEmail'];?>">
                                        </div>
                                </div>
                                
                                <div class="col-lg-12">
                                 <h4>PROPERTY DETAILS</h4>
                                        <div class="form-group col-lg-6">
                                            <label>Property/Condo Name *</label>
                                            <input class="form-control" type="text" name="propertyname" value="<?=$databyid['PropertyName'];?>">
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Property Type *</label>
                                            <select class="form-control" name="propertytype" >
                                            <option value="Condo" <?php if($databyid['PropertyType'] == 'Condo'){ ?> selected="selected" <?php }?>>Condo</option>
                                            <option value="House" <?php if($databyid['PropertyType'] == 'House'){ ?> selected="selected" <?php }?>>House</option>
                                            <option value="Commercial Building" <?php if($databyid['PropertyType'] == 'Commercial Building'){ ?> selected="selected" <?php }?>>Commercial Building </option>
                                            <option value="Land" <?php if($databyid['PropertyType'] == 'Land'){ ?> selected="selected" <?php }?>>Land</option>
											<option value="RestofThailand" <?php if($databyid['PropertyType'] == 'RestofThailand'){ ?> selected="selected" <?php }?>>Rest of Thailand</option>
                                            </select>
                                        </div>
										
										 <div class="form-group col-lg-6">
                                            <label>Area *</label>
                                            <select class="form-control" name="location">
										<option value="">-- Any --</option>
											<option value="ari-phaholyothin-7">Ari (Phaholyothin 7)</option>
											<option value="asoke">Asoke</option>
											<option value="bangkapi-buengkum">Bangkapi, Buengkum</option>
											<option value="bangkhen">Bangkhen</option>
											<option value="bangna">Bangna</option>
											<option value="bangrak">Bangrak</option>
											<option value="bearing">Bearing</option>
											<option value="chaeng-wattana">Chaeng Wattana</option>
											<option value="charoen-krung">Charoen Krung</option>
											<option value="charoen-nakorn">Charoen Nakorn</option>
											<option value="chidlom">Chidlom</option>
											<option value="din-daeng">Din Daeng</option>
											<option value="don-muang">Don Muang</option>
											<option value="dusit">Dusit</option>
											<option value="ekamai">Ekamai</option>
											<option value="huaykwang">Huaykwang</option>
											<option value="ladkrabang">Ladkrabang</option>
											<option value="langsuan">Langsuan</option>
											<option value="lat-phrao">Lat Phrao</option>
											<option value="lumpini">Lumpini</option>
											<option value="min-buri">Min Buri</option>
											<option value="nana">Nana</option>
											<option value="narathiwat">Narathiwat</option>
											<option value="nonthaburi">Nonthaburi</option>
											<option value="on-nut">On Nut</option>
											<option value="pathumwan">Pathumwan</option>
											<option value="pattanakarn">Pattanakarn</option>
											<option value="petchaburi">Petchaburi</option>
											<option value="phaholyothin">Phaholyothin</option>
											<option value="phayathai">Phayathai</option>
											<option value="phrakanong">Phrakanong</option>
											<option value="pinklao">Pinklao</option>
											<option value="ploenchit">Ploenchit</option>
											<option value="prompong">Prompong</option>
											<option value="rama-3">Rama 3</option>
											<option value="rama-4-road">Rama 4 Road</option>
											<option value="rama-9">Rama 9</option>
											<option value="ramkamhaeng">Ramkamhaeng</option>
											<option value="ratchadamri">Ratchadamri</option>
											<option value="ratchadaphisek">Ratchadaphisek</option>
											<option value="ratchaprarop">Ratchaprarop</option>
											<option value="ratchatewi">Ratchatewi</option>
											<option value="ruamrudee">Ruamrudee</option>
											<option value="saladaeng">Saladaeng</option>
											<option value="sathorn">Sathorn</option>
											<option value="silom">Silom</option>
											<option value="siphraya">Siphraya</option>
											<option value="srinakarin">Srinakarin</option>
											<option value="sukhumvit">Sukhumvit</option>
											<option value="surat-thani">Surat Thani</option>
											<option value="suthisarn">Suthisarn</option>
											<option value="thonburi">Thonburi</option>
											<option value="thonglor">Thonglor</option>
											<option value="vibhavadi">Vibhavadi</option>
											<option value="victory-monument">Victory Monument</option>
											<option value="wireless">Wireless</option>
											<option value="yenakart">Yenakart</option>
                                            </select>
                                        </div>
										
										 <div class="form-group col-lg-6">
                                            <label>Public Transport *</label>
                                            <select class="form-control" name="locationbymetro" >
                                            <option value="" selected="selected">-- Any --</option>
											<option value="arl-ladkrabang">ARL Ladkrabang</option>
											<option value="brt-rama-3-bridge">BRT Rama 3 Bridge</option>
											<option value="brt-technic-krungthep">BRT Technic Krungthep</option>
											<option value="brt-thanon-chan">BRT Thanon Chan</option>
											<option value="brt-wat-dan">BRT Wat Dan</option>
											<option value="bts-e1-chit-lom">BTS E1-Chit Lom</option>
											<option value="bts-e10-bang-chak">BTS E10-Bang Chak</option>
											<option value="bts-e11-phunnawithi">BTS E11-Phunnawithi</option>
											<option value="bts-e12-udom-suk">BTS E12-Udom Suk</option>
											<option value="bts-e13-bang-na">BTS E13-Bang Na</option>
											<option value="bts-e14-bearing">BTS E14-Bearing</option>
											<option value="bts-e2-phloen-chit">BTS E2-Phloen Chit</option>
											<option value="bts-e3-nana">BTS E3-Nana</option>
											<option value="bts-e4-asoke">BTS E4-Asoke</option>
											<option value="bts-e5-phrom-phong">BTS E5-Phrom Phong</option>
											<option value="bts-e6-thonglor">BTS E6-Thonglor</option>
											<option value="bts-e7-ekamai">BTS E7-Ekamai</option>
											<option value="bts-e8-phra-khanong">BTS E8-Phra Khanong</option>
											<option value="bts-e9-on-nut">BTS E9-On Nut</option>
											<option value="bts-n1-ratchathewi">BTS N1-Ratchathewi</option>
											<option value="bts-n2-phayathai">BTS N2-Phayathai</option>
											<option value="bts-n3-victory-monument">BTS N3-Victory Monument</option>
											<option value="bts-n4-sanam-pao">BTS N4-Sanam Pao</option>
											<option value="bts-n5-ari">BTS N5-Ari</option>
											<option value="bts-n7-saphan-khwai">BTS N7-Saphan Khwai</option>
											<option value="bts-n8-mo-chit">BTS N8-Mo Chit</option>
											<option value="bts-s1-ratchadamri">BTS S1-Ratchadamri</option>
											<option value="bts-s2-sala-daeng">BTS S2-Sala Daeng</option>
											<option value="bts-s3-chong-nonsi">BTS S3-Chong Nonsi</option>
											<option value="bts-s5-surasak">BTS S5-Surasak</option>
											<option value="bts-s6-saphan-taksin">BTS S6-Saphan Taksin</option>
											<option value="bts-s7-krung-thon-buri">BTS S7-Krung Thon Buri</option>
											<option value="bts-s8-wongwian-yai">BTS S8-Wongwian Yai</option>
											<option value="bts-w1-national-stadium">BTS W1-National Stadium</option>
											<option value="mrt-hua-lamphong">MRT Hua Lamphong</option>
											<option value="mrt-huay-khwang">MRT Huay Khwang</option>
											<option value="mrt-khlong-toey">MRT Khlong Toey</option>
											<option value="mrt-lat-phrao">MRT Lat Phrao</option>
											<option value="mrt-lumphini">MRT Lumphini</option>
											<option value="mrt-phahon-yothin">MRT Phahon Yothin</option>
											<option value="mrt-phetchaburi">MRT Phetchaburi</option>
											<option value="mrt-phra-ram-9">MRT Phra Ram 9</option>
											<option value="mrt-queen-sirikit-convention-centre">MRT Queen Sirikit Convention Centre</option>
											<option value="mrt-ratchadaphisek">MRT Ratchadaphisek</option>
											<option value="mrt-sam-yan">MRT Sam Yan</option>
											<option value="mrt-silom">MRT Silom</option>
											<option value="mrt-sukhumvit">MRT Sukhumvit</option>
											<option value="mrt-sutthisan">MRT Sutthisan</option>
											<option value="mrt-thailand-cultural-centre">MRT Thailand Cultural Centre</option>
											<option value="y-brt-sathorn">BRT Sathorn</option>
											<option value="z-arl-phayathai">ARL Phayathai</option>
                                            </select>
                                        </div>
										
                                        <div class="form-group col-lg-6">
                                            <label>Number of Bedrooms *</label>
                                            <select class="form-control" name="bedrooms">
                                            <option value="1" <?php if($databyid['Bedrooms'] == '1'){ ?> selected="selected" <?php }?>>1</option>
                                            <option value="2" <?php if($databyid['Bedrooms'] == '2'){ ?> selected="selected" <?php }?>>2</option>
                                            <option value="3" <?php if($databyid['Bedrooms'] == '3'){ ?> selected="selected" <?php }?>>3</option>
                                            <option value="4" <?php if($databyid['Bedrooms'] == '4'){ ?> selected="selected" <?php }?>>4</option>
                                           
                                            </select>
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Number of Bathrooms *</label>
											 <select class="form-control" name="bathrooms">
                                            <option value="1" <?php if($databyid['Bathrooms'] == '1'){ ?> selected="selected" <?php }?>>1</option>
                                            <option value="2" <?php if($databyid['Bathrooms'] == '2'){ ?> selected="selected" <?php }?>>2</option>
                                            <option value="3" <?php if($databyid['Bathrooms'] == '3'){ ?> selected="selected" <?php }?>>3</option>
                                            <option value="4" <?php if($databyid['Bathrooms'] == '4'){ ?> selected="selected" <?php }?>>4</option>
                                           
                                            </select>
                                            
                                        </div>
                                         <div class="form-group col-lg-6">
                                            <label>Size sqm *</label>
                                            <input class="form-control" type="text" name="sizesqure" value="<?=$databyid['Sizesqm'];?>">
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Floor *</label>
                                            <input class="form-control" type="text" name="floor" value="<?=$databyid['Floor'];?>">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Rent Price *</label>
                                            <input class="form-control" type="text" name="rentprice" value="<?=$databyid['RentPrice'];?>">
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Sale Price *</label>
                                            <input class="form-control" type="text" name="saleprice" value="<?=$databyid['SalePrice'];?>">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Property Comments *</label>
                                            <textarea class="form-control" rows="7" name="propertycomment" ><?=$databyid['PropertyComment'];?></textarea>
                                            
                                            
                                        </div>
                                        
                                        <div class="form-group col-lg-6">
                                            <label>Negotiable</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nigotiable" id="optionsRadiosInline1" value="yes" <?php if($databyid['Negotiable'] == 'yes'){ ?> checked="checked" <?php }?>>yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nigotiable" id="optionsRadiosInline2" value="no" <?php if($databyid['Negotiable'] == 'no'){ ?> checked="checked" <?php }?>>No
                                            </label>
                                            
                                        </div>
										
										<div class="form-group col-lg-6">
                                            <label>Is Featured</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="featured" id="optionsRadiosInline1" value="yes" <?php if($databyid['IsFeatured'] == 'yes'){ ?> checked="checked" <?php }?>>yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="featured" id="optionsRadiosInline2" value="no" <?php if($databyid['IsFeatured'] == 'no'){ ?> checked="checked" <?php }?>>No
                                            </label>
                                            
                                        </div>
										
										 <div class="form-group col-lg-6">
                                            <label>Highlights *</label>
                                            <input class="form-control" type="text" name="highlites" value="<?=$databyid['Highlites'];?>">
                                        </div>
										 <div class="form-group col-lg-6">
                                            <label>Amenities  *</label>
                                            <input class="form-control" type="text" name="amenities" value="<?=$databyid['Amenities'];?>">
                                        </div>
                                        
                                        <div class="form-group  col-lg-6">
                                            <label>Image *</label>
                                            <input type="file" name="image1[]" multiple>
											<br> <span style="color:red"> You Can Select Multiple Images </span>
                                        </div>
                                        
                                       <!-- <div class="form-group  col-lg-6">
                                            <label>Image 2 *</label>
                                            <input type="file" name="image2">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 3 *</label>
                                            <input type="file" name="image3">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 4 *</label>
                                            <input type="file" name="image4">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 5 *</label>
                                            <input type="file" name="image5">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 6 *</label>
                                            <input type="file" name="image6">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 7 *</label>
                                            <input type="file" name="image7">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 8 *</label>
                                            <input type="file" name="image8">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 9 *</label>
                                            <input type="file" name="image9">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 10 *</label>
                                            <input type="file" name="image10">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 11 *</label>
                                            <input type="file" name="image11">
                                        </div>
                                        <div class="form-group  col-lg-6">
                                            <label>Image 12 *</label>
                                            <input type="file" name="image12">
                                        </div>-->
                                        <div class="form-group  col-lg-6">
                                            <input type="submit" class="btn btn-primary" name="submitproperty">
                                        </div>
                                        
                                    </form>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php 
include("footer.php");
?>
