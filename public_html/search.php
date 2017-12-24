<?php 
error_reporting(0);
include("header.php");
include("function.php");
$clsadvansearch = new searching();
extract($_POST);
	//print_r($_POST['hiddenpropertysalesorrent']);
	$hiddensalesorRent = $_POST['hiddenpropertysalesorrent'];
	$location = $_POST['location'];
	$locationBymetro = $_POST['locationbymetro'];
	$propertytype = $_POST['propertytype'];
	$priceFrom = $_POST['priceFrom'];
	$priceTo = $_POST['priceTo'];
	$bedrooms = $_POST['noOfBedrooms'];
	$bathroom = $_POST['noOfBathrooms'];	
	$result = $clsadvansearch->searchByfilter($location,$locationBymetro,$propertytype ,$hiddensalesorRent, $priceFrom ,$priceTo ,$bedrooms ,$bathroom);
	$noof = mysqli_num_rows($result);
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
.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
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
  <?php if($noof > 0) : ?>
    <h3><strong><?=$noof;?></strong> Upper West Side Apartments </h3>
  <?php else : ?>
    <h3> Result not found. </h3>
  <?php endif; ?>
	<div> 
		<a href="#" class="button_modal" data-toggle="modal" data-target="#vote" data-original-title style="margin-right:20px;" hidden>Refine This Search </a>   
		
		<select name="sort_by" se:behavior="form_submitter" style="height: 34px;" hidden>
			<option selected="selected" value="listed_desc">Newest</option>
			<option value="interesting_desc">Recently updated</option>
			<option value="price_desc">Most expensive</option>
			<option value="price_asc">Least expensive</option>
			<option value="sqft_desc">Largest</option>
			<option value="sqft_asc">Smallest</option>
		</select>
    </div>
 
<div class="">
<?php 
//$rrrr = mysqli_fetch_array($result);
foreach($result as $res) { 
	 ?>
<article class="item featured">
  <figure class="photo">
    <div  class="banner saved unsaved"></div>
			<?php 
			$image = $res['Image1'];
			$imageexp = explode(',',$image);
			?>
    <a href="details.php?proname=<?=base64_encode($res['ID']);?>"><img alt="50 West 93rd Street" class="" src="admin/uploadimages/<?=$imageexp[0];?>"></a> </figure>
  <div class="featured-tag"><?=$res['PropertyType'];?></div>
  <div class="details row">
    <h3 class="details-title"> <a href="details.php?proname=<?=base64_encode($res['ID']);?>"><?=$res['PropertyName'];?></a>
       
    </h3>
    <ul>
      <li class="price-info"> <span class="price_arrow">↓</span> <span class="price">$<?=$res['RentPrice'];?></span> <span class="secondary_text">for rent</span> 
	  <span class="detail_cell"></span> <span class="price">$<?=$res['SalePrice'];?></span> <span class="secondary_text">for sale</span> </li>
      <li>
        <ul class="details_info details-info-flex">
          <li class="first_detail_cell"><?=$res['Bedrooms'];?> beds</li>
          <li class="detail_cell"><?=$res['Bathrooms'];?> bath</li>
          <li class="last_detail_cell"><?=$res['Sizesqm'];?> ft²</li>
        </ul>
      </li>
      <li class="details_info"> Rental Unit in <a href="/neighborhoods/upper-west-side/"><?=$res['Location'];?></a> </li>
      <li class="details_info details-info-flex"> Listed by <?=$res['OwnerName'];?><br>
      </li>
      <li> </li>
    </ul>
  </div>
</article>
<?php } ?>

			<!--<ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              
              <li><a href="#">»</a></li>
            </ul>-->


</div>
</div>




</div>
</div>



<div class="row">
<?php include("footer.php");?>
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


</script>
</body>
</html>
