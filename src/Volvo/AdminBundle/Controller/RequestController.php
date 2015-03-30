<?php

namespace Volvo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Volvo\AdminBundle\Entity\Request as RequestEntity;
use Volvo\AdminBundle\Form\RequestType;

/**
 * Supplier controller.
 *
 */
class RequestController extends Controller
{
    public function indexAction(Request $request)
    {
	    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
	        throw new AccessDeniedException();
	    }
        
        $entity = new RequestEntity();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($entity);
        	$em->flush();
        
        	return $this->redirect($this->generateUrl('supplier'));
        }

        return $this->render('VolvoAdminBundle:Request:index.html.twig', array(
        	'form'   => $form->createView()
        ));
    }
    
    private function createCreateForm(RequestEntity $entity)
    {
        $form = $this->createForm(new RequestType(), $entity, array(
            'action' => $this->generateUrl('supplier'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
}
