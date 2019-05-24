<?php
namespace TDAmeritradeSdk\models;

use TDAmeritradeSdk\utils\CurlRequest;

class PriceHistory extends CurlRequest
{
	public function get(array $data)
	{
		// Add token to param array.
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