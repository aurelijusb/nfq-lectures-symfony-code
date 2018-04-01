<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint;

class BasicAuthCustomOutput extends BasicAuthenticationEntryPoint implements AuthenticationEntryPointInterface {


    function __construct()
    {
        parent::__construct('This is secured area');
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        $response = parent::start($request, $authException);
        $response->setContent('Not authorised. Please try again');
        return $response;
    }
}