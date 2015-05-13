<?php

namespace PhillPrice\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EducationController extends Controller
{
    public function listAction() {
        $Education = $this->getDoctrine()
        ->getRepository('PhillPriceResumeBundle:Education')
        ->findAllOrderedByDate();
        
        return $this->render(
        	'PhillPriceResumeBundle:Education:list.html.twig', 
        	array(
        		'educations' => $Education
        	)
        );
    }
    public function detailAction($id) {
	    $Education = $this->getDoctrine()
        ->getRepository('PhillPriceResumeBundle:Education')
        ->find($id);

	    if (!$Education) {
        throw $this->createNotFoundException(
          'No Education found for id '.$id
        );
	    }
	    return $this->render(
      	'PhillPriceResumeBundle:Education:detail.html.twig', 
      	array(
      		'education' => $Education
      	)
      );
	    // ... do something, like pass the $product object into a template
		}
    public function newAction() {
        return $this->render(
        	'PhillPriceResumeBundle:Education:new.html.twig', 
        	array(
        		'name' => $name
        	)
        );
    }
    public function createAction() {
        return $this->detailAction($id);
    }
    public function editAction() {
        return $this->render(
        	'PhillPriceResumeBundle:Education:edit.html.twig', 
        	array(
        		'name' => $name
        	)
        );
    }
    public function saveAction($id) {
      $em = $this->getDoctrine()->getManager();
	  	$Education = $em->getRepository('AppBundle:Education')->find($id);

	    if (!$Education) {
        throw $this->createNotFoundException(
          'No Education found for id '.$id
        );
	    }

	    //actually update here
	  	//set flash
	  	$em->flush();

			return $this->detailAction($id);
    }
    public function deleteAction($id) {
      $em = $this->getDoctrine()->getManager();
	  	if($Education = $em->getRepository('AppBundle:Education')->find($id)){
				$em->remove($Education);
				$em->flush();
				//set flash
	  	}

			return $this->listAction();
    }
}
