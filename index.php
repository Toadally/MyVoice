<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/forum.css">
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

	<div class="yv-jumbo" style="background: url('/assets/img/landscape.jpg')">
		<video src="/assets/video/berlin.mp4" loop autoplay></video>
		<div class="overlay">
			<div class="text-bg">
				<table>
					<tr width="100%">
						<td width="40%">
							<img src="./assets/img/chaticon.png" width="50%" style="margin: auto; display: block;">
						</td>
						<td class="yv-jumbo-text">
							<h1>Letting your voice be heard.</h1>
							<h2 class='sub'>One Post at a Time</h2>
							<button class="button-white">Sign Up</button>
						</td>
					</tr>

				</table>
			</div>
		</div>
	</div>

	<div class="page">
		<div style="background: rgb(250,250,250); padding-top: 20px; padding-bottom: 20px;">
			<div class="section">
					<div class="row">
						<div class="col-md-6">
							<h1>Anonymity</h1>
							<lorem-ipsum></lorem-ipsum>
						</div>
						<div class="col-md-6">
							<img width="60%" style="margin: auto; display: block;" class="img1" src="./assets/img/sampleapp.png">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img width="60%" style="margin: auto; display: block;" class="img2" src="./assets/img/sampleapp.png">
						</div>
						<div class="col-md-6">
							<h1>Security</h1>
							<lorem-ipsum></lorem-ipsum>
						</div>
					</div>
			</div>
		</div>

		<div class="section" style="box-shadow: none">
			<center>
				<h1 class="nomarg">We have <span class="count" id="count">666666</span> users</h1><br>
				<button>Join The Community</button><br>
			</center>
		</div>

		<div style="background: rgb(250,250,250); padding-top: 20px; padding-bottom: 20px;">
			<div class="section">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="post dark in-feed">
							<span class="author">ExuberantRaptor</span>
							<span class="time">5m</span>
							<div class="tags">
								<span class="label label-default">Politics</span>
								<span class="label label-default">America</span>
								<span class="label label-default">Society</span>
							</div>

							<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu luctus enim. Vivamus ac mi diam...</p>

							<div class="comments">

								<div class="comment-inpost">
									<span class="author">LuckyGiraffe</span>
									<span class="time">32s</span>

									<p class="message">Me too! I totally agree with the ipsum dolor sit amet</p>
								</div>


							</div>
							<p class="more">View Thread</p>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1>Speak Freely</h1>
						<p>With every post, you are assigned a different name to secure your identity. Nobody will know who you are, and you will not know who responds to you. Communicate without fear of embarassment and with anonymity!</p>
					</div>
				</div>


			</div>

		</div>
	</div>







</body>

<footer>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./assets/js/forum.js"></script>
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
