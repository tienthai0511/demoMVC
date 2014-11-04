<?php
	$url='http://thaivt.it-trend.jp/products/4286';
	function get_data($url){
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		$http_res = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );

		return $data;
		curl_close($ch);
	}
for($i=0;$i <10;$i++){
	 //rss link for the twitter timeline
    $domdocument = new DOMDocument();
    $domdocument->loadHTML(get_data($url));
    $a = new DOMXPath($domdocument);
    $spans = $a->query('//div[@class="logo"]');
	foreach($spans as $element){
		$links = $element->getElementsByTagName('img');

		foreach($links as $a) {
			$result[] = $a->getAttribute('alt');
		}
		print_r($result[1]);
		if ($result[1] != NULL) echo 1; 
    }
	$domdocument = NULL;
}
    echo "<pre>";
    print_r($result);
    exit();