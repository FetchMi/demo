//Cardfiller ------------------------ NOT FINISHED
/* ToDo
	-Add the reviews
	-Set up the form to actually submit somewhere!
	-Like, fetchlist and chat now should do stuff
*/

function addCard(parent,arrayData) {
	
	var card = document.createElement("div");
	card.setAttribute("class","col l4 m6 s12 gallery-item gallery-expand gallery-filter "+arrayData.Category);
	
	card.innerHTML = "\
<div class=\"gallery-curve-wrapper\">\
	<a class=\"gallery-cover gray\">\
		<img class=\"circle responsive-img\" src=\""+arrayData.LogoLink+"\" alt=\"Click for Info\">\
	</a>\
	<div class=\"gallery-header\">\
		<span>"+arrayData.CompanyName+"</span>\
	</div>\
	<div class=\"gallery-body\">\
		<div class=\"title-wrapper\">\
			<h3>"+arrayData.CompanyName+"</h3>\
			<p class=\"Category\">"+arrayData.Category+"/"+arrayData.SubCategory+"</p>\
		</div>\
		<div id=\"section1divider\">\
		</div>\
		<div class=\"col s12 m6 l6\">\
			<br>\
			<p class=\"description flow-text\"> <a href=\"\">\
				"+arrayData.Description+"\
			</p>\
			<br><br>\
			<!--  <div class=\"divider5\" id=\"dividermargin\"></div> -->\
			<br>\
			<div class=\"boxed center-align\" style=\"border:2px; border-style:solid; border-color:#fff; border-radius: 13px; padding: 0.5em;\">\
				<h5 style=\"font-weight:400; color:#80cbc4;\">FetchMi Exclusives</h5>\
				<div class=\"container\">\
					<p class\"flow-text\">PLACEHOLDER TEXT!</p>\
				</div>\
			</div>\
			<!--<div class=\"divider5\" id=\"dividermargin\"></div>-->\
			<!--   <div class=\"breakpoint\">\
			<h5 id=\"contactinfo\" style=\"font-weight:600;\">Contact Them!</h5>\
				<div class=\"container valign-wrapper\">\
					<ul id=\"contactlist\" >\
					<li><strong>Email:</strong>"+arrayData.Email+"</li>\
					<li><strong>Phone:</strong>"+arrayData.Phone+"</li>\
					<li><strong>Adress:</strong>"+arrayData.Address+"</li>\
					</ul>\
				</div>\
			</div> -->\
		</div>\
		<!-- Company Rating Display -->\
		<div class=\"col s5\">\
			<!--svg id=\"animated\" viewbox=\"0 0 100 100\">\
			</svg-->\
		</div>\
		<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>\
		<!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js\"></script> -->\
		<div class=\"col s12 m6 l6 atglance flow-text\">\
			<!--<p class=\"score\" id=\"count\">87%</p>-->\
			<div id=\"mything\" class=\"containerthing\">\
			</div>\
			<!--  <p id=\"scoretext\">What does this mean?</p> -->\
			<div class=\"divider5\">\
			</div>\
			<h2 class=\"center-align\">At a Glance</h2>\
			<ul class=\"collapsible popout\" data-collapsible=\"accordion\">\
				<li>\
					<div class=\"collapsible-header active\"><i class=\"material-icons\">filter_drama</i>"+arrayData.Feature1Title+"</div>\
					<div class=\"collapsible-body\"><span id=\"cardfacts\">"+arrayData.Feature1+"</span></div>\
				</li>\
				<li>\
					<div class=\"collapsible-header\"><i class=\"material-icons\">place</i>"+arrayData.Feature2Title+"</div>\
					<div class=\"collapsible-body\"><span id=\"cardfacts\">"+arrayData.Feature2+"</span></div>\
				</li>\
				<li>\
					<div class=\"collapsible-header\"><i class=\"material-icons\">whatshot</i>"+arrayData.Feature3Title+"</div>\
					<div class=\"collapsible-body\"><span id=\"cardfacts\">"+arrayData.Feature3+"</span></div>\
				</li>\
				<li>\
					<div class=\"collapsible-header\"><i class=\"material-icons\">language</i>"+arrayData.Feature4Title+"</div>\
					<div class=\"collapsible-body\"><span id=\"cardfacts\">"+arrayData.Feature4+"</span></div>\
				</li>\
			</ul>\
			<br>\
		</div>\

		<ul id=\"tabs-swipe-demo\" class=\"tabs reviewtab\">\
			<li class=\"tab col s4\"><a href=\"#test-swipe-1\">Online Reviews</a></li>\
			<li class=\"tab col s4\"><a href=\"#test-swipe-2\"> Offline Reviews</a></li>\
			<li class=\"tab col s4\"><a href=\"#test-swipe-3\">Personal Review</a></li>\
		</ul>\
		<div id=\"test-swipe-1\" class=\"col s12 gray\">No reviews yet.</div>\
		<div id=\"test-swipe-2\" class=\"col s12 white\">No reviews yet.</div>\
		<div id=\"test-swipe-3\" class=\"col s12 gray\">No reviews yet.</div>\
	</div>\
	<div class=\"gallery-action\">\
		<a class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\" title=\"Website\">web</i></a>\
		<a class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\" title= \"Add to FetchList\">add</i></a>\
		<a class=\"btn-floating btn-large waves-effect waves-light red\"><i class=\"material-icons\" title=\"Contact\">chat_bubble</i></a>\
	</div>\
</div>\
	";
	
	document.getElementById(parent).appendChild(card);
	return;
}


