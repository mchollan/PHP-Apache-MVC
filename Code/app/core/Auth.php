<?php

class Auth
{
    const DEFAULT_ROLE = "User";
    const ADMIN_ROLE = "Admin";

    public $_Auth0;
    function __construct() {
        $this->_Auth0 = new \Auth0\SDK\Auth0([
            'domain' => $_ENV['AUTH0_DOMAIN'],
            'clientId' => $_ENV['AUTH0_CLIENT_ID'],
            'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
            'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET']
            ]);  
      }

    public function getUser()
    {
        return $this->_Auth0->getUser();
    }

    public function getSession()
    {
        return $this->_Auth0->getUser();
    }

    public function getRole()
    {
        $user = $this->_Auth0->getUser();
        if(!array_key_exists('role', $user))
        {
            return Auth::DEFAULT_ROLE;
        }

        if(count($user['role']) == 0)
        {
            return Auth::DEFAULT_ROLE;
        }

        if(strtolower($user['role'][0]) == 'admin')
        {
            return Auth::ADMIN_ROLE;
        }

        return Auth::DEFAULT_ROLE;
    }
}




?>