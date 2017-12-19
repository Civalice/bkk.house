<?php 
include("header.php");
include("function.php");
?>
<head>
<style>
.active {
    color: red;
}
.checkbox label:after, .radio label:after {
	content: '';
	display: table;
	clear: both;
}
.checkbox .cr, .radio .cr {
	position: relative;
	display: inline-block;
	border: 1px solid #a9a9a9;
	border-radius: .25em;
	width: 1.3em;
	height: 1.3em;
	float: left;
	margin-right: .5em;
}
.radio .cr {
	border-radius: 50%;
}
.checkbox .cr .cr-icon, .radio .cr .cr-icon {
	position: absolute;
	font-size: .8em;
	line-height: 0;
	top: 50%;
	left: 20%;
}
.radio .cr .cr-icon {
	margin-left: 0.04em;
}
.checkbox label input[type="checkbox"], .radio label input[type="radio"] {
	display: none;
}
.checkbox label input[type="checkbox"] + .cr > .cr-icon, .radio label input[type="radio"] + .cr > .cr-icon {
	transform: scale(3) rotateZ(-20deg);
	opacity: 0;
	transition: all .3s ease-in;
}
.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon, .radio label input[type="radio"]:checked + .cr > .cr-icon {
	transform: scale(1) rotateZ(0deg);
	opacity: 1;
}
.checkbox label input[type="checkbox"]:disabled + .cr, .radio label input[type="radio"]:disabled + .cr {
	opacity: .5;
}
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-4794364-27"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-4794364-27');
  </script>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div>
        <div class="heding_bennar">Bangkok City Real Estate</div>
        <div class="bs-example">
          <div class="border_tab">
            <ul class="banner_tab">
              <li role="presentation" onclick="cahangetab('sales')" class="active2"><a style="cursor:pointer">SALES </a></li>
              <li role="presentation" onclick="cahangetab('rent')"><a style="cursor:pointer" >RENTALS</a></li>
              <li role="presentation" onclick="location.href='buildings.php'"><a href="buildings.php">BUILDINGS</a></li>
            </ul>
          </div>
        </div>
      </div>
	  <form  method="post" action="search.php">
	  <input type="hidden" id="inputhiddenpropertytype" name="hiddenpropertysalesorrent"value="sales">
      <div class="row margin_top">
        <div class="col-md-3">
          <div class="form-group">
            <label class="control-label" for="name">LOCATION</label>
            <select class="form-control form-control2" id="location" name="location">
             <option disabled selected value>-- Any --</option>
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
        </div>
		<div class="col-md-3">
          <div class="form-group">
            <label class="control-label" for="name">LOCATION By Metro</label>
            <select class="form-control form-control2" id="location" name="locationbymetro">
             <option disabled selected value>-- Any --</option>
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
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label" for="name">TYPE</label>
            <select id="propertytype" name="propertytype" class="form-control form-control2">
				<option disabled selected value>-- Select --</option>
              <option value="Condo">Condo</option>
              <option value="House">House</option>
              <option value="Commercial Building">Commercial Building</option>
              <option value="Land">Land</option>
              <option value="RestofThailand">Rest of Thailand</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row margin_top">
        <div class="col-md-3">
          <div class="form-group">
            <label class="control-label" for="name" >PRICE</label>
			<input type="text" class="form-control form-control2" id="priceFrom" name="priceFrom">
          </div>
        </div>
        <div class="col-md-3">
          <div style="position: absolute;margin-left: -21px; top: 33px;">to</div>
          <div class="form-group">
            <label class="control-label" for="name">&nbsp;</label>
			<input type="text" class="form-control form-control2" id="priceTo" name="priceTo">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="control-label" for="name" >BEDROOMS</label>
            <select class="form-control form-control2" id="noOfBedrooms" name="noOfBedrooms"> 
			 <option disabled selected value>-- Select --</option>
              <option value="1">1 bedroom</option>
              <option value="2">2 bedrooms</option>
              <option value="3">3 bedrooms</option>
              <option value="4">4 bedrooms</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="control-label" for="name">BATHROOMS</label>
            <select class="form-control form-control2" id="noOfBathrooms" name="noOfBathrooms">
              <option disabled selected value>-- Select --</option>
              <option value="1">1 or more</option>              
              <option value="2">2 or more</option>              
              <option value="3">3 or more</option>              
              <option value="4">4 or more</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row margin_top">
        <div class="col-md-5"></div>
        <div class="col-md-1"> </div>
        <div class="col-md-3"> </div>
        <div class="col-md-3">
          <div class="form-group pull-right">
            <input type="submit" class="btn btn-primary btn2" id="searchbtn" value="Search">
          </div>
        </div>
      </div>   
