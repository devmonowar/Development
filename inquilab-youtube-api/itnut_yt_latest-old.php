<?php

// https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UC1RJ3aEdvBMJSinziVp0U2Q&maxResults=40&key=AIzaSyDNfG_mM1JDMPFOd-JCsGv-RRywqCq22S0
//include('/home/daily1nqilab809/public_html/includes/config.php');
//Get videos from channel by YouTube Data API
//$API_key    = 'AIzaSyDNfG_mM1JDMPFOd-JCsGv-RRywqCq22S0';
//API created by IT Nut Hosting
$channelID  = 'UC1RJ3aEdvBMJSinziVp0U2Q';
$maxResults = 40;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
var_dump($videoList);
echo "test";
$count = 1;
foreach($videoList->items as $item){
    if(isset($item->id->videoId)){
		$videoID = $item->id->videoId;
		$videoTitle = $item->snippet->title;
		$sql = "UPDATE nut_yt_videos SET nyt_videoId='$videoID', nyt_title='$videoTitle' where nyt_id='$count'";
		$result = $db->update($sql);
    }
	$count++;
}
?>
