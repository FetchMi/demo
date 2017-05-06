<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FetchmMi</title>

    <!-- Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="<?php echo base_url() ?>css/gallery-materialize.min.css" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
    <body>
     <div id="cardPopupPosition">
      <a style="display:block;" href="javascript:void(0)" onclick="toggle_visibility('cardPopupPosition');">
            <div style="display:transparent; position:absolute; width: 100%; height:100%; top:0; left:0; z-index:-1"></div>
      </a>
      <div class="cardPopupBoxWrapper">
        <div class="cardPopupBoxContent">
          <div class="row">
            <div class="col s7" style="border-right:1px dashed #4db6ac">
              <h2>Company Name</h2>
              <h5> Location Location Location Location</h5>
              <span style="font-size:16px"> CategoryTag 1, CategoryTag 2, CategoryTag 3,...</span>
              <p style="font-size:18px">How does a stone assistance cooperate next to the closet? This depressed corpse pretends to be the blank next to a leaded soap. The revolutionary boggles beneath a shareholder! The limb storms next to the manpower. When will the instructed diagram pop? Why won't the springing consent study?</p>
            </div>
            <div  class="col s5" style="position:relative">
              <div id="cardScore">
                <span id="cardScoreText">100</span>
                <div class="row" style="text-align:center; font-size:16px">
                </div>
                <div id="cardScoreInfo" style="font-size:14px; line-height:14px">
                	<p><b>17 Reviews</p></b>
                	<p><b><span style="color: green">Positive: 17</span> | <span style="color:red">Negative: 0</span></p></b>
                	<p><b>Overall Rating: <span style="color:green">100</span></p></b>
                	<div class="divider" style="margin:0 auto; width:90%"></div>
                	<div class="row" style="line-height:7px; margin-top:5px">
                		<div class="col s6"><p><b>Product Quality: <span style="color:green">100</span></p></b></div>		         
		                <div class="col s6"><p><b>Customer Service: <span style="color:green">100</span></p></b></div>
		                <div class="col s6"><p><b>Cost-Efficiency: <span style="color:green">100</span></p></b></div>
		                <div class="col s6"><p><b>Ease of Payment: <span style="color:green">100</span></p></b></div>
	                </div>
                </div>
              </div>
              <br>
              <div class="divider"></div>
              <br>
              <?php if(count($companies)>0){ ?>
                <ul class="collapsible" data-collapsible="accordion">
                    <?php foreach($companies as $company) { ?>
                      <li>
                        <div class="collapsible-header active"><?php echo $company->CompanyName; ?></div>
                        <div class="collapsible-body">
                        <span><?php echo $company->Description ?></span>
                        <div class="button-control">
                          <a href="#" class="waves-effect waves-light btn">View</a>
                          <a href="#" class="waves-effect waves-light btn">Message</a>
                          <a href="#" class="waves-effect waves-light btn">Other</a>
                        </div>
                        </div>

                      </li>
                      <?php } ?>
                </ul>
              <?php }else{?>
              <h3>Oops! Your search has no results</h3>
              <?php } ?>
              
            	</div>
            </div>
          </div>                
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function(){
    $('.collapsible').collapsible();
	  });
	  </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>js/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>js/color-thief.min.js"></script>
    <script src="<?php echo base_url(); ?>js/galleryExpand.js"></script>
    <script src="<?php echo base_url(); ?>js/init.js"></script>


    <a style="display:block" href="javascript:void(0)" onclick="toggle_visibility('cardPopupPosition');">
      <div class="col l4 m6 s12">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
              <div class="row">
                <div class="col s8">
                  <span class="card-title" style="font-size:28px">Company Name</span>
                    <p>Category: </p>
                    <p>Location: </p>
                    <p>Cost: <span style="color:#eeff41">$$$$$</span></p>      
                </div>
                <div class="col s4" style="border-left: 1px solid">
                	<!--img src="fake-logo.jpg" alt="Logo" style="width:100%; height:100%; border-radius:3px;"-->
                  <p style="font-size:52px; color:#00e676; text-align:center">100</p>
                  <p style="text-align:center"> 17 Reviews</p>
                </div>
              </div>
              <i>This company is 10 words blah blah blah blah blah...</i>
          </div>
        </div>
      </div>
    </a>
    </body>
</html>
