<?php
function AbreDolarAmericano ( $url ) 
{
	$dolar_americano_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $dolar_americano_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbreDolarCanadense ( $url ) 
{
	$dolar_canadense_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $dolar_canadense_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbreDolarAustraliano ( $url ) 
{
	$dolar_australiano_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $dolar_australiano_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbreLibra ( $url ) 
{
	$libra_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $libra_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbreEuro ( $url ) 
{
	$euro_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $euro_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbrePesoArgentino ( $url ) 
{
	$peso_argentino_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $peso_argentino_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbrePesoUruguaio ( $url ) 
{
	$peso_uruguaio_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $peso_uruguaio_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

function AbreOuro ( $url ) 
{
	$ouro_url = $url;
	$ch = curl_init();
	$timeout = 5;
	curl_setopt ($ch, CURLOPT_URL, $ouro_url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	ob_start();
	curl_exec($ch);
	curl_close($ch);
	$file_contents = ob_get_contents();
	ob_end_clean();
	return $file_contents;
}

//http://finance.yahoo.com/d/quotes.csv?s=USDBRL=X&f=sl1d1t1

?>