<?php 
include_once '_header_site.inc';
$ch = curl_init('https://suite.log-marketing.jp/HTTP_MSN/Messenger/HTTP_s1_v4.js');

// Execute
curl_exec($ch);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
// Check if any error occurred
if(!curl_errno($ch))
{
	$info = curl_getinfo($ch,CURLINFO_TOTAL_TIME);
	echo 'Took ' . $info . ' seconds to send a request to ';
}

// Close handle
curl_close($ch);
exit;