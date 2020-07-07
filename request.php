<?php  

if(isset($_GET)){
	if ($_GET["request"] == "profile") {
		getProfile();
	} elseif ($_GET["request"] == "achievements") {
		achievements();
	} elseif ($_GET["request"] == "recent") {
		recent();
	}
}


function getProfile(){
	$key = "82D3FDCBFBE69FC8C9B89B3063C78531";
	$api_url_profile = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $key . "&steamids=76561198101439896";
	$profile = file_get_contents($api_url_profile);
	echo $profile;
}

function achievements(){
	$key = "82D3FDCBFBE69FC8C9B89B3063C78531";
	$api_url_success ="http://api.steampowered.com/ISteamUserStats/GetPlayerAchievements/v0001/?appid=292030&key=" . $key . "&steamid=76561198101439896";
	$achievements = file_get_contents($api_url_success);
	echo $achievements;
}

function recent(){
	$key = "82D3FDCBFBE69FC8C9B89B3063C78531";
	$api_url_recent ="http://api.steampowered.com/IPlayerService/GetRecentlyPlayedGames/v0001/?key=" . $key . "&steamid=76561198101439896&format=json";
	$recent = file_get_contents($api_url_recent);
	echo $recent;
}

?>