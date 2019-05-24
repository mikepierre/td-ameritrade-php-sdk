<?php
// Here are some Examples
require "vendor/autoload.php";

use TDAmeritradeSdk\models\GetQuote;
use TDAmeritradeSdk\models\MarketData;
use TDAmeritradeSdk\models\PriceHistory;
use YamlDigest;

$GetQuote = new GetQuote();
$MarketData = new MarketData();
$PriceHistory =  new PriceHistory();


// lets get the important values in order to build out http request.
$authenication = $this->getYaml(['yaml_file'=>'authenication']);
$endpoints = $this->getYaml(['yaml_file'=>'endpoints']);

// Get Single Quote
// v1/marketdata/{symbol}/quotes
$GetQuote->get(
	[
		'token'=>$authenication['apikey'],
		'endpoint'=>['url','marketdata','quotes'],
		'params'=>'PANW'
	]
	);

// Get a List of quotes
// v1/marketdata/quotes/{symbol}
$GetQuote->get(
	[
		'token'=>$authenication['apikey'],
		'endpoint'=>$endpoints['url','marketdata','quotes'],
		'params'=>['GOOG','PANW','AMZN']
	]
	);


?>