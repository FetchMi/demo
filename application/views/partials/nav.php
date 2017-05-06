  <!-- Navbar and Header -->
    <nav class="nav-extended z-depth-0 blue-grey darken-3">
      <div class="nav-background">
        <img class="active responsive-img" src="<?php echo base_url(); ?>imgs/galaxy.jpg" alt="" style="position: absolute; min-height: 100%; min-width: 100%;">
      </div>
      <div class="nav-wrapper container">
        <a href="home.html" class="brand-logo"><i class="material-icons" style= "font-size: 36px">invert_colors</i></a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="large material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li class="active"><a href="home.html">Home</a></li>
          <li><a href="features.html">Features</a></li>
          <li><a href="about.html">About Us</a></li>
          <li>
            <div id="popupBoxOnePosition">
              <div class="popupBoxWrapper">
                <div class="popupBoxContent">

                <div class="row">
                  <div class="col s12">
                    <ul class="tabs">
                      <div class="col s1"></div>
                      <li class="tab col s3"><a href="#login">Login</a></li>
                      <li class="tab col s3"><a href="#signup">Sign Up</a></li>
                    </ul>
                  </div>
                  <div id="login" class="col s12">
                    <form action="/action_page.php">
                      <div style="background:white; padding: 30px">
                        <label><b>Email</b></label>
                        <input type="text" style="background:#37474f; border-radius: 8px; text-indent: 10px; color:#b2dfdb" placeholder="Enter Email" name="uname" required>
                        <br>
                        <label><b>Password</b></label>
                        <input type="password" style="background:#37474f; border-radius: 8px; text-indent: 10px; color:#b2dfdb" placeholder="Enter Password" name="psw" required>

                        <br>
                        
                        <div class="row" style="margin-top:10px">  
                          <div class="col s1"></div>
                          <div class="col s4">  
                            <button type="submit" style="width:100%; background: #4db6ac; border:none">Login</button>
                          </div>
                          <div class="col s1"></div>
                          <div class="col s6">
                            <a href="#" style="color: #4db6ac; width:80%">Forgot your password?</a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div id="signup" class="col s12">
                    <form action="/action_page.php">
                      <div style="background:white; padding: 30px">
                        <label><b>Email</b></label>
                        <input type="text" style="background:#37474f; border-radius: 8px; text-indent: 10px; color:#b2dfdb" placeholder="Enter Email" name="uname" required>
                        <br>
                        <label><b>Password</b></label>
                        <input type="password" style="background:#37474f; border-radius: 8px; text-indent: 10px; color:#b2dfdb" placeholder="Enter Password" name="psw" required>
                        <br>
                         <label><b>Password</b></label>
                        <input type="password" style="background:#37474f; border-radius: 8px; text-indent: 10px; color:#b2dfdb" placeholder="Re-enter Password" name="psw" required>
                        
                        <div class="row">  
                          <div class="col s7">
                            <p style="color:#4db6ac; font-size:16px; line-height: 16px">By signing up, you agree to FetchMi's Terms of Service and Privacy Policy
                            </p>
                          </div>
                          <div class="col s4">  
                            <button type="submit" style="width:100%; background: #4db6ac; border:none">Sign Up</button>
                          </div>
                        </div>
                        <p> Not a FetchMi member? </p>
                      </div>
                    </form>
                  </div>
                </div>
                  <a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');" style="width:20%; background:#d32f2f; text-align:center; margin-top:15px">Close</a>
                </div>
              </div>
            </div>
              <a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');">Join Us Popup</a>
          </li>
          <li><a class='dropdown-button' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Join Us<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id='feature-dropdown' class='dropdown-content'>
          <li><a href="full-header.html">I am a Customer</a></li>
          <li><a href="horizontal.html">I am a Business</a></li>
          <li><a href="no-image.html">Affiliate Program</a></li>
        </ul>

      </div>

        <!--search bar--> 
        <div class="nav-header valign-wrapper" style="height:62vh;">
                <div class="center maintitle">

                    <h1 id="fetchmititle">FetchMi</h1>  

                      <div class="tagline" style="font-size:13px; margin-top: -14%; font-style: italic;">The world, at your service</div>
                         <form id="search-form" action="index.php/search" autocomplete="off"
                            <div>
                               <input name="service" type="text" id="autocomplete-input" class="autocomplete" placeholder="Search for any service">
                               <button type="submit" class="btn btn-floating waves-effect transparent" style="float: right; position: relative; margin-left: -2%;margin-top: -25%;" >
                                   <i class="material-icons" style="font-size: 25px; margin-top:-7.5px;">search</i>
                               </button>
                              <br>
                            </div>
                        </form>

                </div>
        </div>


      <!-- Fixed Masonry Filters -->
     
    </nav>