<?php
namespace TDAmeritradeSdk\utils\;

use TDAmeritradeSdk\utils\CurlRequest;

class CurlRequest
{
	public function request(array $data)
	{   
        try
        {
            // Get cURL resource
            $curl = curl_init();
            // Set some options 
            curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $data['END_POINT'].http_build_query($data['PARAMS']),
            CURLOPT_HTTPHEADER =>
                ['Accept:application/json'] 
            ));
            // Send the request & save response to $resp
            $resp = curl_exec($curl);
            return $resp;
            // Close request to clear up some resources
            curl_close($curl);
        } catch (Exception $ex) {
            printf("Error while sending request, reason: %s\n",$ex->getMessage());
        }
    }
}
?>
//http_build_query