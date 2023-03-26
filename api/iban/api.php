<?php
if (@$_POST["submit"]) {
	function siteAdresi($site){
		$ch = curl_init();
		$hc = "YahooSeeker-Testing/v3.9 (compatible; Mozilla 4.0; MSIE 5.5; Yahoo! Search - Web Search)";
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com');
		curl_setopt($ch, CURLOPT_URL, $site);
		curl_setopt($ch, CURLOPT_USERAGENT, $hc);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$site = curl_exec($ch);
		curl_close($ch);
		return $site;
	}

	function search($start, $end, $string){
		@preg_match_all('/' . preg_quote($start, '/') .
		'(.*?)'. preg_quote($end, '/').'/i', $string, $m);
		return @$m[1];
	}

	$trim = str_replace(" ","", $_POST["iban"]);
    $veri= siteAdresi("https://iban.gen.tr/iban-cozumleme-ve-dogrulama?kod=".$trim);
	$itemName = search('<strong>','</strong>',$veri)[0];
	$itemImg = search('src="','"',$veri)[2];

}
?>