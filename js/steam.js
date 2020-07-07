document.addEventListener('DOMContentLoaded', function() {
	let key = '82D3FDCBFBE69FC8C9B89B3063C78531'

	//Profile
	$.ajax({
		url:'request.php',
		data : {'request' : 'profile'}
	}).done(function(data){
		data = JSON.parse(data)
		data = data.response.players[0]

		var pp = document.querySelector('.profile-pic')
		var name = document.querySelector('.profile-title')
		var status = document.querySelector('.status')

		pp.src = data.avatarfull
		name.innerHTML = data.personaname
		console.log(data.personastate)
		if (data.personastate != 0) {
			status.classList.add("online")
			status.innerHTML = "Online"
		} else {
			status.classList.add('offline')
			status.innerHTML = "Offline"
		}

	}).fail(function(xhr, status, error){
		console.log(xhr.responseText)
	})

	$.ajax({
		url:'request.php',
		data : {'request' : 'recent'}
	}).done(function(data){
		data = JSON.parse(data)
		data = data.response.games[0]
		
		var pic = document.querySelector('.recent-game-pic')
		var name = document.querySelector('.game-title')
		var pic_string = "http://media.steampowered.com/steamcommunity/public/images/apps/" + data.appid + "/" + data.img_logo_url +".jpg"
		var playtimeW = document.querySelector('.playtime-2w')
		var playtimeF = document.querySelector('.playtime-f')

		pic.src = pic_string
		name.innerHTML = data.name
		playtimeF.innerHTML = Math.trunc(data.playtime_forever / 60) + " hours total"
		playtimeW.innerHTML = Math.trunc(data.playtime_2weeks / 60) + " hours during the last two weeks"



	}).fail(function(xhr, status, error){
		console.log(xhr.responseText)
	})
});