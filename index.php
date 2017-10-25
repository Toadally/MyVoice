<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/yv.css">
</head>

<body>

	<div class="yv-home-navbar">
		<ul>
			<li id="logo"><a href="#"><span style="font-weight: 300">my</span><span style="font-weight: bold">Voice</span></a></li>
			<li><a href="#">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
			<li style="float: right; font-weight: normal;"><a href="/login">Log In</a></li>
			<li style="float: right; font-weight: normal"><a href="/login">Sign Up</a></li>

		</ul>
	</div>

	<div class="yv-jumbo">

		<div class="overlay">
			<div class="text-bg">
				<table>
					<tr width="100%">
						<td width="40%">
							<img src="./assets/img/chaticon.png" width="50%" style="margin: auto; display: block;">
						</td>
						<td>
							<h1>Letting your voice be heard.</h1>
							<h2 class='sub'>One Post at a Time</h2>
							<button>Sign Up</button>
						</td>
					</tr>

				</table>
			</div>
		</div>
	</div>

	<div class="page">
		<div style="background: rgb(250,250,250); padding-top: 20px; padding-bottom: 20px;">
			<div class="section">
				<table>
					<tr>
						<td width="50%">
							<h1>Anonymous Messaging</h1>
							<lorem-ipsum></lorem-ipsum>
							</td>
							<td>
								<img width="60%" style="margin: auto; display: block;" class="img1" src="./assets/img/sampleapp.png">
							</td>
					</tr>

					<tr>
						<td width="50%">
							<img width="60%" style="margin: auto; display: block;" class="img2" src="./assets/img/sampleapp.png">
						</td>
						<td>
							<h1>Security</h1>
							<lorem-ipsum></lorem-ipsum>
						</td>
					</tr>


				</table>
			</div>
		</div>
		<div class="section" style="box-shadow: none">
			<center>
				<h1 class="nomarg">We have <span class="count" id="count">666</span> users</h1><br>
				<button>Join The Community</button><br>
			</center>
		</div>

		<div style="background: rgb(250,250,250); padding-top: 20px; padding-bottom: 20px;">
			<div class="section">

				<table>
					<tr>
						<td width="40%">
							<img width="40%" style="margin: auto; display: block;" class="img2" src="./assets/img/rocketicon.png">
						</td>

						<td width="60%">

							<h1>Our Goal</h1>
							<lorem-ipsum></lorem-ipsum>

						</td>
					</tr>
				</table>

			</div>

		</div>
	</div>







</body>

<footer>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="./assets/js/loremipsum.js"></script>
	<script src="./assets/js/waypoint.js"></script>
	<script>
		var firstScroll = false;

		$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});


		$(window).on('scroll', function() {
			checkScroll();

		});

		function checkScroll(){
			if($(window).scrollTop() > 0){
				$(".yv-home-navbar").addClass("unlocked");
			} else {
				$(".yv-home-navbar").removeClass("unlocked");
			}
			if (isScrolledIntoView('.count') && !firstScroll) {
					runCounter();
			}
			if(isScrolledIntoView('.img1')){
				console.log("Img1");
				$('.img1').addClass("slideInRight animated");
			}
			if(isScrolledIntoView('.img2')){
				console.log("Img2");
				$('.img2').addClass("slideInLeft animated");
			}
		}
		function isScrolledIntoView(elem)
		{
		  var docViewTop = $(window).scrollTop();
		  var docViewBottom = docViewTop + $(window).height();

		  var elemTop = $(elem).offset().top;
		  var elemBottom = elemTop + $(elem).height();

		return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
		}

		function runCounter() {

			firstScroll = true;
			console.log("Hello World");
			$(".count").each(function(){
				$(".count").prop('Counter',0).animate({
						Counter: $(this).text()
				}, {
						duration: 2000,
						easing: 'swing',
						step: function (now) {
								$(this).text(Math.ceil(now));
						}
				});
			});
		}
	</script>
</footer>

</html
