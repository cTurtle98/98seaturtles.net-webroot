<html>
  <head>
    <title>DoorSign - 98Seaturtles</title>
    <style>
    	body {
      		margin: 0;
    	}
		#main {
			height: 1366px;
			width: 768px;
			background-color: black;
			text-align: center;
		}
		#title {
			background-color: green;
			color: yellow;
		}
		.message {
			display: none;
		}
		.message.active {
		display: block;
		}
		.message.home {
			background-color: green;
		}	
		.message.away {
			background-color: orange;
		}
		.message.live {
			background-color: red;
		}
		.message.recording {
			background-color: red;
		}
/* CUSTOM TYPEFACES */
    .bigger {
      font-size: 60pt;
    }
    .big {
      font-size: 50pt;
    }
/* END CUSTOM TYPEFACES */
    </style>
<!-- TWITCH SCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="http://player.twitch.tv/js/embed/v1.js"></script>
	<script type="text/javascript">
	$(function() {
		if ($(".message.live").hasClass("active")) {
			var options = {
				width: 760,
				height: 432,
				channel: "cturtle98"
			};
			var player = new Twitch.Player("twitch", options);
			player.setMuted(true);
			player.setQuality("low");
			player.play();
		}
//LCD BURN IN GUARD START
		var $burnGuard = $('<div>').attr('id','burnGuard').css({
			'background-color':'#FF00FF',
			'width':'1px',
			'height':$(document).height()+'px',
			'position':'absolute',
			'top':'0px',
			'left':'0px',
			'display':'none'
		}).appendTo('body');

		var colors = ['#FF0000','#00FF00','#0000FF'], color = 0, delay = 5000, scrollDelay = 10500;
		function burnGuardAnimate()
		{
			color = ++color % 3;
			var rColor = colors[color];
			$burnGuard.css({
				'left':'0px',
				'background-color':rColor,
			}).show().animate({
				'left':$(window).width()-1+'px'
			},scrollDelay,function(){
				$(this).hide();
			});
			setTimeout(burnGuardAnimate,delay);
		}
		setTimeout(burnGuardAnimate,delay);
//LCD BURN IN GUARD END
	});
	</script>
<!-- END TWITCH SCRIPTS-->
  </head>
  <body>
    <div id="main">
		<div id="title">
			<br>
			<a class="bigger">
				Ciaran's Room
				<br>
			</a><br>
		</div>
		<br>
<!--Home Message -->
		<div class="message bigger home active">
			<br> Ciaran is HOME <br><br> ENTER<br>AT<br>YOUR<br>OWN<br>RISK<br><br>
		</div>
<!-- AWAY MESSAGE -->
		<div class="message bigger away">
			<br> Ciaran is <br> NOT HOME <br><br> DO NOT ENTER <br><br>
		</div>
<!-- LIVE MESSAGE -->
		<div class="message bigger live">
			<br> Ciaran is <br> LIVESTREAMING <br><br> DO NOT ENTER <br><br>
			<div id="twitch"></div><br>
		</div>
<!-- REDORDING MESSAGE -->
		<div class="message bigger recodring">
			Ciaran is <br> RECODRING <br><br> DO NOT ENTER <br>
		</div>
    </div>
  </body>
</html>