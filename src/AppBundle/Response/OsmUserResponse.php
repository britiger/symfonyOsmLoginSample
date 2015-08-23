<?php

namespace AppBundle\Response;

use HWI\Bundle\OAuthBundle\OAuth\Response\PathUserResponse;

class OsmUserResponse extends PathUserResponse {

    public function setResponse($response)
    {
        if (is_array($response)) {
            $this->response = $response;
        } else {
            // First check that response exists, due too bug: https://bugs.php.net/bug.php?id=54484
            if (!$response) {
                $this->response = array();
            } else {
		$simpleXml = simplexml_load_string($response);
		$json = json_encode($simpleXml);

                $this->response = json_decode($json, true);
                if (JSON_ERROR_NONE !== json_last_error()) {
                    throw new AuthenticationException('Response is not a valid JSON code.');
                }
            }
        }
    }

}
