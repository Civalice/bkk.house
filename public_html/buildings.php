<?php
error_reporting(0);
include("header.php");
include('function.php');
$clsadvansearch = new searching();
extract($_POST);
//print_r($_POST['location']);
$location = $_POST['location'];
$locationBymetro = $_POST['locationbymetro'];
$result = $clsadvansearch->buildingsearch($location,$locationBymetro);
//print_r($result);
?>
<head>
<style>
.chosen-container {
	position: relative;
	display: initial !important;
	vertical-align: middle;
	font-size: 13px;
	zoom: 1;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}
.btn {
	border-radius: 0px;
}
.pagination>li>a, .pagination>li>span {
	border-radius: 50% !important;
	margin: 0 5px;
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
  <div class="">
    <div class="col-lg-12">
      <div>
        <h3> Search Buildings </h3>
      </div>
	  <form method="post" action="buildings.php">
      <div class="row margin_top">
        <div class="col-md-6">
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
		<div class="col-md-4">
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
        <div class="col-md-2" hidden>
          <div class="form-group">
            <label class="control-label" for="name">BUILDING TYPE</label>
            <select  multiple="multiple" class="teams form-control2">
              <option value="D1">Condos</option>
              <option value="P1">Co-ops</option>
              <option value="M">Multi-families</option>
              <option value="R">Rental Units</option>
            </select>
          </div>
        </div>
        <div class="col-md-2" hidden>
          <div class="form-group">
            <label class="control-label" for="name">AMENITIES</label>
            <select  multiple="multiple" class="teams form-control2" >
              <option value="doorman">Doorman</option>
              <option value="elevator">Elevator</option>
              <option value="leed_registered">Green Building</option>
              <option value="gym">Gym</option>
              <option value="laundry">Laundry in Building</option>
              <option value="parking">Parking Available</option>
              <option value="pets">Pets Allowed</option>
              <option value="pool">Swimming Pool</option>
              <option value="fios_available">Verizon FiOS Enabled</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label class="control-label" for="name">&nbsp;</label>
            <div class="form-group pull-right" style="margin-top: ;">
              <button type="submit" class="btn btn-primary btn2">Search</button>
            </div>
          </div>
        </div>
      </div>
	  </form>
    </div>
  </div>
</div>
<div class="container-fluid bg_warepper">
  <div class="container">
    <div class="">
	<?php 
	$i = 1;
	foreach($result as $res) { 
	?>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box"> <img src="admin/uploadimages/<?=$res['Image1'];?>">
          <div class="BuildingCard-flag"> <span class="ActiveFlag"> 13 active listings </span> </div>
          <div class="info">
            <div class="BuildingCard-info" data-clickable="true">
              <h3 class="BuildingCard-title"> Rental in <a class="BuildingCard-titleLink" href="#"><?=$res['Location'];?></a> </h3>
              <a class="BuildingCard-addressLink" href="#"></a> <a class="BuildingCard-addressLink" data-click="link" href="#"><?=$res['LocationByMetro'];?></a>
              <div class="BuildingCard-properties">
                <div class="BuildingCard-property"> <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--units"></span> 379 Units </div>
                <div class="BuildingCard-property BuildingCard-property--divided"></div>
                <div class="BuildingCard-property"> <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--stories"></span> 35 Stories </div>
                <div class="BuildingCard-property BuildingCard-property--divided"></div>
                <div class="BuildingCard-property"> <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--build"></span> 2016 Built </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php if($i++ == 3){ break; } } ?>
      
    </div>
    <div class="col-lg-12">
      <hr style="width: 100%; display: -webkit-inline-box;">
    </div>
    <div>
      <div class="col-lg-3">
        <article>
          <div class="left-mag"><img src="https://wp.zillowstatic.com/streeteasy/2/shutterstock_410338984-795b67-220x147.jpg"></div>
          <div> <a class="Feeds-itemTitle" href="#">Bangkok</a> <a class="Feeds-itemDescription" href="#">#StreetEasyFinds: Our Favorite Photos From September 2017</a> </div>
        </article>
      </div>
      <div class="col-lg-3">
        <article>
          <div class="left-mag"><img src="https://wp.zillowstatic.com/streeteasy/2/shutterstock_410338984-795b67-220x147.jpg"></div>
          <div> <a class="Feeds-itemTitle" href="#">Bangkok</a> <a class="Feeds-itemDescription" href="#">#StreetEasyFinds: Our Favorite Photos From September 2017</a> </div>
        </article>
      </div>
      <div class="col-lg-3">
        <article>
          <div class="left-mag"><img src="https://wp.zillowstatic.com/streeteasy/2/shutterstock_410338984-795b67-220x147.jpg"></div>
          <div> <a class="Feeds-itemTitle" href="#">Bangkok</a> <a class="Feeds-itemDescription" href="#">#StreetEasyFinds: Our Favorite Photos From September 2017</a> </div>
        </article>
      </div>
      <div class="col-lg-3">
        <article>
          <div class="left-mag"><img src="https://wp.zillowstatic.com/streeteasy/2/shutterstock_410338984-795b67-220x147.jpg"></div>
          <div> <a class="Feeds-itemTitle" href="#">Bangkok</a> <a class="Feeds-itemDescription" href="#">#StreetEasyFinds: Our Favorite Photos From September 2017</a> </div>
        </article>
      </div>
    </div>
    <hr style="width: 100%; display: -webkit-inline-box;">
    <div>
      <div class="col-lg-12">
        <h2 class="Offers-title">Popular Buildings</h2>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="box2">
          <h3 class="Offers-itemTitle">Manhattan</h3>
          <img src="https://cdn-img2.streeteasy.com/nyc/image/14/217930214.jpg">
          <div class="BuildingCard-flag"> <span class="ActiveFlag"> 13 active listings </span> </div>
          <ul style="list-style: none;">
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">ORION Condominium</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Capitol at Chelsea</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">100 Maiden Lane</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Trump Parc</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Two WorldWide Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">30 Lincoln Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Centria</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Gramercy Place Condo</span></a> </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="box2">
          <h3 class="Offers-itemTitle">Manhattan</h3>
          <img src="https://cdn-img2.streeteasy.com/nyc/image/14/217930214.jpg">
          <div class="BuildingCard-flag"> <span class="ActiveFlag"> 13 active listings </span> </div>
          <ul style="list-style: none;">
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">ORION Condominium</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Capitol at Chelsea</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">100 Maiden Lane</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Trump Parc</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Two WorldWide Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">30 Lincoln Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Centria</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Gramercy Place Condo</span></a> </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="box2">
          <h3 class="Offers-itemTitle">Manhattan</h3>
          <img src="https://cdn-img2.streeteasy.com/nyc/image/14/217930214.jpg">
          <div class="BuildingCard-flag"> <span class="ActiveFlag"> 13 active listings </span> </div>
          <ul style="list-style: none;">
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">ORION Condominium</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Capitol at Chelsea</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">100 Maiden Lane</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Trump Parc</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Two WorldWide Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">30 Lincoln Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Centria</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Gramercy Place Condo</span></a> </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="box2">
          <h3 class="Offers-itemTitle">Manhattan</h3>
          <img src="https://cdn-img2.streeteasy.com/nyc/image/14/217930214.jpg">
          <div class="BuildingCard-flag"> <span class="ActiveFlag"> 13 active listings </span> </div>
          <ul style="list-style: none;">
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">ORION Condominium</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Capitol at Chelsea</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">100 Maiden Lane</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Trump Parc</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Two WorldWide Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">30 Lincoln Plaza</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Centria</span></a> </li>
            <li class="Offers-addressItem"> <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Gramercy Place Condo</span></a> </li>
          </ul>
        </div>
      </div>
    </div>

</div>

    <div class="row">
   
     <?php include("footer.php"); ?>
    </div>

<div class="modal fade" id="vote" tabindex="-1" role="dialog" aria-labelledby="voteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="panel-title" id="voteLabel"><span class="glyphicon glyphicon-arrow-right"></span> Refine Your Search</h4>
      </div>
      <div class="modal-body">
        <div class="">
          <div class="row margin_top">
            <div class="col-md-9">
              <div class="form-group">
                <label class="control-label" for="name">LOCATION</label>
                <select multiple class="chosen-select form-control form-control2">
                  <option>American Black Bear</option>
                  <option>Asiatic Black Bear</option>
                  <option>Brown Bear</option>
                  <option>Giant Panda</option>
                  <option>Sloth Bear</option>
                  <option>Sun Bear</option>
                  <option>Polar Bear</option>
                  <option>Spectacled Bear</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="control-label" for="name">TYPE</label>
                <select id="appointmentfor" name="appointmentfor" class="form-control form-control2">
                  <option value="Service#1">Service#1</option>
                  <option value="Service#2">Service#2</option>
                  <option value="Service#3">Service#3</option>
                  <option value="Service#4">Service#4</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row margin_top">
            <div class="col-md-3">
              <div class="form-group">
                <label class="control-label" for="name">PRICE</label>
                <select class="form-control form-control2">
                  <option value="">Any</option>
                  <option value="Custom">» Custom</option>
                  <option value="100000">฿100,000</option>
                  <option value="150000">฿150,000</option>
                  <option value="200000">฿200,000</option>
                  <option value="250000">฿250,000</option>
                  <option value="300000">฿300,000</option>
                  <option value="400000">฿400,000</option>
                  <option value="500000">฿500,000</option>
                  <option value="600000">฿600,000</option>
                  <option value="700000">฿700,000</option>
                  <option value="750000">฿750,000</option>
                  <option value="800000">฿800,000</option>
                  <option value="900000">฿900,000</option>
                  <option value="1000000">฿1,000,000</option>
                  <option value="1250000">฿1,250,000</option>
                  <option value="1500000">฿1,500,000</option>
                  <option value="1750000">฿1,750,000</option>
                  <option value="2000000">฿2,000,000</option>
                  <option value="2250000">฿2,250,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="control-label" for="name">&nbsp;</label>
                <select class="form-control form-control2">
                  <option value="">Any</option>
                  <option value="Custom">» Custom</option>
                  <option value="100000">฿100,000</option>
                  <option value="150000">฿150,000</option>
                  <option value="200000">฿200,000</option>
                  <option value="250000">฿250,000</option>
                  <option value="300000">฿300,000</option>
                  <option value="400000">฿400,000</option>
                  <option value="500000">฿500,000</option>
                  <option value="600000">฿600,000</option>
                  <option value="700000">฿700,000</option>
                  <option value="750000">฿750,000</option>
                  <option value="800000">฿800,000</option>
                  <option value="900000">฿900,000</option>
                  <option value="1000000">฿1,000,000</option>
                  <option value="1250000">฿1,250,000</option>
                  <option value="1500000">฿1,500,000</option>
                  <option value="1750000">฿1,750,000</option>
                  <option value="2000000">฿2,000,000</option>
                  <option value="2250000">฿2,250,000</option>
                  <option value="2500000">฿2,500,000</option>
                  <option value="2750000">฿2,750,000</option>
                  <option value="3000000">฿3,000,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="control-label" for="name">BEDROOMS</label>
                <select class="form-control form-control2">
                  <option value="">Any Beds</option>
                  <option value="<1">Studio only</option>
                  <option value="<=1">Studio / 1 br</option>
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
                <select class="form-control form-control2">
                  <option value="">Any Baths</option>
                  <option value=">=1">1 or more</option>
                  <option value=">=1.5">1.5 or more</option>
                  <option value=">=2">2 or more</option>
                  <option value=">=2.5">2.5 or more</option>
                  <option value=">=3">3 or more</option>
                  <option value=">=3.5">3.5 or more</option>
                  <option value=">=4">4 or more</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row margin_top">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3">
              <div class="form-group pull-right">
                <button type="button" class="btn btn-primary btn2">Search</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="vote2" tabindex="-1" role="dialog" aria-labelledby="voteLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="panel-title" id="voteLabel"><span class="glyphicon glyphicon-arrow-right"></span> Register</h4>
      </div>
      <div class="modal-body">
        <p class="text-center"> Register for free to save this property and receive updates on price and status changes. </p>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-login">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6"> <a href="#" class="active" id="login-form-link">Login</a> </div>
                  <div class="col-xs-6"> <a href="#" id="register-form-link">Register</a> </div>
                </div>
                <hr>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                      <div class="form-group">
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-12">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center"> <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a> </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
                      <div class="form-group">
                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-12">
                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="css/chosen.css">
<link rel="stylesheet" href="https://rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css">
<script src="https://rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"></script> 
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

$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
$(document).ready(function() {
    $('.teams').multiselect({
        templates: { // Use the Awesome Bootstrap Checkbox structure
            li: '<li><div class="checkbox"><label></label></div></li>'
        }
    });
    $('.multiselect-container div.checkbox').each(function (index) {

        var id = 'multiselect-' + index,
            $input = $(this).find('input');

        // Associate the label and the input
        $(this).find('label').attr('for', id);  
        $input.attr('id', id);

        // Remove the input from the label wrapper
        $input.detach();

        // Place the input back in before the label
        $input.prependTo($(this));

        $(this).click(function (e) {
            // Prevents the click from bubbling up and hiding the dropdown
            e.stopPropagation();
        });

    });
});

</script>
</body>
</html>
