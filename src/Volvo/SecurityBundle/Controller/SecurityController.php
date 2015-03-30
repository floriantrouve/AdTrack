<?php

namespace Volvo\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{    
    public function loginAction(Request $request)
    {
    	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    		$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    	} else {
    		$error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
    	}
    	
    	$response = $this->render('VolvoSecurityBundle:Security:index.html.twig', array(
    			'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
    			'error'         => $error,
    	));
    	
    	$response->setMaxAge(3600);
    	
    	return $response;
    }
}
