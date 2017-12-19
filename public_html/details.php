<?php
include("header.php");
include("function.php");
$id = base64_decode($_GET['proname']);
$clsadvansearch = new searching();
$result = $clsadvansearch->getdetailsByProperty($id);
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
.item {
	display: table;
	padding: 0px 0;
	margin-top:0px;
}
.slider_img4{width:100%;
height:400px !important }

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

<div class="container-fluid margin_top">
  <div class="container">
    <div class="">
      <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
          <div class='carousel-outer'> 
            <!-- me art lab slider -->
            <div class='carousel-inner '>
			<?php
			//$image = $result['Image1'];
			// $edited_str = substr($image, 0, -1);
			// $imageexp = explode(',',$edited_str);
			// foreach($imageexp as $img)
			// {
				// print_r($img);
			// }
			$image = $result['Image1'];
			$imageexp = explode(',',$image);

			$count = count($imageexp)-1;
			?>
              <div class='item active'><img class="slider_img4" src='admin/uploadimages/<?=$imageexp[0];?>' alt=''id="zoom_05"  /></div>
			  <?php for($i = 1;$i<$count;$i++) { ?>
              <div class='item'> <img  class="slider_img4" src='admin/uploadimages/<?=$imageexp[$i];?>' alt=''/> </div>
              <?php } ?>
				  <script>
			  $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
			</script> 
            </div>
            
            <!-- sag sol --> 
            <a class='left carousel-control' href='#carousel-custom' data-slide='prev'> <span class='glyphicon glyphicon-chevron-left'></span> </a> <a class='right carousel-control' href='#carousel-custom' data-slide='next'> <span class='glyphicon glyphicon-chevron-right'></span> </a> </div>
          
          <!-- thumb -->
          <ol class='carousel-indicators mCustomScrollbar meartlab'>
		  
            <li data-target='#carousel-custom' data-slide-to='0' class='active '><img style="width:80px" src='admin/uploadimages/<?=$imageexp[0];?>'/> </li>
			 <?php for($i = 1;$i<$count;$i++) { ?>
			 <li data-target='#carousel-custom' class=""data-slide-to='<?=$i;?>'><img style="width:80px" src='admin/uploadimages/<?=$imageexp[$i];?>' /> </li>

			 
		   <?php } ?>
		    
          </ol>
        </div>
        <script type="text/javascript">