</form>	  
    </div>
    
  </div>
</div>
<?php
$clsadvansearch = new searching();
$homedatacommercial = $clsadvansearch->gethomepagedata();
$homelanddata = $clsadvansearch->gethomelandproperty();
$housedataproperty = $clsadvansearch->gethouseproperty();
$restofthailand = $clsadvansearch->getrestofthailand();

?>

<div class="container ">
  <div class="">
    <section class="wrapper">
      <div class="">
        <div class="content div_border_top">
          <div class="">
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <div class="row">
					<div class="right_text" style="margin-left:16px">Latest Properties</div>
					<?php 
					
					foreach($homedatacommercial as $home) {	
						//print_r($home);
					$image = $home['Image1'];
					$imageexp = explode(',',$image);

					?>
					
                      <div class="col-xs-12 col-sm-12">
                        <div class="carbox"> <a class="img-carbox" href="details.php?proname=<?=base64_encode($home['ID']);?>"> <img src="admin/uploadimages/<?=$imageexp[0];?>"/> </a>
                          <div class="carbox-content">
                            <h4 class="carbox-title">
                              <p class="slug2"><?=$home['PropertyType'];?></p>
                            </h4>
                            <h5 class="box_text"> <?=$home['PropertyName'];?></h5>
                          </div>
                          <div class="carbox-read-more">
                            <ul class="box_ul">
                              <li><?=$home['Bedrooms'];?> Beds</li>
                              <li><?=$home['Bathrooms'];?> Bath</li>
                              <li><span><?=$home['Floor'];?> Floor</span></li>
                            </ul>
                          </div>
                          <div class="carbox-read-more">
                            <div class="box_butttom"><span><?=$home['Location'];?></span></div>
                          </div>
                        </div>
                      </div>  
					<?php } ?>
                    </div>
                  </div>
				  <?php 					
					foreach($housedataproperty as $house) {	
						//print_r($home);
					$image = $house['Image1'];
					$imageexp = explode(',',$image);
					?>
					<div class="right_text" style="margin-left:16px"></div>
                  <div class="col-xs-12 col-sm-8">
                    <div class="carbox"> <a class="img-carbox2" href="details.php?proname=<?=base64_encode($house['ID']);?>" style="margin-top:20px"> <img src="admin/uploadimages/<?=$imageexp[0];?>"/> </a>
                      <div class="carbox-content">
                        <h4 class="carbox-title">
                          <p class="slug2"><?=$house['PropertyType'];?></p>
                        </h4>
                        <h5 class="box_text"> <?=$house['PropertyName'];?></h5>
                      </div>
                      <div class="carbox-read-more">
                        <ul class="box_ul">
                          <li><?=$house['Bedrooms'];?> Beds</li>
                          <li><?=$house['Bathrooms'];?> Bath</li>
                          <li><?=$house['Sizesqm'];?> ft²</li>
                        </ul>
                      </div>
                      <div class="carbox-read-more">
                        <div class="box_butttom2" style="padding:4px"><?=$house['PropertyComment'];?></div>
                      </div>
                    </div>
                  </div>
					<?php } ?>
                </div>
                <!--<div class="row">
                  <div class="col-lg-12">
                    <div class="big_separator items item-grid">
                      <h2>ON THE BLOG </h2>
                    </div>
                  </div>
                  <div class="content">
                    <div class="col-xs-12 col-sm-4"> <a class="list-quotes" href="#"> 
                      <!-- Recommended size 360X360 
                      <img class='img-responsive2' alt="img" src="https://wp.zillowstatic.com/streeteasy/2/42-West-33rd-street-f17498-220x105.jpg">
                      <div class="quotes">
                        <p> Housing Lottery at 42 West 33rd in Midtown Offers ฿867 Apts </p>
                      </div>
                      </a> </div>
                    <div class="col-xs-12 col-sm-4"> <a class="list-quotes" href="#"> 
                      <!-- Recommended size 360X360
                      <img class='img-responsive2' alt="img" src="https://wp.zillowstatic.com/streeteasy/2/229812057-3fc7c4-220x147.jpg">
                      <div class="quotes">
                        <p> Housing Lottery at 42 West 33rd in Midtown Offers ฿867 Apts </p>
                      </div>
                      </a> </div>
                    <div class="col-xs-12 col-sm-4"> <a class="list-quotes" href="#"> 
                      <!-- Recommended size 360X360 
                      <img class='img-responsive2' alt="img" src="https://wp.zillowstatic.com/streeteasy/2/Pasted-image-at-2017_09_29-05_09-PM-3f451a-220x147.png">
                      <div class="quotes">
                        <p> Housing Lottery at 42 West 33rd in Midtown Offers ฿867 Apts </p>
                      </div>
                      </a> </div>
                  </div>
                </div>-->
                <div class="row">
                  
                </div>
              </div>
              <div class="col-lg-3">
                <div class="row">
				 <div class="right_text" style="margin-left:16px">FEATURED Properties</div>
				<?php 
					
					foreach($homelanddata as $landdata) {	
					//print_r($landdata);
					$image = $landdata['Image1'];
					$imageexp = explode(',',$image);

					?>		
                  <div class="col-xs-12 col-sm-12">                
								
                    <div class=""> <a class="img-carbox3"href="details.php?proname=<?=base64_encode($landdata['ID']);?>"> <img src="admin/uploadimages/<?=$imageexp[0];?>"/> </a>
                      <div class="carbox-content">
                        <h4 class="carbox-title">
                          <p class="slug2"><?=$landdata['PropertyType'];?></p>
                        </h4>
                        <h5 class="text-left2 box_text "> <?=$landdata['PropertyName'];?></h5>
                        <span class="price"><?=$landdata['SalePrice'];?> For Sale</span> </div>
                      <div class="carbox-read-more">
                        <ul class="box_ul">
                          <li><?=$landdata['Bedrooms'];?> Beds</li>
                          <li><?=$landdata['Bathrooms'];?> Bath</li>
                          <li><span><?=$landdata['Sizesqm'];?> ft²</span></li>
                        </ul>
                      </div>
                      <div class="carbox-read-more">
                        <div class="box_butttom text-left2"> Land in <?=$landdata['Location'];?></div>
                      </div>
                      <div class="carbox-read-more">
                        <div class="box_butttom text-left2"> Listed by <?=$landdata['OwnerName'];?> </div>
                      </div>
                    </div>
				
                  </div>
	<?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php 
include("footer.php");
?>
<link rel="stylesheet" href="css/chosen.css">
<script src="js/chosen.jquery.min.js"></script> 
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
var $chosen = $('.chosen-select').chosen({
  
});

$chosen.change(function () {
  var $this = $(this);
  var chosen = $this.data('chosen');
  var search = chosen.search_container.find('input[type="text"]');
  
  search.prop('disabled', $this.val() !== null);
  
  if (chosen.active_field) {
    search.focus();
  }
});
</script> 
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<script>
$(".banner_tab li").click(
    function(event) {
      $('li').removeClass('active2');
      $(this).addClass('active2');
      event.preventDefault();
	  
    }
);
function cahangetab(val)
{
if(val == 'rent')
{
	document.getElementById("inputhiddenpropertytype").value = "rent";
}
else {
	document.getElementById("inputhiddenpropertytype").value = "sales";
}
// $.ajax({
        // type: 'get',
        // url: 'index.php?val='+val,
		// data : {val:val},
        // success: function(data){			
			// //location.href = "index.php";
		// }
    // });
}

</script>
</body>
</html>
