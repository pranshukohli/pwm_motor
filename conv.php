<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo 'dfghjkl212312ahsg\ndsdfsdfsd';

		$address = "Brooklyn+NY+USA";

//set map api url
$url = "https://thingspeak.com/channels/222498/field/1.json";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->channel[0]->id;

echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
