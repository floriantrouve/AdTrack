<?php

namespace Volvo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Volvo\AdminBundle\Entity\Supplier;
use Volvo\AdminBundle\Form\SupplierType;

/**
 * Supplier controller.
 *
 */
class SupplierController extends Controller
{

    /**
     * Lists all Supplier entities.
     *
     */
    public function indexAction(Request $request)
    {
	    if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
	        throw new AccessDeniedException();
	    }
    	
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VolvoAdminBundle:Supplier')->findAll();
        
        $entity = new Supplier();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($entity);
        	$em->flush();
        
        	return $this->redirect($this->generateUrl('supplier'));
        }

        return $this->render('VolvoAdminBundle:Supplier:index.html.twig', array(
            'entities' => $entities,
        	'form'   => $form->createView()
        ));
    }

    /**
     * Creates a form to create a Supplier entity.
     *
     * @param Supplier $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Supplier $entity)
    {
        $form = $this->createForm(new SupplierType(), $entity, array(
            'action' => $this->generateUrl('supplier'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Deletes a Supplier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
    	if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
    		throw new AccessDeniedException();
    	}
    	
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('VolvoAdminBundle:Supplier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Supplier entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('supplier'));
    }
}
