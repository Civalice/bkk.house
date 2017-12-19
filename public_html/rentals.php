<?php 
include("header.php");

?>
<head>
<style>
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
              <li role="presentation" ><a href="index.php" >SALES </a></li>
              <li role="presentation"><a href="rentals.php" class="active2">RENTALS</a></li>
              <li role="presentation"><a href="buildings.php">BUILDINGS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row margin_top">
        <div class="col-md-9">
          <div class="form-group">
            <label class="control-label" for="name">LOCATION</label>
            <select multiple class="chosen-select form-control form-control2">
              <option> <i class="fa fa-map-marker" aria-hidden="true"></i> American Black Bear</option>
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
          <div style="position: absolute;margin-left: -21px; top: 33px;">to</div>
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
        <div class="col-md-5"></div>
        <div class="col-md-1"> </div>
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
                      <div class="col-xs-12 col-sm-12">
                        <div class="carbox"> <a class="img-carbox" href="#"> <img src="https://tpc.googlesyndication.com/pagead/imgad?id=CICAgKDLj93idxABGAEyCKApsy4sZLuw" /> </a>
                          <div class="carbox-content">
                            <h4 class="carbox-title">
                              <p class="slug2">Featured Building</p>
                            </h4>
                            <h5 class="box_text"> Austin Nichols House</h5>
                          </div>
                          <div class="carbox-read-more">
                            <ul class="box_ul">
                              <li>338 Units</li>
                              <li>7 Stories</li>
                              <li><span>1915 Built</span></li>
                            </ul>
                          </div>
                          <div class="carbox-read-more">
                            <div class="box_butttom">Condo in <span>Williamsburg</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12">
                        <div class="carbox"> <a class="img-carbox" href="#"> <img src="https://tpc.googlesyndication.com/pagead/imgad?id=CICAgKDLy4XeFBABGAEyCFH87fqRo4U8" /> </a>
                          <div class="carbox-content">
                            <h4 class="carbox-title">
                              <p class="slug2">Featured Building</p>
                            </h4>
                            <h5 class="box_text"> Austin Nichols House</h5>
                          </div>
                          <div class="carbox-read-more">
                            <ul class="box_ul">
                              <li>338 Units</li>
                              <li>7 Stories</li>
                              <li><span>1915 Built</span></li>
                            </ul>
                          </div>
                          <div class="carbox-read-more">
                            <div class="box_butttom">Condo in <span>Williamsburg</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-8">
                    <div class="carbox"> <a class="img-carbox2" href="#"> <img src="https://tpc.googlesyndication.com/pagead/imgad?id=CICAgKDLz96kqQEQARgBMggBEPV8mGH4bw" /> </a>
                      <div class="carbox-content">
                        <h4 class="carbox-title">
                          <p class="slug2">Featured Building</p>
                        </h4>
                        <h5 class="box_text"> Austin Nichols House</h5>
                      </div>
                      <div class="carbox-read-more">
                        <ul class="box_ul">
                          <li>338 Units</li>
                          <li>7 Stories</li>
                          <li>1915 Built <span style="padding-left: 50px;">Sutton Place</span></li>
                        </ul>
                      </div>
                      <div class="carbox-read-more">
                        <div class="box_butttom2">Designed by architectural firms, Incorporated Bangkok and Goldstein Hill & West Architects, The Sutton's 90 residences feature an unparalleled world of rich, modern finishes and handcrafted, artisanal detailing. The striking, evocative façade consists of roman-style brick individually hand laid on all elevations of the façade. The Sutton looks to the future while keeping in mind the very best of what has come before it.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="big_separator items item-grid">
                      <h2>EDITOR'S PICKS </h2>
                    </div>
                  </div>
                  <div class="content">
                    <div class="col-xs-12 col-sm-4"> <img src="https://cdn-img3.streeteasy.com/nyc/image/15/258024315.jpg" class="img-responsive2" /> <a href="#" class="bottom_link"> MUST SEE! Rare 4-Bedroom in Bay <br>
                      Ridge </a> </div>
                    <div class="col-xs-12 col-sm-4"> <img src="https://cdn-img3.streeteasy.com/nyc/image/47/278978947.jpg" class="img-responsive2" /> <a href="#" class="bottom_link"> Most Saved For-Sale Listings in August <br>
                      2017 </a> </div>
                    <div class="col-xs-12 col-sm-4"> <img src="https://cdn-img0.streeteasy.com/nyc/image/20/285507020.jpg" class="img-responsive2" /> <a href="#" class="bottom_link"> Tribeca Lofts in Art Deco Landmarks </a> </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="big_separator items item-grid">
                      <h2>ON THE BLOG </h2>
                    </div>
                  </div>
                  <div class="content">
                    <div class="col-xs-12 col-sm-4"> <a class="list-quotes" href="#"> 
                      <!-- Recommended size 360X360 --> 
                      <img class='img-responsive2' alt="img" src="https://wp.zillowstatic.com/streeteasy/2/42-West-33rd-street-f17498-220x105.jpg">
                      <div class="quotes">
                        <p> Housing Lottery at 42 West 33rd in Midtown Offers ฿867 Apts </p>
                      </div>
                      </a> </div>
                    <div class="col-xs-12 col-sm-4"> <a class="list-quotes" href="#"> 
                      <!-- Recommended size 360X360 --> 
                      <img class='img-responsive2' alt="img" src="https://wp.zillowstatic.com/streeteasy/2/229812057-3fc7c4-220x147.jpg">
                      <div class="quotes">
                        <p> Housing Lottery at 42 West 33rd in Midtown Offers ฿867 Apts </p>
                      </div>
                      </a> </div>
                    <div class="col-xs-12 col-sm-4"> <a class="list-quotes" href="#"> 
                      <!-- Recommended size 360X360 --> 
                      <img class='img-responsive2' alt="img" src="https://wp.zillowstatic.com/streeteasy/2/Pasted-image-at-2017_09_29-05_09-PM-3f451a-220x147.png">
                      <div class="quotes">
                        <p> Housing Lottery at 42 West 33rd in Midtown Offers ฿867 Apts </p>
                      </div>
                      </a> </div>
                  </div>
                </div>
                <div class="row">
                  
                </div>
              </div>
              <div class="col-lg-3">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
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
                  <div class="col-xs-12 col-sm-12">
                    <div class="margin_top"> <a class="img-carbox3" href="#"> <img src="https://cdn-img1.streeteasy.com/nyc/image/49/274564249.jpg"> </a>
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
                  <div class="col-xs-12 col-sm-12">
                    <div class="margin_top"> <a class="img-carbox3" href="#"> <img src="https://cdn-img3.streeteasy.com/nyc/image/39/248245739.jpg"> </a>
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
