<!DOCTYPE html>
<html>
<head>
	<title>Ging</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous"></script>
</head>
<body>
	<!-- sidenav -->
	<ul id="slide-out" class="sidenav">
		<li>
			<div class="user-view">
				<a href="https://steamcommunity.com/profiles/76561198101439896/"><img class="circle" src="images/kanna2.jpg"></a>
				<a href="#name" class="waves-effect"><span class="white-text name">Ging</span></a>
				<a href="#email"><span class="white-text email">Multi-gaming g@merZ</span></a>

			</div>
		</li>

		<li><a href="https://steamcommunity.com/profiles/76561198101439896/" target="_blank"><i class="material-icons white-text">gamepad</i>My Steam profile</a></li>
		<li><a href="#!" class="status"></a></li>
		<li><div class="divider"></div></li>
	</ul>
	<div class="container">
		<!-- Steam profile -->
		<div class="row">
			<div class="col s12 m6">
				<div class="card blue-grey darken-1  steam-profile">
					<div class="card-content white-text steam-profile">
						<span class="card-title profile-title"></span>
						<img src="" class="profile-pic">
						<p>Hi, I'm a 20 y/o french gamer. This card link directly link to my steam profile, add me if you wanna play !</p>
					</div>
					<div class="card-action steam-profile">
						<a href="https://steamcommunity.com/profiles/76561198101439896/" target="_blank">View my profile</a>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card blue-grey darken-1  steam-profile">
					<div class="card-content white-text steam-profile">
						<span class="card-title">My favorite online games</span>
						<div class="divider"></div>
						<div class="card-action">
							<a href="">FINAL FANTASY XIV</a>
						</div>
						<div class="center-align">
							<img src="./images/ff14.jpg">
						</div>
						<div class="card-content">
							<p>Erina Ancrath<br>Lv. 80 BLM/PSB<br>Light -> Lich<br>Add me if you want, I'd be happy to play with you</p>
						</div>
				</div>
			</div>
		</div>

		<div class="row">
		<div class="col s12 m6">
			<div class="card blue-grey darken-1  recent-game">
					<div class="card-content white-text recent-game">
						<span class="card-title">Recently played</span>
						<div class="row valign-wrapper">
							<div class="col s6">
								<img src="" class="recent-game-pic">
							</div>
							<div class="col s6">
								<h3 class="game-title"></h4>
							</div>
						</div>
						<div>
							<span class="playtime-2w"></span>
						</div>
					</div>
					<div class="card-action">
						<span class="playtime-f"></span>
					</div>
				</div>
		</div>
	</div>			
	</div>


	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/steam.js"></script>
</body>
</html>