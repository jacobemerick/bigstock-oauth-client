<?php

namespace Bigstock\OAuth2API;

class Client
{

    const TOKEN_ENDPOINT = 'token';

    protected $client;
    protected $secret;

    protected $token;

    protected $in_production_mode;

    /**
     * construct method, useful only for setting whether or not you are hitting production endpoints
     *
     * @param  $in_production_mode  whether or not the client should hit production servers
     */
    public function _construct($in_production_mode = true)
    {
        $this->in_production_mode = $in_production_mode;
    }

    /**
     * primary kick-off method of setting up a communication route
     * takes the client and secret and saves it locally
     *
     * @param  $client  string  the client (partner) id
     * @param  $secret  string  the secret key tied to the client account
     */
    public function setClientCredentials($client, $secret)
    {
        $this->client = $client;
        $this->secret = $secret;
    }

    /**
     * secondary method of setting up a communication route
     * accepts a token that has been granted by token endpoint
     *
     * @param  $token  string  token handed off by api to make secure calls
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * method that handles all requests
     * there will need to be at least one authentication method defined before calling this
     *
     * @param   $endpoint          string   the endpoint for service you want to hit
     * @param   $parameters        array    key -> value set of parameters relevant to the call
     * @param   $is_token_request  boolean  whether or not you are request a token
     * @return                     json     expanded json class from the request
     */
    public function request($endpoint, $parameters, $is_token_request = false)
    {
        $this->checkRequiredAuthentication($is_token_request);
        
        if ($is_token_request) {
            // set basic http authentication header
            // set post body of token request
        } else {
            // set post body with token credentials
        }
    }

    /**
     * helper method to check for basic required authentication before making a request
     *
     * @param  $is_token_request  boolean  whether or not this request is for a token
     */
    protected function checkRequiredAuthentication($is_token_request)
    {
        if ($is_token_request) {
            if (empty($this->client) || empty($this->secret)) {
                throw new Exception('You must define the client and secret before requesting a token!');
            }
        } else {
            if (empty($this->token)) {
                throw new Exception('You must have a valid token before making a request!');
            }
        }
    }

}
