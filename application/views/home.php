<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="<?php echo base_url(); ?>css/homepage.css" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
    <body class="white darken-3">
        
        <?php
            $this->load->view("partials/nav");
        // put your code here
        ?>
    <ul class="side-nav" id="nav-mobile">
      <li><a href="index.html"><i class="material-icons">camera</i>Gallery</a></li>
      <li class="active"><a href="index-dark.html"><i class="material-icons">brightness_3</i>Dark Theme</a></li>
      <li><a href="blog.html"><i class="material-icons">edit</i>Blog</a></li>
      <li><a href="docs.html"><i class="material-icons">school</i>Docs</a></li>
      <li><a href="full-header.html"><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
      <li><a href="horizontal.html"><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
      <li><a href="no-image.html"><i class="material-icons">texture</i>No Image Expand</a></li>
    </ul>
 
    <!-- Gallery -->
    <div id="portfolio" class="section gray">
      <div class="gallery row">
       
        <div class="col l4 m6 s12 gallery-item gallery-filter">
          <div class="gallery-curve-wrapper wutface">
            <a class="gallery-cover gray boxed" href= "index.php/search?service=education" >
                <img class="responsive-img" src="http://bunkiechamber.net/sites/default/files/Education.jpg" alt="placeholder">
                    <h2 class= "valign-wrapper" style="color:#fff ">  <p class= "hi" >Education</p> </h2>
            </a>
            <div class="gallery-body">
              <div class="title-wrapper">
                <h3>Sun</h3>
                <span class="price">$9.99</span>
              </div>
              <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
              <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

              <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
            </div>
            <div class="gallery-action">
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
            </div>
          </div>
        </div>
        <div class="col l4 m6 s12 gallery-item gallery-filter wutface">
          <div class="gallery-curve-wrapper ">
            <a class="gallery-cover gray boxed" href="index.php/search?service=finance">
               <img class="responsive-img" src="https://www.homes4uu.com/wp-content/uploads/2015/09/finance.jpg" alt="placeholder">
                 <h2 class= "valign-wrapper" style="color:#fff"><p style="border: 2px solid white; border-radius: 10px; padding: 15px;">Finance</p>  </h2>

            </a>
            <div class="gallery-body">
              <div class="title-wrapper">
                <h3>Big Bang 1</h3>
                <span class="price">$23.99</span>
              </div>
             

              <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
            </div>
            <div class="gallery-action">
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
            </div>
          </div>
        </div>
        <div class="col l4 m6 s12 gallery-item gallery-filter wutface">
          <div class="gallery-curve-wrapper"> 
            <a class="gallery-cover gray boxed" href="">
               <img class="sneakpeak " src="https://www.tacoma.uw.edu/sites/default/files/sections/FinanceOffice/travel-industry-air.jpg" alt="placeholder">
                  <h2 class= "valign-wrapper" style="color:#fff "> Coming Soon...  </h2>

            </a>
            <div class="gallery-body">
              <div class="title-wrapper">
                <h3>Maze</h3>
                <span class="price">$11.99</span>
              </div>
              <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
              <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

              <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
            </div>
            <div class="gallery-action">
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
            </div>
          </div>
        </div>
    </div><!-- /.container -->
    </div>
    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>js/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>js/color-thief.min.js"></script>
    <script src="<?php echo base_url(); ?>js/galleryExpand.js"></script>
    <script src="<?php echo base_url(); ?>js/init.js"></script>
    <script type="text/javascript">
    function searchScript() {
      var searchTerm = document.getElementById("input").value;
      window.location.href = "search.php?stvar=" + searchTerm;
      return false;
    };
  </script>
    <script>
       $(document).ready(function() {
          $('input.autocomplete').autocomplete({
          data: {
            "Razer": null,
            "Apple": null,
            "Microsoft": null,
            "Google": null,
            "Tutor": null,
            "SAT Tutor": null,
            "ACT Tutor": null,
            "ACT Tutor": null,
            "Education": null,
            "Career Developmesdfasdfsdnt": null,
            "Loans": null,
          },
          limit: 3, // The max amount of results that can be shown at once. Default: Infinity.
          onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
          },
          minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });


      });
   </script>
   <?php $this->load->view('partials/footer') ?>
    </body>
</html>
