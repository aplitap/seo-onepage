<html>
	<head>
		<title>One page SEO tutorial</title>
		<style type="text/css">
			body{
				width: 100%;
			}
			.section{
				float: left;
				height: 100vh;
				width: 100vw;
			}

			.section-one{
				background: red;
			}

			.section-two{
				background: green;
			}

			.section-three{
				background: grey;
			}

			nav{
				position: fixed;
				width: 100vw;

			}
			nav ul{
				list-style: none;
			}

			nav ul li{
				display: inline-block;
			}

		</style>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="#" class="link" data-section-id="1" data-url="home">Home</a></li>
				<li><a href="#" class="link" data-section-id="2" data-url="about-us">About Us</a></li>
				<li><a href="#" class="link" data-section-id="3" data-url="contact">Contact</a></li>
			</ul>
		</nav>
		<div class="section section-one" data-id="1" data-section-url="home" data-section-title="home"></div>
		<div class="section section-two" data-id="2" data-section-url="about-us" data-section-title="about us"></div>
		<div class="section section-three" data-id="3" data-section-url="contact" data-section-title="contact"></div>
		<script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
		<script>
			var baseUrl=window.location.href;
			$(document).ready(function(){

				$('.link').click(function(e){
					e.preventDefault();
					var targetSection=$(this).data("section-id");
					var section=$('.section[data-id='+targetSection+']');
					var offsetTop=$(section).offset();
					$(window).scrollTop(offsetTop.top);
					console.log($(section).data("section-url"));
					history.replaceState('null', $(section).data("section-title"), baseUrl+$(section).data("section-url"));
				});
			});
		</script>
	</body>
</html>