<?php
namespace TDAmeritradeSdk\models;

use TDAmeritradeSdk\utils\CurlRequest;

/**
* 
*/
class GetQuote extends CurlRequest
{
	public function get(array $data)
	{
		$data['params']['token'] = $data['token'];

		$result =
		$CurlRequest = new CurlRequest([
			'END_POINT'=>$data['endpoint'],
			'PARAMS'=>$data['params']
			]);

		return $result;
	}
}
?>