$(document).ready(function() {
    $(".mCustomScrollbar").mCustomScrollbar({axis:"x"});
});
</script>
        <div>
          <div class="big_separator items item-grid margin_top">
            <h2>DESCRIPTION </h2>
            <p align="justify"> <?=$result['PropertyComment'];?> </p>
          </div>
        </div>
        <div>
          <div class="big_separator items item-grid margin_top">
            <h2>AMENITIES </h2>
            <p> <?=$result['Amenities'];?><br>
            </p>
          </div>
          <div class="big_separator items item-grid margin_top">
            <h2>LOCATED IN <?=$result['Location'];?> </h2>
            <div class="details_info"> <a href="#"><?=$result['Location'];?> </a> <?=$result['LocationByMetro'];?> </div>
            <div class="details_info"> Co-op in <a href="#">Jackson Heights</a> </div>
          </div>
          <div class="big_separator items item-grid margin_top" style="margin-top:40px;" hidden>
            <h2>PRICE HISTORY & UNIT INFORMATION </h2>
            <table style="width:100%" class="table table-bordered">
              <tr>
                <th>12/05/2016</th>
                <th>Listed by Douglas Elliman</th>
                <th>$329,000</th>
              </tr>
              <tr>
                <td>02/17/2017</td>
                <td>Listing entered contract</td>
                <td>$329,000</td>
              </tr>
              <tr>
                <td>07/20/2017</td>
                <td>Price increased by 6%</td>
                <td>$349,000</td>
              </tr>
              <tr>
                <td>07/21/2017</td>
                <td>Re-listed by Douglas Elliman</td>
                <td>$349,000</td>
              </tr>
            </table>
            <br>
            <a class="btn btn-default pull-right "  href="#" id="more_in_building_button"> Want to analyze this property with our Comps Report Generator? </a> </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <h1 class="building-title"> <a class="incognito" href="#"><?=$result['PropertyName'];?></a> </h1>
        <div class="price3 "> $<?=$result['RentPrice'];?> <span class="secondary_text">for rent</span> </div>
		
        <div class="details_info"> <span class="detail_cell first_detail_cell">5.5 rooms</span> <span class="detail_cell "><?=$result['Bedrooms'];?> beds</span> <span class="detail_cell last_detail_cell"><?=$result['Bathrooms'];?> Baths</span></div>
        <div class="details_info"> <span class="nobreak">Rental Unit</span> <span class="nobreak">in <a href="https://streeteasy.com/for-rent/upper-east-side"><?=$result['Location'];?></a></span> </div>
        
        
        <div class="vitals top_spacer margin_top" hidden>
          <div class="details_info"> CONTACT AGENT
            <form class="margin_top">
              <div class="form-group col-lg-12">
                <input type="email" class="form-control form-control2 " id="email" placeholder="Your Name">
                <input type="password" class="form-control form-control2" id="pwd" placeholder="Phone Number">
                <input type="password" class="form-control form-control2" id="pwd" placeholder="email">
                <textarea class="form-control form-control2" rows="5" id="pwd" placeholder="I'm interested in 37-11 84th St #2."></textarea>
                <button type="submit" class="btn btn-danger form-control form-control2 margin_top">Send message</button>
              </div>
              <div style="clear: both;"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div>

      <div class="col-lg-12">
        <div class="big_separator items item-grid margin_top">
          <h2>CONDOS</h2>
          <div class="col-xs-12 col-sm-3">
            <div class="right_text">FEATURED Bangkok APARTMENTS</div>
            <div class=""> <a class="img-carbox3" href="#"> <img src="https://cdn-img3.streeteasy.com/nyc/image/59/254099959.jpg"> </a>
              <div class="carbox-content">
                <h4 class="carbox-title">
                  <p class="slug2">Featured Building</p>
                </h4>
                <h5 class="text-left2 box_text "> Austin Nichols House</h5>
                <span class="price">฿15,000,000</span> </div>
              <div class="carbox-read-more">
                <ul class="box_ul">
                  <li>4 beds</li>
                  <li>4.5 baths</li>
                  <li><span>4,158 ft²</span></li>
                </ul>
              </div>
              <div class="carbox-read-more">
                <div class="box_butttom text-left2"> Condo in Nolita</div>
              </div>
              <div class="carbox-read-more">
                <div class="box_butttom text-left2"> Listed by Compass </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="right_text">FEATURED Bangkok APARTMENTS</div>
            <div class=""> <a class="img-carbox3" href="#"> <img src="https://cdn-img3.streeteasy.com/nyc/image/59/254099959.jpg"> </a>
              <div class="carbox-content">
                <h4 class="carbox-title">
                  <p class="slug2">Featured Building</p>
                </h4>
                <h5 class="text-left2 box_text "> Austin Nichols House</h5>
                <span class="price">฿15,000,000</span> </div>
              <div class="carbox-read-more">
                <ul class="box_ul">
                  <li>4 beds</li>
                  <li>4.5 baths</li>
                  <li><span>4,158 ft²</span></li>
                </ul>
              </div>
              <div class="carbox-read-more">
                <div class="box_butttom text-left2"> Condo in Nolita</div>
              </div>
              <div class="carbox-read-more">
                <div class="box_butttom text-left2"> Listed by Compass </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="right_text">FEATURED Bangkok APARTMENTS</div>
            <div class=""> <a class="img-carbox3" href="#"> <img src="https://cdn-img3.streeteasy.com/nyc/image/59/254099959.jpg"> </a>
              <div class="carbox-content">
                <h4 class="carbox-title">
                  <p class="slug2">Featured Building</p>
                </h4>
                <h5 class="text-left2 box_text "> Austin Nichols House</h5>
                <span class="price">฿15,000,000</span> </div>
              <div class="carbox-read-more">
                <ul class="box_ul">
                  <li>4 beds</li>
                  <li>4.5 baths</li>
                  <li><span>4,158 ft²</span></li>
                </ul>
              </div>
              <div class="carbox-read-more">
                <div class="box_butttom text-left2"> Condo in Nolita</div>
              </div>
              <div class="carbox-read-more">
                <div class="box_butttom text-left2"> Listed by Compass </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
          <p>Report a problem</p>
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