/*

/*
<div class="gallery-curve-wrapper">
	<a class="gallery-cover gray">
		<img class="responsive-img" src="http://media.paris-sharing.com/media/uploads/Logo_ParisSharing_rectangle_450px250px.jpg" alt="placeholder">
	</a>
	<div class="gallery-header">
		<span>Airbnb</span>
	</div>
	<div class="gallery-body">
		<div class="title-wrapper">
			<h3>Airbnb</h3>
			<p class="Category">Travel/Housing</p>
		</div>
		<div id="section1divider">
		</div>
		<div class="col s12 m6 l6">
			<br>
			<p class="description flow-text"> <a href="">
				Ivy International </a>venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch. Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.
			</p>
			<br><br>

			<!--  <div class="divider5" id="dividermargin"></div> -->
			<br>
			<div class="boxed center-align" style="border:2px; border-style:solid; border-color:#fff; border-radius: 13px; padding: 0.5em;">
			<h5 style="font-weight:400; color:#80cbc4;">FetchMi Exclusives</h5>
			<div class="container">
			<p class"flow-text"> First Airbnb stay is 20% off! Instructions:  Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk </p>
			</div>
			</div> 
			<!--<div class="divider5" id="dividermargin"></div>-->

			<!--   <div class="breakpoint"> 
			<h5 id="contactinfo" style="font-weight:600;">Contact Them!</h5>
			<div class="container valign-wrapper">
			<ul id="contactlist" >
			<li><strong>Email:</strong> YoungProdigy@airbnb.com</li>
			<li><strong>Phone:</strong> (123)-456-7890 </li>
			<li><strong>Adress:</strong> 123 ABC Avenue, Irvine, CA</li>
			</ul>
			</div>
			</div> -->
		</div>
		<!-- Company Rating Display -->
		<div class="col s5">
			<!--svg id="animated" viewbox="0 0 100 100">
			</svg-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script> -->
		<div class="col s12 m6 l6 atglance flow-text">
			<!--<p class="score" id="count">87%</p>-->
			<div id="mything" class="containerthing">
			eval("$('img.responsive-img').one("click",function(){
		var bar = new ProgressBar.Circle(mything, {
			color: '#009688',
			// This has to be the same size as the maximum width to
			// prevent clipping
			strokeWidth: 4,
			trailWidth: 1,
			easing: 'easeInOut',
			duration: 1400,
			text: {
			autoStyleContainer: false
			},
			from: { color: '#fff8e1', width: 1 },
			to: { color: '#ffc107', width: 4 },
			// Set default step function for all animate calls
			step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 100);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText(value);
			}
		  }
		});
		//bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
		//bar.text.style.fontSize = '2rem';

		bar.animate(0.75);  // Number from 0.0 to 1.0
")
			</div>
			<!--  <p id="scoretext">What does this mean?</p> -->
			<div class="divider5">
			</div>
			<h2 class="center-align">At a Glance</h2>
			<ul class="collapsible popout" data-collapsible="accordion">
				<li>
					<div class="collapsible-header active"><i class="material-icons">filter_drama</i>First</div>
					<div class="collapsible-body"><span id="cardfacts">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. </span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
					<div class="collapsible-body"><span id="cardfacts">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. </span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
					<div class="collapsible-body"><span id="cardfacts">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. </span></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">language</i>Fourth</div>
					<div class="collapsible-body"><span id="cardfacts">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. </span></div>
				</li>
			</ul>
			<br>
		</div>
		<ul id="tabs-swipe-demo" class="tabs reviewtab">
			<li class="tab col s4"><a href="#test-swipe-1">Online Reviews</a></li>
			<li class="tab col s4"><a href="#test-swipe-2"> Offline Reviews</a></li>
			<li class="tab col s4"><a href="#test-swipe-3">Personal Review</a></li>
		</ul>
		<div id="test-swipe-1" class="col s12 gray">No reviews yet.</div>
		<div id="test-swipe-2" class="col s12 white">No reviews yet.</div>
		<div id="test-swipe-3" class="col s12 gray">No reviews yet.</div>
	</div>
	<div class="gallery-action">
		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons" title="Website">web</i></a>
		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons" title= "Add to FetchList">add</i></a>
		<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons" title="Contact">chat_bubble</i></a>
	</div>
</div>

*/