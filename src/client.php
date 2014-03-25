<?php

namespace Bigstock\OAuth2API;

class Client
{

    /**
     * placeholder construct - not useful since there are two separate paths for instantiation
     */
    public function _construct() {}

    /**
     * primary kick-off method of setting up a communication route
     * takes the client and secret and saves it locally
     */
    public function setClientCredentials() {}

    /**
     * secondary method of setting up a communication route
     * accepts a token that has been granted by token endpoint
     */
    public function setToken() {}

    /**
     * method that handles all requests
     * there will need to be at least one authentication method defined before calling this
     */
    public function request() {}

}
