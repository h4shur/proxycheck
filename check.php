<?php

// twitter : h4shur
// instagram : h4shur
// telegram : h4shur
// h4shursec@gmail.com

 if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "") {
                $IPs = $_SERVER["REMOTE_ADDR"];
                $IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else {
                $IP = $_SERVER["REMOTE_ADDR"];
                $IPs = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } 
            

$h4shurApiUrl = "https://h4shur.xyz/proxycheck/?ip=" . $IP;
 
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $h4shurApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
 
curl_close($ch);
$data = json_decode($response);


echo "<br />";
echo "status : ";
echo $data->status; 

echo "<br />";
echo "status_tor : ";
echo $data->status_tor; 


echo "<br />";
echo "ip : ";
echo $IP;


echo "<br />";
echo "data : ";
echo $response;

// twitter : h4shur
// instagram : h4shur
// telegram : h4shur
// h4shursec@gmail.com

?>
